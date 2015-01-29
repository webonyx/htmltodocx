# htmltodocx

see https://htmltodocx.codeplex.com/

Project Description This converts HTML into Word documents (docx format). The code is written in PHP and works with PHPWord.

This converter is particularly designed to take simple HTML - the kind of HTML typically produced by WYSIWYG editors (such as TinyMCE) or that might be included in a blog - and converts this into a docx Word document. The intention is that the resulting Word document is in a form that is familiar to most people who use Word documents and therefore easy to use. It is not intended as a way to recreate complex web page layout in a Word document.

This converter requires SimpleHTMLDom and PHPWord* to function - copies of both of which are included in the release here (although you might want to download the latest versions of these).

This converter has been developed through the Commtap project which supports people working with children with communication disabilities. Feel free to donate if you like this converter!

The copy of PHPWord here has been modified:
so that it can work with international character sets, Discussion; to address a problem with table sizing when using LibreOffice: PHPWord discussion; PHPWord work item. Licenses

The converter (h2d_htmlconverter.php) is licensed here with a GPL license, PHPWord has an LGPL license, and SimpleHTMLDom has an MIT license. The converter is also available with a BSD license as donation ware.
