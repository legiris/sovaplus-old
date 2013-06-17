<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.13479400 1370869887";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\@layout.latte";i:2;i:1370869885;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w91pdkfeol')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbd24d611f5d_title')) { function _lbd24d611f5d_title($_l, $_args) { extract($_args)
?>sovaplus.cz<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lba2b691a3a4_head')) { function _lba2b691a3a4_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbc265253228_scripts')) { function _lbc265253228_scripts($_l, $_args) { extract($_args)
?>	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/main.js"></script>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->striptags(ob_get_clean())  ?></title>

	<link rel="stylesheet" media="all" href="<?php echo htmlSpecialChars($basePath) ?>/css/main.css" />
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
<div id="page">
	<script> document.body.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash): ?>	<div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>

	<div id="header">&nbsp;&nbsp;&nbsp; || Sovaplus.cz</div>	<!-- ./header -->

	<div id="main-page">

	<div id="left-column">
	<div id="leftmenu">
		<ul>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/">Domů</a></li>
		</ul> 
		<h2>Web</h2>
		<ul>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/piseme-prvni-aplikaci-v-nette/">Píšeme první aplikaci v Nette</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/web-ukazky-prace/">Ukázky práce</a></li>
		</ul>
		<h2>DTP</h2>
		<ul>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/knizni-sazba-v-texu">Knižní sazba v TeXu</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/latex-ukazky-prace">Ukázky práce</a></li>
		</ul>
		<h2>Ostatní</h2>
		<ul>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/stavba-pocitace/">Stavba počítače</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/kontakt/">Kontakt</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/odkazy/">Odkazy</a></li>
		</ul>
		
	</div>	<!-- ./leftmenu -->	
	</div>	<!-- ./left-column -->

	<div id="middle-page">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
	</div>	<!-- /middle-page -->
	
	
	</div> <!-- ./main-page -->
	
	<div id="footer">&copy;&nbsp;sovaplus.cz</div>	<!-- ./footer -->

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
</div>	<!-- ./page -->	
</body>
</html>
