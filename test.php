<?php
include __DIR__.'/DOMDocumentUtil.php';

/*$html = '<img alt="" src="http://www.cmstory.com/images/cm-logo.jpg"
 style="float: left; width: 150px;" />Some text.';*/
$html = '<img alt="" src="http://www.cmstory.com/images/cm-logo.jpg"
 style="float: left; width: 500px;" />Some text.';

$arrSize = array('width' => 300, 'height' => 300, 'retainratio' => true, 'noenlargeorig' => true, 'noenlargesized' => true);
$arrStyle = array('float' => 'right');
echo DOMDocumentUtil::imgTagConvert($html, null, false, null, $arrSize, $arrStyle);
