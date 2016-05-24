<?
/**
* 
* @author Daniel Gundi
*/

require_once('config.php');

/* Check if any URL parameters have been passed */
  if (!isset($_GET['inputCountry'])) {
  	require_once('views/search.php');
  } else {
 	$country = $_GET['inputCountry'];
 	$page = $_GET['inputPage'];
 	require_once('controllers/popular.php');
  }

 ?>