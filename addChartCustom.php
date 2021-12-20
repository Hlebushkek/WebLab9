<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    
    $number = isset($_POST['Number']) ? $_POST['Number'] : '';
    if ($number > 200) $number = 200;
    if ($number < 0) $number = 0;

    $dom = new DOMDocument();
    $dom->load('chart_infos.xml');

    $newChart = $dom->createElement('chart');
    $newNum = $dom->createElement('num', $number);

    $newChart->appendChild($newNum);
    $dom->documentElement->appendChild($newChart);
    $dom->save('chart_infos.xml');
?>