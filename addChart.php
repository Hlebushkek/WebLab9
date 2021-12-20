<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    
    $dom = new DOMDocument();
    $dom->load('chart_infos.xml');

    $newChart = $dom->createElement('chart');
    $newNum = $dom->createElement('num', random_int(0, 200));

    $newChart->appendChild($newNum);
    $dom->documentElement->appendChild($newChart);
    $dom->save('chart_infos.xml');
?>