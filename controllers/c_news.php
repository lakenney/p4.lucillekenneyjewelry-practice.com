<?php

class news_controller extends base_controller {

/*-------------------------------------------------------------------------------------------------
	Scrape data:
	Find an rss feed. Made a Curl call to an rss feed, split it into an array 
	examine the array find the data you want and then print it.
-------------------------------------------------------------------------------------------------*/

	public function index() {

		//$results = Utils::curl('http://dir.yahoo.com/rss/dir/getrss.php?arts');
		$results = Utils::curl('http://news.yahoo.com/rss/');
		$results = Utils::xml_to_array($results);
		//print_r ($results);

		//echo Debug::dump($results,"Results");
				//foreach($results);


		// Honing in on items in the array
		$items = $results['channel']['item'];
		//echo Debug::dump($items,"Results");

		foreach($items as $story) {

			echo $story['title'."<br>"];
		}

	}

}