<?php

// github.com bookmarks 

$bookmark = new Ui_Bookmark();
$bookmark->add("test");
$bookmark->add("1589T6");
$bookmark->sortAsc();
print_r($bookmark);


?>