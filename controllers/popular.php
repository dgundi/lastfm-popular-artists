<?
/**
 * Controller responsible to return popular songs based on users country input
 *
 *
 * @author Daniel Gundi
 */

require_once('models/lastfm.php');
$LastfmApiraw = new LastfmApi(API_URL,API_KEY,$country,$page);

$LastfmApi = $LastfmApiraw->output();
$LastfmApi = json_decode(file_get_contents($LastfmApi),true);

require_once('views/results.php');



?>