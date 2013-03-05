<?php
include __DIR__.'/DOMDocumentUtil.php';

$html = '
<div>123<p><a href="images/image1.jpg" target="_blank">Some text</a></div><div>xxx</div>
<a href="images/image2.jpg" target="_blank">Some 2 text</a>
<br >--------------<br >
<a href="images/image3.jpg" target="_blank">Some 3 text</a>
<br >--------------<br >
<a href="images/image4.jpg" target="_blank">Some 4 text</a>
';

echo DOMDocumentUtil::aTagConvert($html, null, 'http://www.xyz.com/', true);
