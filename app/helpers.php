<?php

if (!function_exists('page_title')) {
	function page_title(?string $title = null): string {
		return $title ? $title . ' | ' . config('app.name') : config('app.name') ;
	}
}


// oder code for return $title


/*


if ($title == null) {
			return config('app.name');
		} else {
			return $title . ' | ' . config('app.name');
		}
 

*/