<!DOCTYPE html>
<html>
<?php require_once("config.php"); ?>

<head>
	<title>Access Google Maps API in PHP</title>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}

		#map {
			width: 100%;
			height: 370PX;
			border: 1px solid blue;
		}

		#data,
		#allData {
			display: none;
		}

		#data2,
		#allData2 {
			display: none;
		}

		.container2 {
			height: 450px;
		}

		#map2 {
			width: 100%;
			height: 370px;
			border: 1px solid blue;
		}

		.weathercontainer {
			width: 300px;
			display: inline-block;
			background-color: #FFF;
			margin: auto;
			border-radius: 10px;
			padding-bottom: 50px;
		}

		.app-title {
			width: 300px;
			height: 50px;
			border-radius: 10px 10px 0 0;
		}

		.app-title p {
			text-align: center;
			padding: 15px;
			margin: 0 auto;
			font-size: 1.2em;
			color: #293251;
		}

		.weather-container {
			width: 300px;
			height: 280px;
			background-color: #F4F9FF;
		}

		.weather-icon {
			width: 300px;
			height: 128px;
		}

		.weather-icon img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value {
			width: 300px;
			height: 60px;
		}

		.temperature-value p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon2 {
			width: 300px;
			height: 128px;
		}

		.weather-icon2 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value2 {
			width: 300px;
			height: 60px;
		}

		.temperature-value2 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value2 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description2 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location2 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value2 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon3 {
			width: 300px;
			height: 128px;
		}

		.weather-icon3 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value3 {
			width: 300px;
			height: 60px;
		}

		.temperature-value3 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value3 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description3 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location3 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value3 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon4 {
			width: 300px;
			height: 128px;
		}

		.weather-icon4 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value4 {
			width: 300px;
			height: 60px;
		}

		.temperature-value4 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value4 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description4 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location4 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value4 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon5 {
			width: 300px;
			height: 128px;
		}

		.weather-icon5 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value5 {
			width: 300px;
			height: 60px;
		}

		.temperature-value5 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value5 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description5 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location5 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value5 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weathercontainer2 {
			width: 300px;
			display: inline-block;
			background-color: #FFF;
			margin: auto;
			border-radius: 10px;
			padding-bottom: 50px;
		}

		.app-title {
			width: 300px;
			height: 50px;
			border-radius: 10px 10px 0 0;
		}

		.app-title p {
			text-align: center;
			padding: 15px;
			margin: 0 auto;
			font-size: 1.2em;
			color: #293251;
		}

		.weather-container {
			width: 300px;
			height: 280px;
			background-color: #F4F9FF;
		}

		.weather-icon6 {
			width: 300px;
			height: 128px;
		}

		.weather-icon6 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value6 {
			width: 300px;
			height: 60px;
		}

		.temperature-value6 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value6 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description6 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location6 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value6 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon7 {
			width: 300px;
			height: 128px;
		}

		.weather-icon7 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value7 {
			width: 300px;
			height: 60px;
		}

		.temperature-value7 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value7 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description7 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location7 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value7 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon8 {
			width: 300px;
			height: 128px;
		}

		.weather-icon8 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value8 {
			width: 300px;
			height: 60px;
		}

		.temperature-value8 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value8 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description8 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location8 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value8 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon8 {
			width: 300px;
			height: 128px;
		}

		.weather-icon9 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value9 {
			width: 300px;
			height: 60px;
		}

		.temperature-value9 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value9 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description9 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location9 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value9 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.weather-icon10 {
			width: 300px;
			height: 128px;
		}

		.weather-icon10 img {
			display: block;
			margin: 0 auto;
		}

		.temperature-value10 {
			width: 300px;
			height: 60px;
		}

		.temperature-value10 p {
			padding: 0;
			margin: 0;
			color: #293251;
			font-size: 4em;
			text-align: center;
			cursor: pointer;
		}

		.temperature-value10 span {
			color: #293251;
			font-size: 0.5em;
		}

		.temperature-description10 p {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}

		.location10 p {
			margin: 0;
			padding: 0;
			color: #293251;
			text-align: center;
			font-size: 0.8em;
		}

		.day-value10 {
			padding: 8px;
			margin: 0;
			color: #293251;
			text-align: center;
			font-size: 1.2em;
		}
	</style>
	</style>
