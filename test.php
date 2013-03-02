<?php
include __DIR__.'/DOMDocumentUtil.php';

$html = '<img alt="" width="44" src="http://www.example.com/images/image1.jpg" style="float: right; width: 100px; height: 75px;" />
Some text.';

echo DOMDocumentUtil::imgStyleConvert($html);
