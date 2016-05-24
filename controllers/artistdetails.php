<?
/**
 * Controller responsible for returning the top tracks for a specified artist
 *
 *
 * @author Daniel Gundi
 */

require_once('models/lastfm.php');

$artistTracks = new LastfmApi(API_URL,API_KEY,'artist.gettoptracks',ARTISTS_PER_PAGE);

$artistTracksArray = $artistTracks->getArtistTracks($artist);

require_once('views/details.php');

?>
