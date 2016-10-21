<?php

/**
 * @file
 * madlib's theme implementation to display a Library Calendar.
 *
 * Available variables:
 * - $weeks: An array of weeks that represent a calendar view
 *   Each week is an array of 7 days, represented by a stdClass instance, 
 *   containing the following attributes:
 *   	- isCurrentDay: boolean (TRUE or FALSE)
 *   	- libraryDate: associative array with the following keys:
 *   	  	+ 'dayAndDate'	: 'Sun 7/28'
 *   	  	+ 'shortDay'		: 'Sun'
 *				+ 'longDay			: 'Sunday'
 * 				+ 'dateStr'			: '7/28'
 * 				+ 'wday'				: numerical day of the week (0 = Sunday, 6 = Saturday)
 * 				+ 'yday'				: numerical day of the year (0-365, or 0-366 for leap years)
 * 	 	- timestamp: Unix timestamp that can be used with 'date()', 'strftime()', etc
 *   	- hours: The acutal "open" hours for the given library on a particular day
 *   	- hours_encoded: Same as 'hours' with any dash characters (-) converted to '&ndash;'
 *   	- allDay: boolean
 * - $library: stdClass instance with the following attributes:
 * 		- lid: numerical database-generated id for this Library record
 * 		- library_id: string id for this Library (e.g., 'perkins', 'rubenstein')
 * 		- library_name: name of the Library (e.g', 'Perkins/Bostock Libraries)
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
	$header = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
	$rows = array();
	$weeks = $variables['weeks'];

	foreach ($weeks as $week) {
		$row = array('data' => array());
		foreach ($week as $event) {
			$row['data'][] = $event->libraryDate['dateStr'] . '<br />' . $event->hours;
		}
		$rows[] = $row;
	}
	$out = render(theme('table', array('header' => $header, 'rows' => $rows)));
?>
<?php print $out; ?>

