<?php
require_once('twitteroauth/twitteroauth.php');

class tweet {
	private $connection;
	
	public function __construct($consumer_key, $consumer_secret, $oauth_token = NULL, $oauth_token_secret = NULL) {
		$this->connection = new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);
	}
	
	public function getTweets() {
		$tweets = $this->connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $this->user . '&count=' . $this->tweetsNumber);
		echo json_encode($tweets);
	}
	
}


header('Content-Type: application/json');
$tweets = new tweet();
$tweet->getTweets();
?>