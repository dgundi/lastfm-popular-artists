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
	private $_method;
	private $_limit;
	private $_artist;
	public $_page;



	public function __construct($apiurl,$apikey,$method,$limit) {
		$this->_apiurl = $apiurl;
		$this->_apikey = $apikey;
		$this->_method = $method;
		$this->_limit = $limit;
	}

	public function output($data) {
		$params = http_build_query($data);
		$apiurl = $this->_apiurl . '&' . $params;
		$apiurl = json_decode(file_get_contents($apiurl),true);

		return $apiurl;
	}

	public function getArtistbyCountry($country,$page = 1) {
		$this->_country = $country;
		$this->_page = $page;
		$data['api_key'] = $this->_apikey;
		$data['method'] = $this->_method;
		$data['limit'] = $this->_limit;
		$data['country'] = $country;
		$data['page'] = $page;

		return $this->output($data);
	}

	public function getArtistTracks($artist) {
		$this->_artist = $artist;
		$data['api_key'] = $this->_apikey;
		$data['method'] = $this->_method;
		$data['artist'] = $this->_artist;

		return $this->output($data);
	}
}



?>