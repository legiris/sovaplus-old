<?php //netteCache[01]000393a:2:{s:4:"time";s:21:"0.26841000 1371405125";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:71:"E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\Odkazy\default.latte";i:2;i:1371405117;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\Odkazy\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'o045dx6oy9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb888529fe2a_content')) { function _lb888529fe2a_content($_l, $_args) { extract($_args)
?><h1>Odkazy</h1>

<h2 class="ref">CSS</h2>
<p class="item">01.&nbsp;<a href="http://css-tricks.com/fluid-width-equal-height-columns/" title="css-tricks.com">Fluid Width Equal Height Columns</a></p>
<p class="item">02.&nbsp;<a href="http://www.vanseodesign.com/css/equal-height-columns/" title="vanseodesign.com">Four methods for creating equal height columns in CSS</a></p>
<p class="item">03.&nbsp;<a href="http://www.csstutorial.net/2010/02/creating-a-basic-2-column-center-aligned-fixed-width-layout-with-css/" title="csstutorial.net">Two-column, center-aligned fixed width layout with CSS</a></p>
<p class="item">04.&nbsp;<a href="http://www.homeandlearn.co.uk/wd/wds4p6.html" title="homeandlearn.co.uk">Wrap text around an image with CSS</a></p>

<hr />

<h2 class="ref">HTML, JavaScript</h2>
<p class="item">01.&nbsp;<a href="http://www.jakpsatweb.cz/html/entity-vsechny.html" title="jakpsatweb.cz">HTML entity</a></p>
<p class="item">02.&nbsp;<a href="http://www.punkchip.com/2011/03/why-support-javascript-disabled/" title="punkchip.com">Why we should support users with no JavaScript</a></p>

<hr />

<h2 class="ref">LaTeX</h2>
<p class="item">01.&nbsp;<a href="http://www.tug.org/texlive/acquire-netinstall.html" title="tug.org">Installing TeX Live over the Internet</a></p>
<p class="item">02.&nbsp;<a href="http://users.sdsc.edu/~ssmallen/latex/longtable.html" title="users.sdsc.edu">Longtable example</a></p>
<p class="item">03.&nbsp;<a href="http://tex.stackexchange.com/questions/823/remove-ugly-borders-around-clickable-cross-references-and-hyperlinks" title="tex.stackexchange.com">Remove ugly borders around clickable cross references and hyperlinks</a></p>
<p class="item">04.&nbsp;<a href="http://www.pdftoword.com/" title="pdftoword.com">PDF to Word</a></p>

<hr />

<h2 class="ref">Nette</h2>
<p class="item">01.&nbsp;<a href="http://nette.org/cs/" title="nette.org">Nette Framework</a></p>
<p class="item">02.&nbsp;<a href="http://pla.nette.org/cs/navod-vytvarime-blog" title="pla.nette.org">Návod, jak vytvořit blog</a></p>
<p class="item">03.&nbsp;<a href="http://doc.nette.org/cs/book/start" title="doc.nette.org">Nette Quickstart</a></p>
<p class="item">04.&nbsp;<a href="http://forum.nette.org/cs/8675-vypsani-promenne-v-sablone" title="forum.nette.org">Vypsání proměnné v šabloně</a></p>
<p class="item">05.&nbsp;<a href="http://pla.nette.org/cs/nette-database-vs-dibi" title="pla.nette.org">Nette\Database vs dibi</a></p>
<p class="item">06.&nbsp;<a href="http://forum.nette.org/cs/9671-netteextension-aneb-konfigurace-vseho-v-nette-pomoci-config-neon" title="forum.nette.org">NetteExtension aneb konfigurace všeho v Nette pomocí config.neon</a></p>
<p class="item">07.&nbsp;<a href="http://forum.nette.org/cs/11130-jak-pouzit-httprequest-zjisteni-ip-adresy" title="forum.nette.org">Jak použít httpRequest (zjištění IP adresy)</a></p>

<hr />

<h2 class="ref">PHP, MySQL</h2>
<p class="item">01.&nbsp;<a href="http://www.apachefriends.org/en/xampp.html" title="apachefriends.org">XAMPP</a></p>
<p class="item">02.&nbsp;<a href="http://www.php.net/manual/en/langref.php" title="php.net">PHP Language Reference</a></p>
<p class="item">03.&nbsp;<a href="https://plus.google.com/u/0/communities/102841152909319035256" title="plus.google.com">Brno PHP</a></p>
<p class="item">04.&nbsp;<a href="http://www.w3schools.com/sql/sql_foreignkey.asp" title="w3schools.com">Create table with foreign key</a></p>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>


<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 