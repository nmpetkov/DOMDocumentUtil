DOMDocumentUtil
===============

DOMDocument Utilities

Handle HTML fragments.

1. DOMDocumentUtil class

    DOMDocumentUtil::imgTagConvert
        Treat ```<img>``` tags in HTML fragment. 
        Suitable to prepare HTML for HTML email, as Outlook 2000-2013 can't recognize style in <img> tag.

    DOMDocumentUtil::aTagConvert
        Treat ```<a>``` tags in HTML fragment.
        Suitable to prepare HTML for HTML emails.

2. DOMDocumentExact
    This class extends DOMDocument class, available in PHP 5. 
    Main problem with DOMDocument is the fact, that it handles whole HTML pages, including <html> and <body> tags. 
    This class, DOMDocumentExact, overcomes this limitation, and can handle any HTML fragments.