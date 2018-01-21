<?php
    $xml = simplexml_load_file('xml/'.$filename.'.xml');
    $title = $xml->title;
    $pgtitle = $xml->pgtitle;
    $content = $xml->content;
?>