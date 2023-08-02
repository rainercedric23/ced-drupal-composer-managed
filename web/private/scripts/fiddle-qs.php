<?php
// Don't ever sanitize the database on the live environment. Doing so would
// destroy the canonical version of the data.
if (defined('PANTHEON_ENVIRONMENT') && (PANTHEON_ENVIRONMENT !== 'live')) {
  echo 'Show ENV variables\n';
  foreach($page as $key => $value) {
    echo "$key=$value|";
  }
  
	echo '\nEnd of ENV variables\n';

}