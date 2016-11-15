<?php

	setlocale (LC_TIME, 'en_US.utf8','en');

	$start_date 	= strtotime(get_the_modified_date('d-m-Y'));
	$end_date 		= time();
	function dateDiffTs($start_ts, $end_ts) {
		$diff = $end_ts - $start_ts;
		return round(abs(($diff / 86400) - 1));
	}
	function dateUpdate() {
		echo get_the_modified_date();
	}
	
	$changeSince = dateDiffTs($start_date, $end_date);
