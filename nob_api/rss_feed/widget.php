<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/8/16
 * Time: 1:20 AM
 */

echo "<div class=\"widget\">";
echo "<h6 class=\"title\"> Recent Posts </h6>
    <hr>
    <ul class=\"link-list recent-posts\">";

$url = "https://medium.com/feed/@WesternCyberSecurity"; // RSS FEED URL
$options = array(
    'http' => array(
        'header' => "Content-type: text/plain\r\n",
        'method' => 'GET'
    )
);
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$xml=simplexml_load_string($response) or die("Error: Cannot create object");

foreach ($xml->channel->item as $item) {
    $date = $item->pubDate;
    $date = strtotime($date);
    $month = date('F', $date);
    $day = date('j', $date);
    $year = date('Y', $date);

    $title = str_replace(array(":"), "", $item->title);

    echo "<li>\n";
    echo "<a href=\"" . $item->link . "\" target=\"_blank\"> " . $title . " </a>\n";
    echo "<span class=\"date\"> " . $month . "<span class=\"number\"> " . $day . ", " . $year . " </span></span>\n";
    echo "</li>\n";
}

echo "</ul>";
echo "</div>";