<?php
/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * Other variables:
 * - $endeca_url: URL for Duke's search catalog web application
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 * @see dul_system_preprocess()
 *
 * @ingroup themeable
 */

	$theme_path = drupal_get_path('theme', 'madlib');
?>
<div<?php print $attributes; ?>>
		<nav role="navigation" class="globalNav">
		    <div class="megamenu_container megamenu_light_bar megamenu_light"><!-- Begin Menu Container -->
		        <ul class="megamenu"><!-- Begin Mega Menu -->
		            <li class="megamenu_button"><a class="btn dropdown-toggle btn-inverse" href="#_">Menu <span class="caret"></span></a></li>
		            <li class="mega_toplevel"><a href="/find" class="megamenu_drop" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Search Find Portal'});">Search &amp; Find</a><!-- Begin Item -->
		                <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    <div class="col_4">
		                        <ul class="primaryColumn">
									<li><a href="<?php print $endeca_url; ?>" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Books Media'});">Books &amp; Media</a><br/><span class="muted smaller normal">Books, journals, films &amp; more</span></li>
									<li><a href="/find/articles" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Articles'});">Articles</a><br/><span class="muted smaller normal">From journals, newspapers, magazines</span></li>
									<li><a href="/find/journal-titles" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Online Journal Titles'});">Online Journal Titles</a><br/><span class="muted smaller normal">Find by title</span></li>
									<li><a href="/find/databases" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Research Databases'});">Research Databases</a><br/><span class="muted smaller normal">Find by title and subject</span></li>
								</ul>
		                    </div>
		                    <div class="col_2">
		                        <ul>
									<li><a href="/find/film-video" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Film Video'});">Film &amp; Video</a></li>
									<li><a href="/music" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Music'});">Music</a></li>
									<li><a href="/data" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Data'});">Data &amp; Digital Maps</a></li>
									<li><a href="http://guides.library.duke.edu/images" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Images'});">Images</a></li>
									<li><a href="/find/ebooks" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'eBooks'});">eBooks</a></li>
									<li><a href="/find/newspapers" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Newspapers'});">Newspapers</a></li>
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/rubenstein" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Special Collections'});">Special Collections</a></li>
									<li><a href="/digitalcollections/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Digitized Collections'});">Digitized Collections</a></li>
									<li><a href="/find/scholarly" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Duke Faculty Scholarly Work'});">Duke Faculty Scholarly Work</a></li>
									<li><a href="/find/theses-dissertations" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Theses Dissertations'});">Theses &amp; Dissertations</a></li>
									<li><a href="/find/primary" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Primary Sources'});">Primary Sources</a></li>
									<li><a href="/find/website?Ntt=" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Our Website'});">Our Website</a></li>

								</ul>
		                    </div>
		                    <div class="col_3 featureColumn">
							<a href="/digitalcollections/"  onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Feature'});" class="featureLink">
		                        <img class="megaFeature img-polaroid" src="<?php print base_path(); ?>sites/all/themes/madlib/images/promos/find.jpg" /><br/><div class="featureCaption">Digitized Collections</div>
							</a>
		                    </div>
                    		<div class="col_12 auxLinks">
								<div class="col_2 moreLink"><a href="/find" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'More'});">More &raquo;</a></div>
								<div class="col_10 auxHelp">Not sure where to start? See our <a href="/research/guides" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Aux Research Guides'});">Research Guides</a> to explore by subject.</div>
							</div>
		                </div><!-- End Item Container -->
		            </li><!-- End Item -->
		            <li class="mega_toplevel"><a href="/using"  onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Using the Library Portal'});" class="megamenu_drop">Using the Library</a><!-- Begin Item -->
		                <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    <div class="col_3">
		                        <ul>
									<li><a href="/using/borrowing" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Borrowing'});">Borrowing</a></li>
									<li><a href="/using/document-delivery" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'ILL'});">Document Delivery / ILL</a></li>
									<li><a href="/using/off-campus" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Off Campus'});">Connect from Off Campus</a></li>
									<li><a href="/using/policies" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Policies'});">Library Policies</a></li>
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/using/room-reservations" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Reserve a Room'});">Reserve a Room</a></li>
									<li><a href="/using/places-to-study" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Places to Study'});">Places to Study</a></li>
									<li><a href="/apps/locationguide" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Find Book Locations'});">Find Book Locations</a></li>
									<li><a href="http://twp.duke.edu/writing-studio" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Writing Studio'});">Writing Studio</a></li>


								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/using/computers" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Computers'});">Computers, Printers, Scanners</a></li>
									<li><a href="/using/labs-software" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Labs Software'});">Labs &amp; Software</a></li>
									<li><a href="/using/technology-lending" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Tech Lending'});">Technology Lending</a></li>
									<li><a href="http://link.duke.edu/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'The Link'});">The Link</a></li>
								</ul>
		                    </div>
		                    <div class="col_3 featureColumn">
							<a href="/services/alumni" class="featureLink" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Feature'});">
		                        <img class="megaFeature img-polaroid" src="<?php print base_path(); ?>sites/all/themes/madlib/images/promos/using-library-alumni.jpg" /><br/><div class="featureCaption">Library Services for Duke Alumni</div>
							</a>
		                    </div>
                    		<div class="col_12 auxLinks">
								<div class="col_2 moreLink"><a href="/using" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'More'});">More &raquo;</a></div>
									<div class="col_10 auxHelp">Visiting the library? See our <a href="/about/hours" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Aux Hours'});">hours</a> and <a href="/services/visitors" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Aux Visitors'});">services for visitors</a>.</div>
							</div>
		                </div><!-- End Item Container -->
		            </li><!-- End Item -->
		            <li class="mega_toplevel"><a href="/research" class="megamenu_drop"  onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Research Support Portal'});">Research Support</a><!-- Begin Item -->
		                <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    <div class="col_3">
		                        <ul>
									<li><a href="/research/specialists" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Subject Specialists'});">Subject Specialists</a></li>
									<li><a href="/research/guides" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Research Guides'});">Research Guides</a></li>
									<li><a href="/research/international" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'International Research'});">International Research</a></li>
									<li><a href="/research/science" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Science Research'});">Science Research</a></li>									
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/research/citing" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Citing Sources'});">Citing Sources</a></li>
									<li><a href="/research/citing/tools" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Citation Tools'});">Citation Tools</a></li>
									<li><a href="/research/copyright-advice" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Copyright Advice'});">Copyright Advice</a></li>
									<li><a href="/research/publish-archive" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Publish Archive'});">Publish &amp; Archive Your Work</a></li>
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/data/data-consulting" oonClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Data Consulting'});">Data Consulting</a></li>
									<li><a href="/data/data-visualization" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Data Viz'});">Data Visualization</a></li>
									<li><a href="/research/digital-research-projects" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Digital Research'});">Digital Research Projects</a></li>
									<li><a href="/edge" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'TheEdge'});">The Edge</a></li>
								</ul>
		                    </div>
		                    <div class="col_3 featureColumn">
							<a href="/research/plagiarism" class="featureLink" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Feature'});">
		                        <img class="megaFeature img-polaroid" src="<?php print base_path(); ?>sites/all/themes/madlib/images/promos/research-student.jpg" /><br/><div class="featureCaption">Avoiding Plagiarism</div>
							</a>
		                    </div>
                    		<div class="col_12 auxLinks">
								<div class="col_2 moreLink"><a href="/research" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'More'});">More &raquo;</a></div>
								<div class="col_10 auxHelp">Teaching or taking a Duke class? Explore our <a href="/course-support" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Aux Course Resources'});">resources &amp; services for courses</a>.</div>
							</div>
		                </div><!-- End Item Container -->
		            </li><!-- End Item -->
		            <li class="mega_toplevel"><a href="/course-support" class="megamenu_drop" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Course Support Portal'});">Course Support</a><!-- Begin Item -->
		                <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    <div class="col_4">
		                        <ul>
									<li><a href="/course-support/course-reserves" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Reserves'});">Course Reserves</a></li>
									<li><a href="/course-support/guides" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Course Guides'});">Course Guides</a></li>
									<li><a href="/course-support/training-workshops" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Training Workshops'});">Training &amp; Workshops</a></li>
								</ul>
		                    </div>
		                    <div class="col_4">
		                        <ul>
									<li><a href="http://cit.duke.edu" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'CIT'});">Center for Instructional Technology (CIT)</a></li>
									<li><a href="https://sakai.duke.edu/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Sakai'});">Login to Sakai</a></li>
								</ul>
		                    </div>
		                    <div class="col_4 featureColumn">
							<a href="/rubenstein/research/teaching" class="featureLink" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Feature'});">
		                        <img class="megaFeature img-polaroid" src="<?php print base_path(); ?>sites/all/themes/madlib/images/promos/course-support.jpg" /><br/><div class="featureCaption">Teaching with Special Collections</div>
							</a>
		                    </div>
                    		<div class="col_12 auxLinks">
								<div class="col_2 moreLink"><a href="/course-support" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'More'});">More &raquo;</a></div>
								<div class="col_10 auxHelp">Need help? Meet a <a href="/research/specialists" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Aux Subject Specialist'});">subject specialist</a>, see our <a href="/research/guides/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Aux Research Guides'});">research guides</a>, or learn how to <a href="/research/citing" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Aux Cite Sources'});">cite sources</a>.</div>
							</div>
		                </div><!-- End Item Container -->
		            </li><!-- End Item -->
		            <li class="mega_toplevel"><a href="/libraries" class="megamenu_drop" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Libraries Portal'});">Libraries</a><!-- Begin Item -->
		                <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    <div class="col_3">
		                        <ul>
									<li><a href="/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Perkins'});">Perkins &amp; Bostock Libraries</a></li>
									<li><a href="/lilly" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Lilly'});">Lilly Library</a></li>
									<li><a href="/music" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Music'});">Music Library</a></li>
									<li><a href="/marine" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Marine'});">Marine Lab Library</a></li>
									<li><a href="/lsc" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'LSC'});">Library Service Center</a></li>
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/rubenstein" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Rubenstein'});">Rubenstein Rare Book &amp; Manuscript Library</a></li>
									<li><a href="/rubenstein/uarchives" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'UArchives'});">Duke University Archives</a></li>
									<li><a href="http://dku.edu.cn/en/academics/library" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'DKU'});">Duke Kunshan University Library</a></li>

								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="http://library.divinity.duke.edu/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Divinity'});">Divinity School Library</a></li>
									<li><a href="http://library.fuqua.duke.edu/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Ford'});">Ford Library, Fuqua School of Business</a></li>
									<li><a href="http://law.duke.edu/lib/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Goodson Law'});">Goodson Law Library</a></li>
									<li><a href="https://mclibrary.duke.edu/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Med Center'});">Medical Center Library</a></li>
								</ul>
		                    </div>
		                    <div class="col_3 featureColumn">
							<a href="http://blogs.library.duke.edu/renovation/" class="featureLink" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Feature'});">
		                        <img class="megaFeature img-polaroid" src="<?php print base_path(); ?>sites/all/themes/madlib/images/promos/libraries.jpg" /><br/><div class="featureCaption">Rubenstein Library Renovation</div>
							</a>
		                    </div>
                    		<div class="col_12 auxLinks">
								<div class="col_2 moreLink"><a href="/libraries" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'More'});">More &raquo;</a></div>
								<div class="col_10 auxHelp"></div>
							</div>
		                </div><!-- End Item Container -->
		            </li><!-- End Item -->
		            <li class="mega_toplevel"><a href="/about" class="megamenu_drop" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'About Portal'});">About</a><!-- Begin Item -->
		                <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    <div class="col_3">
		                        <ul>
									<li><a href="/about/hours" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Hours'});">Hours</a></li>
									<li><a href="/about/directory/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Staff'});">Staff &amp; Departments</a></li>
									<li><a href="/about/jobs" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Jobs'});">Jobs</a></li>
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="/about/directions" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Directions'});">Directions, Maps, Parking</a></li>
									<li><a href="/about/contact" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Contact'});">Contact Us</a></li>
								</ul>
		                    </div>
		                    <div class="col_3">
		                        <ul>
									<li><a href="http://blogs.library.duke.edu/" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'News'});">News, Events, Exhibits</a></li>
									<li><a href="/about/reports-quickfacts" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Surveys Reports'});">Reports &amp; Quick Facts</a></li>
									<li><a href="/support" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Support the Libraries'});">Support the Libraries</a></li>
								</ul>
		                    </div>
		                    <div class="col_3 featureColumn">
							<a href="http://blogs.library.duke.edu/magazine/" class="featureLink" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'Feature'});">
		                        <img class="megaFeature img-polaroid" src="<?php print base_path(); ?>sites/all/themes/madlib/images/promos/about.jpg" /><br/><div class="featureCaption">Duke Libraries Magazine</div>
							</a>
		                    </div>
                    		<div class="col_12 auxLinks">
								<div class="col_2 moreLink"><a href="/about" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'More'});"">More &raquo;</a></div>
								<div class="col_10 auxHelp"></div>
							</div>
		                </div><!-- End Item Container -->
		            </li><!-- End Item -->
		        </ul><!-- End Mega Menu -->
		    </div><!-- End Menu Container -->
		</nav>
</div>
