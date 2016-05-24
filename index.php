<?
/**
* 
* @author Daniel Gundi
*/

require_once('config.php');

/* Check if any URL parameters have been passed */
  if (isset($_GET['inputCountry'])) {
  	$country = $_GET['inputCountry'];
 	$page = $_GET['inputPage'];
 	require_once('controllers/popular.php');
  }  elseif (isset($_GET['artist'])){
  	$artist = $_GET['artist'];
  	require_once('controllers/artistdetails.php');
  } else {
  	require_once('views/search.php');
  }

 ?>