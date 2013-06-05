<?php //netteCache[01]000389a:2:{s:4:"time";s:21:"0.11294200 1370445208";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:67:"/var/www/test.lamp/web/sovaplus/sandbox/app/templates/@layout.latte";i:2;i:1370445205;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /var/www/test.lamp/web/sovaplus/sandbox/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2j2qtbb2jr')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbe9b6d67722_title')) { function _lbe9b6d67722_title($_l, $_args) { extract($_args)
?>sovaplus.cz<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb66bde77d75_head')) { function _lb66bde77d75_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb5bc0f80835_scripts')) { function _lb5bc0f80835_scripts($_l, $_args) { extract($_args)
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

	<div id="header">Enter | Sovaplus.cz</div>	<!-- ./header -->

	<div id="left-column">
	<div id="leftmenu">
		<ul>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>">Domů</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/o-mne/">O mně</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>/piseme-prvni-aplikaci-v-nette/">Píšeme první aplikaci v Nette</a></li>
		</ul> 
		<p>Reference</p>
		<ul>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>">Blog</a></li>
		 <li><a href="<?php echo htmlSpecialChars($basePath) ?>">Aplikace na správu článků</a></li>
		</ul>
	</div>	<!-- ./leftmenu -->	
	</div>	<!-- ./left-column -->

	<div id="middle-page">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
	</div>	<!-- /middle-page -->
	
	<div id="footer">&copy;&nbsp;sovaplus.cz</div>	<!-- ./footer -->

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
</div>	<!-- ./page -->	
</body>
</html>
