<?php
/**
 * @file
 * Default theme implementation to display a single Library Staff Member
 * (a potential replacement for the Django implementation)
 *
 * Available Variable(s):
 * $person - stdClass object with the following member attributes
 * - id
 * - netid
 * - first_name
 * - last_name
 * - display_name
 * - fullnamereversed
 * - title (Staff member's job title)
 * - preferred_title (Staff member's preferred job title)
 * - city
 * - state
 * - zipcode
 * - phone
 * - phone2
 * - fax
 * - email
 * - email_privacy
 * - photo_url
 * - url
 * - profile (when available, this represents a staff member's custom profile text)
 * - subject_guides (array)
 * - postal_address - this is an associate array with the following keys:
 * - 		'box' : PO Box number
 * -		'office' : Office location (e.g. 229 Perkins)
 * -		'city' : City (most likely, Durham)
 * - 		'state' : Two-letter FIPS State code
 * -		'zipcode' : 5-digit zipcode
 * -		'zip_plus_4' : Zip code with "plus 4" added.  This field has display priority over 'zipcode'
 * -		CODE EXAMPLE: $person->postal_address['zipcode']
 *
 * Usage Example: $person->first_name
 */
?>
<?php if(sizeof($person->subject_guides)): ?>
<aside class="feature-box">
	<div class="feature-box-title">Subject Guides</div>
	<div class="feature-box-content">
	<?php foreach($person->subject_guides as $sg): ?>
		<a href="<?php print $sg->url; ?>"><?php print $sg->title; ?></a><br />
	<?php endforeach; ?>
	</div>
</aside>
<?php endif; ?>
<div class="staff-member">
	<?php
		// JOB TITLE first
	?>
	<?php if(!empty($person->preferred_title)): ?>
		<h3 property="schema:jobTitle"><?php print $person->preferred_title; ?></h3>
	<?php else: ?>
		<h3 property="schema:jobTitle"><?php print $person->title; ?></h3>
	<?php endif; ?>

	<div class="staff-info">
	<?php if(!empty($person->photo_url)): ?>
	<div style="float: left; margin-right: 1em;">
		<img src="<?php print $person->photo_url; ?>" alt="" />
	</div> <!-- row -->
	<?php endif; ?>

	<div>
		<?php
			// In most cases, the dul_staff module is able to parse the "campus box" and "physical location"
			// data from the database.
			// When that is TRUE, $person->postal_address will be set
			// When that is FALSE, $person->postal_address will NOT be sett.
		?>
		<?php if (isset($person->postal_address)): ?>
		<div class="personInfo personAddress personBox" itemprop="address" itemtype="https://schema.org/PostalAddress" property="schema:address" typeof="schema:PostalAddress">
			<div property="schema:streetAddress"><?php print $person->postal_address['office']; ?></div>
			<?php
				// only print the box office when detected
			?>
			<?php if (isset($person->postal_address['box'])): ?>
				<div property="schema:postOfficeBoxNumber"><?php print $person->postal_address['box']; ?></div>
			<?php endif; ?>
			<span property="schema:addressLocality"><?php print $person->postal_address['city']; ?></span>,
			<span property="schema:addressRegion"><?php print $person->postal_address['state']; ?></span>&nbsp;
			<span property="schema:postalCode">
			<?php if(isset($person->postal_address['zip_plus_4'])): ?><?php print $person->postal_address['zip_plus_4']; ?>
			<?php else: ?><?php print $person->postal_address['zipcode']; ?>
			<?php endif; ?></span>
		</div>
		<?php endif; // POSTAL ADDRESS ?>

		<?php
			// Tech Note: The personInfo, personPhone, personFax, etc classes are holdovers from the Cascade templates.
			// remove if desired
		?>
		<div property="schema:telephone" class="personInfo personPhone"><strong>Phone:&nbsp;</strong><?php print $person->phone; ?></div>
		<?php if (!empty($person->fax)): ?><div property="faxNumber" class="personInfo personFax"><strong>Fax:&nbsp;</strong><?php print $person->fax; ?></div><?php endif; ?>
		<?php if(empty($person->email_privacy)): ?>
		<div class="personInfo personEmail"><a property="schema:email" href="mailto:<?php print $person->email; ?>"><?php print $person->email; ?></a></div>
		<?php endif; ?>
		<?php if ($allow_user_edit): ?>
			<div><a href="/user/<?php print $uid; ?>/edit">Edit Your Profile</a></div>
		<?php endif; ?>
	</div>
	</div> <!-- /staff-info -->

	<div class="clearfix"></div>

	<?php
		// DEPARTMENTS listing
	?>
	<?php if(sizeof($person->depts)): ?>
	<div class="person-departments">
	<h4>Departments</h4>
	<p>
		<?php foreach($person->depts as $dept): ?>
		<a property="schema:affiliation" href="/about/directory/dept/<?php print $dept->id; ?>"><?php print $dept->name; ?></a><br />
		<?php endforeach; ?>
	</p>
	</div>
	<?php endif; ?>

	<?php
		// PROFILE information when available.
	?>
	<div>
	<?php if(!is_null($person->profile)): ?>
		<div property="schema:description" class="staff-profile"><?php print $person->profile; ?></div>
	<?php else: ?>
	<?php endif; ?>
	</div>
</div>
