<?php

/*PHP Script Timer, version 1.0
a code execution timing script by Paul Postuma and Ars Informatica
www.ars-informatica.ca

Measure PHP execution time using this small and simple script. PHP typically
executes very quickly, though some code takes significant time to execute, i.e.
retrieving and parsing remote files, image manipulations, complex and/or
multiple SQL queries, etc. If code is choking your server's CPU, or your site
visitors are clicking away because your page is taking too long to respond,
then timing your PHP script can highlight the bottlenecks.

For example, retrieving and parsing a remote RSS news feed, using either a
local cache file if current enough, or using the remote feed each time, can
make significant differences in page loading times. This example uses my
walRuSS.php RSS feed reader:

	ave. speed over 10 code loops
										
	xml_parser-based RSS feed reader, non-cached:		1.554 secs
	xml_parser based feed reader, cached:			0.0444 secs

Run multiple timing loops by changing the $timing_loops parameter to the
number desired. Customize output simply by changing the report_timing style
definition on line 71, or change the HTML output further below.

See my site at www.ars-informatica.ca for more details, and other PHP code

_______________________________________________________________________________
 
LICENSE 

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License (GPL) as published by the Free
Software Foundation; either version 2 of the License, or (at your option) any
later version. 

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details. 

To read the license please visit http://www.gnu.org/copyleft/gpl.html 

_______________________________________________________________________________

USAGE

First, the calling code must reference the PHP_script_timer script:

include 'PHP_script_timer.php';

Call the timing script at the start of the code to be timed with:

$timing_loops = 1;
for ($current_loop = 0; $current_loop < $timing_loops; $current_loop++) {
$time_start = microtime_float();

To end the timing sequence, follow the code to be timed with:

$timing[] = microtime_float() - $time_start;
}
timing($timing);

To run more the timing loop more then once, and calculate fastest, slowest and
average execution times, simply specify 2 or more $timing_loops.
	
_____________________________________________________________________________*/


echo '<style type="text/css">.report_timing {font:8pt Verdana}</style>';


function microtime_float() {
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}


function timing($timing) {
	if (count($timing) == 1) {
		echo '<p class="report_timing">Script execution '.$timing[0].' seconds
		<p></div>';
	}
	else {
		sort($timing);
		$ave = array_sum($timing)/count($timing);
		echo '<p class="report_timing">Script execution over '.count($timing).' loops averages '.$ave.' seconds<br>
		Fastest: '.$timing[0].' seconds<br>
		Slowest: '.$timing[count($timing)-1].' seconds
		<p></div>';
	}

}

?>