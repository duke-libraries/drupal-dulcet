<?php
/**
 * SCA: not sure if this is the best way to do this.
 */
?>


<!-- masthead filler that is replaced via javascript -->

<div id="dul-masthead-filler" style="width: 100%">

	<div <?php print $attributes; ?> >

		<div id="region-scoped-search-temp">
			<form class="dul-masthead-mastSearch" action="//library.duke.edu/find/all" onsubmit="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Top Links', eventLabel: 'Search Submit'});"><!-- Generic reusable hidden attributes --><input type="hidden" name="" value="" id="dul-masthead-hiddenfilter1" class="dul-masthead-hiddenMastFilter"><input type="hidden" name="" value="" id="dul-masthead-hiddenfilter2" class="dul-masthead-hiddenMastFilter"><input type="hidden" name="" value="" id="dul-masthead-hiddenfilter3" class="dul-masthead-hiddenMastFilter"><div><input class="dul-masthead-mastSearchBox" placeholder="Search articles, books, our website &amp; more" name="Ntt" type="text"><div class="dul-masthead-btn-group"><button class="dul-masthead-btn" type="submit" onclick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Top Links', eventLabel: 'Search Button'});"></button></div></div></form>
		</div>

		<div class="region-myaccount" id="region-myaccount">

			<a id="myAccounts" href="//library.duke.edu/my-accounts" onclick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Top Links', eventLabel: 'My Accounts'});">My Accounts</a>
			<a id="ask-librarian-link" href="//library.duke.edu/research/ask" onclick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Top Links', eventLabel: 'Ask a Librarian'});">Ask a Librarian</a>
			<a id="account-hours" href="//library.duke.edu/about/hours" onclick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Top Links', eventLabel: 'Library Hours'});">Library Hours</a>
			<a id="website-search-link" href="//library.duke.edu/find/all" onclick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Top Links', eventLabel: 'Website Search'});">Search our site</a>

		</div>

		<div class="dul-logo">
			<a href="//library.duke.edu/"><img src="//library.duke.edu/masthead/img/logo.png" alt="Duke University Libraries"></a>
		</div>

		<div id="dul-masthead-region-megamenu-temp">

			<nav role="navigation">

				<ul class="dul-masthead-megamenu-temp">

					<li class="dul-masthead-mega_toplevel-temp"><a href="//library.duke.edu/find" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Find Menu', eventLabel: 'Search Find Portal'});">Search &amp; Find</a></li>

		            <li class="dul-masthead-mega_toplevel-temp"><a href="//library.duke.edu/using"  onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Using Menu', eventLabel: 'Using the Library Portal'});">Using the Library</a></li>

		            <li class="dul-masthead-mega_toplevel-temp"><a href="//library.duke.edu/research" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Research Menu', eventLabel: 'Research Support Portal'});">Research Support</a></li>

		            <li class="dul-masthead-mega_toplevel-temp"><a href="//library.duke.edu/course-support" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Course Menu', eventLabel: 'Course Support Portal'});">Course Support</a></li>

		            <li class="dul-masthead-mega_toplevel-temp"><a href="//library.duke.edu/libraries" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'Libraries Menu', eventLabel: 'Libraries Portal'});">Libraries</a></li>

		            <li class="dul-masthead-mega_toplevel-temp"><a href="//library.duke.edu/about" onClick="ga('send', 'event', { eventCategory: 'Masthead', eventAction: 'About Menu', eventLabel: 'About Portal'});">About</a></li>

		        </ul>

			</nav>

		</div>

	</div>

	<!-- temp mobile menu button -->
	<div id="dul-masthead-region-megamenu-temp-mobile">

		<label for="dul-masthead-nav-trigger" id="dul-masthead-nav-trigger-label">☰ Menu</label>
		<input type="checkbox" id="dul-masthead-nav-trigger"/>

		<ul id="dul-masthead-mobile-menu">
			<li><a href="//library.duke.edu/find">Search &amp; Find</a></li>
			<li><a href="//library.duke.edu/using">Using the Library</a></li>
			<li><a href="//library.duke.edu/research">Research Support</a></li>
			<li><a href="//library.duke.edu/course-support">Course Support</a></li>
			<li><a href="//library.duke.edu/libraries">Libraries</a></li>
			<li><a href="//library.duke.edu/about">About</a></li>
		</ul>

	</div>

</div>
