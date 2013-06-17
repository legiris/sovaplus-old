<?php //netteCache[01]000395a:2:{s:4:"time";s:21:"0.91279300 1370692639";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\Homepage\default.latte";i:2;i:1370692303;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'gsfje1zvua')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbeafa401d2a_content')) { function _lbeafa401d2a_content($_l, $_args) { extract($_args)
?><div class="menu-table">
<table>
<tr><td class="normal-top">Web</td><td class="normal-top"></td></tr>
<tr><td class="background"><h1><a href="<?php echo htmlSpecialChars($basePath) ?>/piseme-prvni-aplikaci-v-nette/" class="row2">Píšeme první aplikaci v Nette</a></h1></td>
	<td class="background"><h1><a href="<?php echo htmlSpecialChars($basePath) ?>/web-ukazky-prace/" class="row2">Ukázky práce (html, php...)</a></h1></td></tr>
<tr><td class="normal">DTP</td><td class="normal"></td></tr>    
<tr>
	<td class="background"><h1><a href="<?php echo htmlSpecialChars($basePath) ?>/knizni-sazba-v-texu/" class="row2">Knižní sazba v&nbsp;TeXu</a></h1></td>
	<td class="background"><h1><a href="<?php echo htmlSpecialChars($basePath) ?>/latex-ukazky-prace/" class="row2">Ukázky práce (LaTeX)</a></h1></td></tr>
<tr><td class="normal">Ostatní</td><td></td></tr>
<tr><td class="background"><h1><a href="<?php echo htmlSpecialChars($basePath) ?>/kontakt/" class="row1">Kontakt</a></h1></td>
	<td class="background"><h1><a href="<?php echo htmlSpecialChars($basePath) ?>/odkazy/" class="row1">Odkazy</a></h1></td></tr>
</table>
</div>

<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb161a0ed345_scripts')) { function _lb161a0ed345_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>
<script src="http://jush.sourceforge.net/jush.js"></script>
<script>
	jush.create_links = false;
	jush.highlight_tag('code');
	$('code.jush').each(function(){ $(this).html($(this).html().replace(/\x7B[/$\w].*?\}/g, '<span class="jush-latte">$&</span>')) });

	$('a[href^=#]').click(function(){
		$('html,body').animate({ scrollTop: $($(this).attr('href')).show().offset().top - 5 }, 'fast');
		return false;
	});
</script>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars()) ; 