</head>

<body>

	<div class="container">
		<center>
			<h1>
				<font color="red" face="Verdana">London</font>
			</h1>
		</center>
		<?php
		require 'places.php';
		$lon = new places;
		$city = $lon->getPOIBlankLatLng();
		$city = json_encode($city, true);
		echo '<div id="data">' . $city . '</div>';

		$allData = $lon->getAllPOI();
		$allData = json_encode($allData, true);
		echo '<div id="allData">' . $allData . '</div>';
		?>

		<div id="map"></div>

		<div class="weathercontainer">
			<div class="app-title">
			</div>
			<div class="weather-container">
				<div class="weather-icon">
					<img src="weather/icons/unknown.png" alt="">
				</div>
				<div class="temperature-value">
					<p>- °<span>C</span></p>
				</div>
				<div class="temperature-description">
					<p> - </p>
				</div>
				<div class="location">
					<p>-</p>
				</div>
				<div class="day-value">
					<p>-</p>
				</div>
			</div>
		</div>

		<div class="weathercontainer">
			<div class="app-title">
			</div>
			<div class="weather-container">
				<div class="weather-icon2">
					<img src="weather/icons/unknown.png" alt="">
				</div>
				<div class="temperature-value2">
					<p>- °<span>C</span></p>
				</div>
				<div class="temperature-description2">
					<p> - </p>
				</div>
				<div class="location2">
					<p>-</p>
				</div>
				<div class="day-value2">
					<p>-</p>
				</div>
			</div>
		</div>

		<div class="weathercontainer">
			<div class="app-title">
			</div>
			<div class="weather-container">
				<div class="weather-icon3">
					<img src="weather/icons/unknown.png" alt="">
				</div>
				<div class="temperature-value3">
					<p>- °<span>C</span></p>
				</div>
				<div class="temperature-description3">
					<p> - </p>
				</div>
				<div class="location3">
					<p>-</p>
				</div>
				<div class="day-value3">
					<p>-</p>
				</div>
			</div>
		</div>

		<div class="weathercontainer">
			<div class="app-title">
			</div>
			<div class="weather-container">
				<div class="weather-icon4">
					<img src="weather/icons/unknown.png" alt="">
				</div>
				<div class="temperature-value4">
					<p>- °<span>C</span></p>
				</div>
				<div class="temperature-description4">
					<p> - </p>
				</div>
				<div class="location4">
					<p>-</p>
				</div>
				<div class="day-value4">
					<p>-</p>
				</div>
			</div>
		</div>

		<div class="weathercontainer">
			<div class="app-title">
			</div>
			<div class="weather-container">
				<div class="weather-icon5">
					<img src="weather/icons/unknown.png" alt="">
				</div>
				<div class="temperature-value5">
					<p>- °<span>C</span></p>
				</div>
				<div class="temperature-description5">
					<p> - </p>
				</div>
				<div class="location5">
					<p>-</p>
				</div>
				<div class="day-value5">
					<p>-</p>
				</div>
			</div>
		</div>

		<script src="weather/app.js"></script>

		<?php
		require_once('TwitterAPI_LDN/TweetPHP.php');
		require_once('config.php');

		$TweetPHP = new TweetPHP(array(
			'consumer_key'        => constant('twitter_api')['consumer_key'],
			'consumer_secret'     => constant('twitter_api')['consumer_secret'],
			'access_token'        => constant('twitter_api')['access_token'],
			'access_token_secret' => constant('twitter_api')['access_token_secret'],
			'api_endpoint'        => 'search/tweets',
			'api_params'          => array('q' => '#london', 'result_type' => 'latest')
		));

		echo $TweetPHP->get_tweet_list();
		?>

		<div class="container2">
			<center>
				<h1>
					<font color="red" face="Verdana">New York</font>
				</h1>
			</center>
			<?php
			require 'placesny.php';
			$ny = new placesny;
			$city2 = $ny->getPOIBlankLatLng();
			$city2 = json_encode($city2, true);
			echo '<div id="data2">' . $city2 . '</div>';

			$allData2 = $ny->getAllPOI();
			$allData2 = json_encode($allData2, true);
			echo '<div id="allData2">' . $allData2 . '</div>';
			?>

		<div id="map2"></div>

			<div class="weathercontainer2">
				<div class="app-title">
				</div>
				<div class="weather-container">
					<div class="weather-icon6">
						<img src="weatherNY/icons/unknown.png" alt="">
					</div>
					<div class="temperature-value6">
						<p>- °<span>C</span></p>
					</div>
					<div class="temperature-description6">
						<p> - </p>
					</div>
					<div class="location6">
						<p>-</p>
					</div>
					<div class="day-value6">
						<p>-</p>
					</div>
				</div>
			</div>

			<div class="weathercontainer2">
				<div class="app-title">
				</div>
				<div class="weather-container">
					<div class="weather-icon7">
						<img src="weatherNY/icons/unknown.png" alt="">
					</div>
					<div class="temperature-value7">
						<p>- °<span>C</span></p>
					</div>
					<div class="temperature-description7">
						<p> - </p>
					</div>
					<div class="location7">
						<p>-</p>
					</div>
					<div class="day-value7">
						<p>-</p>
					</div>
				</div>
			</div>

			<div class="weathercontainer2">
				<div class="app-title">
				</div>
				<div class="weather-container">
					<div class="weather-icon8">
						<img src="weatherNY/icons/unknown.png" alt="">
					</div>
					<div class="temperature-value8">
						<p>- °<span>C</span></p>
					</div>
					<div class="temperature-description8">
						<p> - </p>
					</div>
					<div class="location8">
						<p>-</p>
					</div>
					<div class="day-value8">
						<p>-</p>
					</div>
				</div>
			</div>

			<div class="weathercontainer2">
				<div class="app-title">
				</div>
				<div class="weather-container">
					<div class="weather-icon9">
						<img src="weatherNY/icons/unknown.png" alt="">
					</div>
					<div class="temperature-value9">
						<p>- °<span>C</span></p>
					</div>
					<div class="temperature-description9">
						<p> - </p>
					</div>
					<div class="location9">
						<p>-</p>
					</div>
					<div class="day-value9">
						<p>-</p>
					</div>
				</div>
			</div>

			<div class="weathercontainer2">
				<div class="app-title">
				</div>
				<div class="weather-container">
					<div class="weather-icon10">
						<img src="weatherNY/icons/unknown.png" alt="">
					</div>
					<div class="temperature-value10">
						<p>- °<span>C</span></p>
					</div>
					<div class="temperature-description10">
						<p> - </p>
					</div>
					<div class="location10">
						<p>-</p>
					</div>
					<div class="day-value10">
						<p>-</p>
					</div>
				</div>
			</div>

			<script src="weatherNY/app.js"></script>

			<?php
			require_once('TwitterAPI_NY/TweetPHP.php');

			$TweetPHPNY = new TweetPHPNY(array(
				'consumer_key'        => constant('twitter_api')['consumer_key'],
				'consumer_secret'     => constant('twitter_api')['consumer_secret'],
				'access_token'        => constant('twitter_api')['access_token'],
				'access_token_secret' => constant('twitter_api')['access_token_secret'],
				'api_endpoint'        => 'search/tweets',
				'api_params'          => array('q' => '#newyork', 'result_type' => 'latest')
			));

			echo $TweetPHPNY->get_tweet_list();
			?>
		</div>
</body>
<script>
	function initialize() {
		loadMap();
		loadMap2();
	}
</script>


<script src=<?php echo "'" . constant('mapURL') . "'"; ?> defer></script>

</html>