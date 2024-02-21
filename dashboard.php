<?php
// dashboard.php
require_once("auth.php");

// Your existing dashboard code here

// Fetch and display the content data from the file (customize this part based on your storage mechanism)
$contentData = file_get_contents('content_data.txt');
if (!empty($contentData)) {
    echo "<div class='new-content'>New Content Added:<pre>$contentData</pre></div>";
}
?>
