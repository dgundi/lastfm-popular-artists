<?
/**
 * Model responsible for API connection to Last.fm api
 *
 * http://www.last.fm/api
 * 
 * @author Daniel Gundi
 */


class LastfmApi {

	private $_apiurl;
	private $_apikey;
	private $_country;
	public $_page;

	public function __construct($apiurl,$apikey,$country,$page) {
		$this->_apiurl = $apiurl;
		$this->_apikey = $apikey;
		$this->_country = $country;
		$this->_page = $page;
	}

	public function output() {
		return $this->_apiurl . '&api_key=' . $this->_apikey . '&country=' . $this->_country . '&page=' . $this->_page . '&limit=' . ARTISTS_PER_PAGE;
	}
}

?>