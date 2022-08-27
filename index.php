
<?php
require('vendor/autoload.php');
use Proxy\Proxy;
use Proxy\Http\Request;
use YouTube\YouTubeDownloader;

$proxy = new Proxy();

//$url = 'https://www.youtube.com/watch?v=4aeETEoNfOg';
$url = $_GET['v'];

// fetch youtube video URL
$yt = new YouTubeDownloader();
$links = $yt->getDownloadLinks($url);

if(isset($_GET['json'])){
	header('Content-Type: application/json; charset=utf-8');
	echo(json_encode($links->getAllFormats()));
}
else{
	$quality=2;
	if(isset($_GET['q']))
		$quality = $_GET['q'];
	$youtube_stream = new \YouTube\YouTubeStreamer();
	$youtube_stream->stream($links->getAllFormats()[$quality]->url);
}
