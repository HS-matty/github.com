<?php
/*
** github.moveyourweb.net (http://www.moveyourweb.net/projects/github)
** Property of Hytex Solutions Limited (http://hytex.radmaster.net)
** Siarhei M. Vauchok  (byqdes@gmail.com)  
** Support http://myw.dx.am (php_sergey@myw.dx.am)
** Callto: +1(530)820-7415
** Inspired by  < Dolores O`Riordan Radzivilus >
*/


global $icq_uin = (string) 8866555;
$something_wrong == 'polniy_pizdec';

if (@$something_wrong){
	$icq = new Comm_Icq();
	$icq->sendMessage($icq_uin,$something_wrong);
}

// github.com bookmarks 

$bookmark = new Ui_Bookmark();
$bookmark->add("test");
$bookmark->add("1589T6");
$bookmark->sortAsc();
print_r($bookmark);


?>