/*

BLACKLIGHT CATALOG NEW ADDITIONS WIDGET
===========================
Prints a linked list of newly cataloged items matching a Blacklight query.

  Example #1) Show Thumbs:
  <h2>Lilly Current Literature <span id="count-catalog-feed-items-lilly-currentlit"></span></h2>
  <ul id="catalog-feed-items-lilly-currentlit" data-query="f%5Blocation_hierarchy_f%5D%5B%5D=duke%3Adukelily%3Adukelilycure" data-showcount="true" data-showthumbs="true"></ul>

  Example #2) No Thumbs, Prefer Finding Aid Link:
  <ul id="catalog-feed-items-hartman-mss" class="new-additions list-styled" data-query="f%5Bauthor_facet_f%5D%5B%5D=John+W.+Hartman+Center+for+Sales%2C+Advertising+%26+Marketing+History&f%5Bresource_type_f%5D%5B%5D=Archival+and+manuscript+material" data-fetchresults="4" data-preferfaid="true" data-showcount="true" data-showthumbs="false">...</ul> 

  Options (* = optional)
  -------
  id: catalog-feed-items; can have multiple on page by appending -2, -3, etc.
  data-query: Blacklight query parameters & values
  data-showcount*: render the count of matching results in an element w/id 'count-{id}'
  data-preferfaid*: if 'true', links to RL finding aid if exists, rather than catalog item page
  data-fetchresults*: how many search results to retrieve? (default: 20)
  data-showitems*: how many items to display? the rest will be display: hidden; (default: all).
      Useful esp. for items w/unknown number of legitimate thumbs -- may have to fetch 30
      to find 10 items w/legit thumbs; of those 10, how many to display?
  data-showthumbs*: if 'true', will render a thumbnail image from Syndetics
  
*/

jQuery(document).ready(function ($) {

  function shorten(text, maxLength) {
      var ret = text;
      if (ret.length > maxLength) {
          ret = ret.substr(0,maxLength-3) + "...";
      }
      return ret;
  }

  function find_faid(obj) {
    if(obj.hasOwnProperty('url_a')) {
      faid_obj = JSON.parse(obj.url_a[0]);
      if(faid_obj.type == "findingaid") {
        return faid_obj.href;
      }
    }
    else {
      return "";
    }
  }

  function find_author(obj) {
    if(obj.hasOwnProperty('statement_of_responsibility_a')) {
      return shorten(obj.statement_of_responsibility_a[0],40);
    }
    else {
      return "";
    }
  }

  function build_thumb(obj) {
    thumb_url = 'https://syndetics.com/index.aspx?isbn=';
    if(obj.hasOwnProperty('isbn_number_a')) {
      thumb_url += obj.isbn_number_a[0];
    }
    thumb_url += '/LC.GIF&upc=';
    if(obj.hasOwnProperty('upc_a')) {
      thumb_url += obj.upc_a[0].replace('UPC: ','');
    }
    thumb_url += '&oclc=';
    if(obj.hasOwnProperty('oclc_number')) {
      thumb_url += obj.oclc_number;
    }
    thumb_url += '&client=trlnet';
    return thumb_url;
  }

  function find_description(obj) {
    if(obj.hasOwnProperty('note_summary_a')) {
      // Replace quotes in note--they mess things up
      return shorten(obj.note_summary_a[0],100).replace(/"/g, "'");
    }
    else {
      return "";
    }
  }

  var catalog_base_url = 'https://find.library.duke.edu';

  $("[id^=catalog-feed-items]").each(function(){
    var $this_widget = $(this);
    var widget_id = $this_widget.attr('id');
    var blacklight_query = $this_widget.attr('data-query');
    var fetchresults = parseInt($this_widget.attr('data-fetchresults')) || 20;
    var showitems = parseInt($this_widget.attr('data-showitems'));
    var showcount = $this_widget.attr('data-showcount');
    var prefer_faid = $this_widget.attr('data-preferfaid');
    var showthumbs = $this_widget.attr('data-showthumbs');

    if (showthumbs == 'true') {
      $this_widget.addClass('new-additions-with-thumb');
    } else {
      $this_widget.addClass('new-additions-text-only');            
    }

    $(this).html('');
    
    $.ajax({
      url: catalog_base_url + '/catalog.json?sort=date_cataloged+desc&amp;'
        + 'per_page=' + fetchresults + '&amp;' + blacklight_query,
      type: "GET",
      dataType: 'json',
      success: function (data) {

        // Get total result count for query
        var total_results = data.response.pages.total_count.toString();

        // Prettify with commas
        var result_count = total_results.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

        // Add the result count to an element on the page
        $('#count-'+widget_id).html(result_count);

        $.each(data.response.docs, function(idx, obj) {
          var item = {};

          item = {
            title:        shorten(obj.title_main,80) || "[Untitled]",
            link:         catalog_base_url + '/catalog/' + obj.local_id,
            author:       find_author(obj),
            findingaid:   find_faid(obj),
            description:  find_description(obj),
            thumb:        build_thumb(obj),
          }

          if (prefer_faid == 'true' && item.findingaid) {
            item.link = item.findingaid;
          }


          var $item_li = $('<li />');
          var $item_link_markup = $('<a />').attr('href', item.link).attr('title', item.description).attr('class', 'new-additions-link');
          var item_title_markup = '<div class="new-additions-title">' + item.title + '</div>';
          var item_info_markup = '<div class="muted small new-additions-author">' + item.author + '</div>';

          if (showthumbs == 'true') {
            // First check that the thumbnail is actually present / legitimate
            var $thumb_img = $("<img />").attr('src', item.thumb)
                .on('load', function() {
                    if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth < 0) {
                      $item_li.attr('class','badthumb');
                      $item_li.attr('style','display: none');
                      $item_li.remove();
                    } else {
                      $item_link_markup.prepend('<br/>');
                      $item_link_markup.prepend($thumb_img);
                    }
                })
                .on('error', function() {
                  $item_li.attr('class','badthumb');
                  $item_li.attr('style','display: none');
                  $item_li.remove();
                });
          }

          $item_link_markup.append(item_title_markup);
          $item_li.append($item_link_markup);
          $item_li.append(item_info_markup);
          $this_widget.append($item_li);

        }); // end document iterator

      } // end success
    }); // end .ajax({})

    if (showitems != null) {
      $this_widget.after('<style type="text/css">' + '#' + widget_id + ' li:nth-of-type(n+' + (showitems + 1) + ') { display: none; }</style>');
    }

  }); // end #catalog-feed-items* iterator
});
