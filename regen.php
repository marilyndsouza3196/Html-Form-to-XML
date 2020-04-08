<?php
$xmldoc = new DOMDocument();
$xmldoc->load('loyolla32.xml');
$xpathvar = new Domxpath($xmldoc);
$queryResult = $xpathvar->query('//COL');
foreach($queryResult as $result){
    echo $result->textContent;
}
?>
