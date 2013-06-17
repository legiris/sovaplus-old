<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.57065500 1371422137";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:90:"E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\PisemePrvniAplikaciVNette\default.latte";i:2;i:1371422129;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\sovaplus\sandbox\app\templates\PisemePrvniAplikaciVNette\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9hb3p7sj7s')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe5d1f9bc7b_content')) { function _lbe5d1f9bc7b_content($_l, $_args) { extract($_args)
?><h1>Píšeme první aplikaci v Nette</h1>

<p>Jak již nadpis napovídá, pokusíme se vytvořit jednoduchou aplikaci s použitím frameworku Nette. Návod je určen pro ty,
kteří s Nette teprve začínají nebo uvažují o tom, že by vyzkoušeli nějaký ten framework. 
Ještě než se do toho pustíme, tak si řekneme, co byste měli zhruba umět:<br /><br /></p>

<ul>
<li>základy OOP v PHP,</li>
<li>základní znalost MySQL,</li>
<li>MVP/MVC architektura.</li>
</ul>

<p><br />A abyste nebyli dlouho napjatí, tak již dopředu prozradím, že se bude jednat o aplikaci <span class="i">diskuzního fóra</span>, které bude mít podobu
anonymní diskuze. Anonymní z toho důvodu, aby zůstala zachována jednoduchost celé aplikace.</p>
 
<p>
Vzhledem k ukázkám zdrojových kódů, které text přeci jen natahují, je tento návod rozdělen na 2 části. První část, tedy část, kterou právě čtete, zahrnuje
následující sekce:
</p>

<ul>
<li>Co všechno budeme potřebovat?</li>
<li>Začínáme</li>
<li>Návrh databáze</li>
<li>Konfigurace Dibi</li>
<li>Model</li>
<li>Prezentační vrstva</li>
<li>Založení diskuze</li>
</ul>

<p>
Ve druhé části se blíže podíváme na:
</p>

<ul>
<li>Vytváříme seznam témat diskuzního fóra</li>
<li>Zobrazení diskuzního vlákna</li>
<li>Vložení komentáře</li>
<li>Způsob vypsání komentářů</li>
<li>Odkazy a náměty pro další rozšíření</li>
</ul>

<h2>Co všechno budeme potřebovat?</h2>

<p>To se hned dozvíte. Vezmu to popořadě, bez čeho se neobejdeme.</p>

<h3>Vývojové prostředí</h3> 
<p>Doma používám <a href="http://www.apachefriends.org/en/xampp-windows.html" title="Download Xampp for Windows">Xampp</a> pro Windows, který v sobě již zahrnuje
instalaci PHP, MySQL a Apache (tedy kromě dalších nástrojů), takže to nemusíte konfigurovat zvlášť a bude to fungovat.</p>

<h3>IDE editor</h3>
<p>Jde o editor s vývojovým prostředím. Není to nezbytné, kód si můžete psát, kde chcete &#8211; třeba v PSPadu, ale pokud to myslíte vážně, doporučuji.
Zatím používám <a href="http://archive.eclipse.org/eclipse/downloads/drops/R-3.7.2-201202080800/index.php#EclipseSDK" title="Download Eclipse 3.7.2">Eclipse</a>,
bohužel Eclipse neumí pracovat se šablonami Nette (tzv. latte soubory),
takže můžete vyzkoušet <a href="https://netbeans.org/downloads/index.html" title="Download NetBeans">NetBeans</a> pro PHP, který na to má plugin. Pokud se rozhodnete pro Eclipse, tak je nutné si do něj přidat PDT (PHP Development Tools), postup
je popsán <a href="http://wiki.eclipse.org/PDT/Installation" title="PDT Installation">zde</a>.</p>

<h3>Nette Framework</h3>
<p>Doporučuji si stáhnout rovnou verzi pro PHP 5.3 nebo 5.4, která umožňuje práci s namespaces. Odkaz pro stažení je <a href="http://nette.org/cs/download"
title="Nette Framework 2.0 download">tady</a>. Pokud používáte Git, je možné
aktuální verzi získat z Git repozitáře na <a href="http://github.com/nette/nette" title="GIT nette">http://github.com/nette/nette</a>.</p>

<h3>Dibi</h3>
<p><a href="http://dibiphp.com/cs/download" title="Download Dibi 2.0">Dibi</a> je databázový layer, knihovna, která není součástí Nette, takže si ji budeme muset nainstalovat. Pokud zvládáte SQL, tak se s ní jednoduše naučíte
pracovat a mimo jiné Vám také ušetří mnoho práce.</p>


<h2>Začínáme</h2>
<p>Nejprve si na disku vytvoříme novou složku, do které si zkopírujeme adresář sandbox z Nette instalace a do složky libs v sandboxu přidáme adresář dibi z instalace dibi. 
V editoru si pak pod sandboxem založíme nový projekt, takže budeme mít následující strukturu:<br /></p>
<img src="<?php echo htmlSpecialChars($basePath) ?>/images/app-folders.jpg" height="327" width="180" /> 

<p>To, zda jsme postupovali správně, si ověříme zobrazením uvítací stránky Nette v prohlížeči. 
V závislosti na adresářové struktuře ji budeme mít k dispozici pod:</p>
<pre>http://localhost/sandbox/www</pre>

<p>nebo v mém případě:</p>
<pre>http://localhost/web/forum/sandbox/www</pre>
<img src="<?php echo htmlSpecialChars($basePath) ?>/images/nette.jpg" width="510" height="377" title="Nette homepage" />

<h3>Návrh databáze</h3>
<p>Nejprve se podíváme na návrh databáze. Pro diskuzní fórum budeme potřebovat tabulku pro jednotlivá témata diskuze. Druhou
tabulkou pak bude tabulka komentářů. Vzhledem k tomu, že vynecháme přihlašování uživatelů, tak se obejdeme bez této tabulky, nicméně u každého uživatele budeme
sledovat jeho IP adresu, jejíž část pak budeme vypisovat v diskuzi. Následující MySQL příkazy nám vytvoří požadovanou strukturu:
</p>

<pre>
CREATE TABLE IF NOT EXISTS `thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `comment` text COLLATE utf8_czech_ci NOT NULL,
  `ip` char(46) COLLATE utf8_czech_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1;
</pre>

<pre>
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  `ip` char(46) COLLATE utf8_czech_ci NOT NULL,
  `date` datetime NOT NULL,
  `thread_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `thread_id` (`thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1;
</pre>

<h3>Konfigurace Dibi</h3>
<p>Nyní se podíváme na to, jakým způsobem zprovozníme Dibi. Pro nastavení budeme potřebovat soubor config.neon z adresáře app/config.
Při úpravě tohoto souboru si musíme dát pozor na práci s mezerami či tabulátorem, protože nesprávné odsazení by vedlo k chybě. Z původního
souboru odstraníme nastavení pro Nette Database. Do části common si přidáme rozšíření dibi a doplníme vstupní parametry pro přihlášení k databázi.</p>

<pre>
common:
	dibi:
		driver: mysql
		host: localhost
		username: root
		password:
		database: forum
		lazy: TRUE
</pre>
 
<p>
Výsledný soubor config.neon je k dispozici tady.<br />
Nyní v souboru bootstrap.php musíme dodefinovat rozšíření, které jsme použili pro konfiguraci dibi v config.neon. Předtím než si vytvoříme DI Container, 
přidáme následující kód: 
</p>

<pre>
$configurator->onCompile[] = function($configurator, $compiler) {
	$compiler->addExtension('dibi', new DibiNetteExtension);
};
$container = $configurator->createContainer();
</pre>

<p>Pomocí následujícího řádku můžeme povolit nebo zakázat Laděnku.</p>

<pre>
$configurator->setDebugMode(TRUE);
</pre>


<h3>Model</h3>
<p>
Po konfiguraci Dibi je čas se vrhnout na model. Nejprve si vytvoříme základní třídu, která bude výchozí pro všechny další třídy.
Pomocí konstruktoru, kterému předáme objekt DibiConnection, si do proměnné $this->dibi uložíme připojení k databázi. To znamená, že
s Dibi budeme pracovat následujícím způsobem: $this->dibi->query('...').</p> 

<pre>
class BaseManager extends Nette\Object
{
	/** @var DibiConnection */
	protected $dibi;
	
	public function __construct(DibiConnection $connection)
	{
		$this->dibi = $connection;
	}	
}
</pre>

<p>
V dalším kroku si vytvoříme zatím prázdnou modelovou třídu pro diskuzní vlákna (Thread.php) a příspěvky (Comment.php).</p> 

<pre>
class Comment extends BaseManager
{
}
</pre>

<pre>
class Thread extends BaseManager
{
}
</pre>

<p>Tyto třídy si následně jako službu zaregistrujeme v config.neon.</p>

<pre>
	services:
		# authenticator: Authenticator
		routerFactory: RouterFactory
		router: @routerFactory::createRouter
		baseManager: BaseManager
		thread: Thread
		comment: Comment
</pre>


<h3>Prezentační vrstva</h3>
<p>Nejprve provedeme pár kosmetických úprav v šabloně @layout.latte v adresáři templates a nalinkujeme si vlastní styl (main.css), který si vzápětí
připravíme a uložíme do www/css. Styl si můžete stáhnout tady nebo si můžete udělat kompletně vlastní
design.
</p>

<pre>
<code>&lt;title&gt;<?php echo'{' ?>block title|striptags<?php echo '}' ?>Diskuzní fórum<?php echo '{' ?>
/block<?php echo '}' ?>&lt;/title&gt;
&lt;link rel="stylesheet" media="all" href="<?php echo '{' ?>$basePath<?php echo '}' ?>/css/main.css"&gt;
...
  &lt;div id="page"&gt;
    &lt;div n:foreach="$flashes as $flash" class="flash <?php echo '{' ?>$flash->type<?php echo '}' ?>
"&gt;<?php echo '{' ?>$flash->message<?php echo '}' ?>
  
    &lt;/div&gt;
    <?php echo '{' ?>include #content<?php echo '}' ?>

  &lt;/div&gt;	&lt;!-- // page --&gt;</code>
</pre>

<p>Pak si upravíme úvodní domovskou stránku default.latte, kterou najdeme v app/templates/Homepage. Původní obsah umístěný v sekci
<span><?php echo "{" ?>block content<?php echo "}" ?></span> smažeme
a nahradíme ho vlastním.</p> 

<pre><code>&lt;h1 class="title"&gt;Seznam témat diskuzního fóra&lt;/h1&gt;
&lt;p class="form"&gt;&lt;a href="<?php echo '{' ?>$basePath<?php echo '}' ?>/zalozit-novou-diskuzi/"&gt;Založit nové téma&lt;/a&gt;&lt;/p&gt;
&lt;div id="middle-page"&gt;
&lt;ul class="table"&gt;
  &lt;li&gt;
    &lt;p class="head"&gt;
      &lt;span class="title"&gt;Nadpis&lt;/span&gt;&lt;span class="count"&gt;Reakcí&lt;/span&gt;
      &lt;span class="date"&gt;Poslední reakce&lt;/span&gt;&lt;span class="since"&gt;Založeno&lt;/span&gt;
    &lt;/p&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;	&lt;!-- // middle-page --&gt;
</code></pre>

<p>Po aktualizaci stránky bychom měli vidět následující:<br /><br /></p>

<img src="<?php echo htmlSpecialChars($basePath) ?>/images/homepage.jpg" width="510" height="409" title="Forum homepage" />


<h3>Založení diskuze</h3>
<p>Pro založení diskuzního vlákna využijeme odkaz Založit nové téma a zároveň budeme chtít, aby nám tento odkaz vedl na stránku '.../zalozit-novou-diskuzi'.
V adresáři presenters si vytvoříme nový presenter pod názvem ZalozitNovouDiskuziPresenter.
</p> 

<pre>
class ZalozitNovouDiskuziPresenter extends BasePresenter
{
}
</pre>


<p>K právě vytvořenému presenteru budeme potřebovat také odpovídající šablonu. Do složky templates si tak přidáme adresář ZalozitNovouDiskuzi, 
umístíme do něho zatím prázdný soubor default.latte a vyzkoušíme, zda se nám z hlavní stránky po kliknutí na odkaz Založit nové téma zobrazí nová stránka.</p>

<img src="<?php echo htmlSpecialChars($basePath) ?>/images/template-orig.jpg" width="198" height="181" title="New template" />

<p>
Při založení nového vlákna se neobejdeme bez formuláře, takže se opět vrátíme k presenteru ZalozitNovouDiskuzi
a připravíme si továrničku createComponentThread(), která nám vytvoří požadovanou komponentu. Nejprve si zavedeme instanci formuláře, k tomu
potřebujeme odvozenou třídu Nette\Application\UI\Form a pomocí metod si nadefinujeme jednotlivé prvky formuláře. Navíc si doplníme základní kontroly pro odeslání formuláře.</p> 

<p>Tip: doporučuji si formulářové prvky pojmenovat stejným způsobem jako je máte v databázi.</p>

<pre>
use Nette\Application\UI\Form;

class ZalozitNovouDiskuziPresenter extends BasePresenter
{	

  protected function createComponentThread()
  {
	$form = new Form();
	$form->addText('title', 'Nadpis:');	
	$form->addText('comment', 'Dotaz:');
	$form->addSubmit('submit', 'Odeslat');
	return $form;
  }		
}
</pre>

<p>Vzhledem k tomu, že problematika formulářů je poměrně obsáhlá, tak více info najdete určitě v <a href="http://doc.nette.org/cs/forms" title="Nette forms">dokumentaci</a>. 
Do šablony si pak ručně vykreslíme formulář, k čemuž využijeme latte zápis. Všimněte si, že v šabloně volám <?php echo '{' ?>
form thread<?php echo '}' ?>,
kde název komponenty je zapsán malým písmenem.</p>

<pre>
<?php echo '{' ?>block content<?php echo '}' ?>

&lt;h2 class="title"&gt;Založení nové diskuze&lt;/h2&gt;
&lt;p class="menu"&gt;Nacházíte se: &lt;a href="<?php echo '{' ?>$basePath<?php echo '}' ?>/" 
title="Zpět na seznam témat"&gt;Domů&lt;/a&gt;&amp;nbsp;&amp;gt;&amp;nbsp;Založení nové diskuze
&lt;/p&gt;

&lt;div class="form"&gt;
<?php echo '{' ?>form thread<?php echo '}' ?>
	
  <?php echo '{' ?>control $form errors<?php echo '}' ?>
	
  &lt;table&gt;
  &lt;tr&gt;&lt;td class="center"&gt;<?php echo '{' ?>label title /<?php echo '}' ?>&lt;/td&gt;
      &lt;td class="top"&gt;<?php echo '{' ?>input title size => 45<?php echo '}' ?>&amp;nbsp;*&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td class="top"&gt;<?php echo '{' ?>label comment /<?php echo '}' ?>&lt;/td&gt;&lt;td class="top"&gt;
      &lt;textarea name="comment" rows="15" cols="60" id="comment">&lt;/textarea&gt;
      &amp;nbsp;*&lt;/td&gt;&lt;/tr&gt;
  &lt;tr&gt;&lt;td&gt;<?php echo '{' ?>input submit<?php echo '}' ?>&lt;/td&gt;&lt;td&gt;&lt;/td&gt;&lt;/tr&gt;
  &lt;/table&gt;
	
<?php echo '{' ?>/form<?php echo '}' ?>	
&lt;/div&gt;	&lt;!-- // form --&gt;
<?php echo '{' ?>/block<?php echo '}' ?>
</pre>


<p>Do presenteru si dále napíšeme metodu, která se provede po odeslání formuláře &#8211; threadSubmitted(). Předaná data můžeme získat pomocí metody
formuláře getValues(). Zatím si je jen zobrazíme:</p>

<pre>
public function threadSubmitted(Form $form)
{
	var_dump($form->getValues());		
}
</pre>

<p>
 Proto, aby formulář fungoval, musíme ještě do funkce, která nám vytváří komponentu, doplnit událost onSuccess, která se vykoná
po úspěšném odeslání formuláře a zavolá nám metodu pro zpracování dat z formuláře.</p>

<pre>
	$form->onSuccess[] = $this->threadSubmitted;
	return $form;
</pre>


<p>
 Pokud máme formulář OK a vidíme předaná
data, tak budeme moci přistoupit k jejich uložení do databáze. Předtím si ale v presenteru
vytvoříme instanci služby, která nám následně usnadní práci s modelovou vrstvou. K tomu použijeme metodu startup(), která se volá ihned po vytvoření
presenteru. Ve funkci startup() se nejprve potřebujeme odkázat na předka parent::startup(), v rámci třídy presenteru si inicializujeme proměnnou $thread
 a pak doplníme následující kód:
</p>

<pre>
	$this->thread = $this->context->thread;
</pre>

<p>Tímto jsme si tedy vytvořili instanci služby a uložili jsme si ji do vlastnosti presenteru. Celý kód funkce startup() bude vypadat takto:</p>

<pre>
class ZalozitNovouDiskuziPresenter extends BasePresenter
{

  /** @var Thread */	
  protected $thread;
	
  protected function startup()
  {
	  parent::startup();
	
	  //instance sluzby
	  $this->thread = $this->context->thread;
  }	
  ...
}
</pre>

<p>
Nyní si do modelové třídy Thread.php doplníme funkci insert(), které předáme data z formuláře.
</p>

<pre>
public function insert($data)
{
  return $this->dibi->query('INSERT INTO `thread`', $data);  
}
</pre>

<p>
A vrátíme se k rozepsané funkci threadSubmitted(). Metoda getValues() nám vrátí objekt naplněný daty z formuláře. Fajn, ještě ale potřebujeme
IP adresu uživatele. K tomu využijeme službu httpRequest ze systémového DI kontejneru, který máme v presenteru dostupný jako $this->context a
metody getRemoteAddress(). IP
adresu si uložíme do proměnné. Poté si data získaná z getValues() převedeme na pole, dostaneme tak asociativní pole v podobě klíč => hodnota a pak
si do pole už jen přidáme IP adresu. Takže data máme a můžeme je uložit. Pomocí dříve vytvořené instance služby $this->thread si zavoláme funkci z modelu, která
nám uloží data do databáze. Nakonec přesměrujeme uživatele na domovskou stránku s výpisem diskuzních témat.<br />
Pozn.: při testování mi localhost vrací IP adresu ve formátu ::1 (IPv6), takže si ji měním na 127.0.0.1 (IPv4). 
</p>

<pre>
public function threadSubmitted(Form $form)
{
  $ip = $this->context->httpRequest->getRemoteAddress();

  /* hack localhost IP */
  if ($ip == '::1') { $ip = '127.0.0.1'; }

  $data = $form->getValues();
  $data = (array) $data;
  $data['ip'] = $ip;

  $this->thread->insert($data);
  //$this->flashMessage('Diskuzní vlákno bylo přidáno.');
  $this->redirect('Homepage:default');	
}
</pre>

<p>Vyzkoušíme si prozatímní funkčnost aplikace, pohledem do databáze bychom se měli ujistit, zda se nám data z formuláře skutečně ukládají. No a jelikož
výpis diskuzních vláken nemáme ještě hotový, tak se nám v seznamu témat nebude zatím ani nic vypisovat, ale to za chvíli napravíme. Pokud chceme, tak před přesměrováním
uživatele, můžeme zobrazit tzv. flash zprávu s informací o tom, že příspěvek byl úspěšně uložen.
</p>


<h2>Vytváříme seznam témat diskuzního fóra</h2>

<p>
Pro vypsání seznamu témat si doplníme do modelu Thread.php funkci, která nám vybere všechna diskuzní vlákna.
</p>

<pre>
public function fetchAll()
{
	return $this->dibi->fetchAll('
		SELECT
			`id`, `title`, `date`
		FROM
			`thread`
		ORDER BY
			`date` DESC
		');
}
</pre>

<p>V dalším kroku si přesunu funkci startup(), kterou jsme si vytvořili v presenteru ZalozitNovouDiskuzi, do BasePresenteru.
Dělám to proto, že v Homepage presenteru budu pracovat s instancí služby thread, takže by bylo nutné si ji opět definovat ve startupu.
Takto ji budu mít implicitně k dispozici ve všech presenterech. V metodě renderDefault() si pak do proměnné threads uložím výsledek dotazu
fetchAll().  
</p> 

<pre>
class HomepagePresenter extends BasePresenter
{	
	public function renderDefault()
	{
		$this->template->threads = $this->thread->fetchAll(); 
	}
}
</pre>

<p>V šabloně Homepage/default.latte si pak témata vypíšeme:</p>

<pre>
<?php echo '{' ?>foreach $threads as $thread<?php echo '}' ?>

&lt;ul class="table"&gt;
 &lt;li&gt;
  &lt;p class="thread"&gt;
   &lt;span class="title"&gt;<?php echo '{' ?>$thread->title<?php echo '}' ?>&lt;/span&gt;&lt;span class="count"&gt;&lt;/span&gt;
   &lt;span class="date"&gt;&lt;/span&gt;&lt;span class="since"&gt;<?php echo '{' ?>
$thread->date<?php echo '}' ?>&lt;/span&gt;
  &lt;/p&gt;
 &lt;/li&gt;
&lt;/ul&gt;
<?php echo '{' ?>/foreach<?php echo '}' ?>
</pre>

<p>A toto dostaneme v prohlížeči:</p>

<img src="<?php echo htmlSpecialChars($basePath) ?>/images/threads.jpg" width="510" height="541" title="Threads" />

<p>Vidíme, že výsledek není zdaleka ideální, nicméně počet reakcí, stejně jako datum poslední reakce, si doplníme později s komentáři.


<h2>Zobrazení diskuzního vlákna</h2>

<p>Zobrazení vlákna bude mít na starosti ThreadPresenter(). K němu si dále vytvoříme adresář Thread a do něj umístíme šablonu default.latte.
Zatím budeme předpokládat, že url pro načtení vlákna bude v následujícím tvaru:
</p> 

<pre>
http://localhost/web/forum/sandbox/www/thread/default/15
</pre>

<p>
kde thread nám definuje Thread presenter, default akci presenteru &#8211; v našem případě dojde k vykreslení požadované šablony a číslo na konci představuje ID vlákna.
</p>

<pre>
class ThreadPresenter extends BasePresenter
{
  public function renderDefault($id)
  {
    $this->template->thread = $this->thread->fetch($id);
  }
}
</pre>

<p>Ještě si musíme doplnit metodu fetch() do modelové třídy Thread.php. Metoda nám vrátí požadované údaje o diskuzním vláknu tak, abychom je mohli
vypsat na stránku.</p>

<pre>
public function fetch($id)
{
  return $this->dibi->fetch('
	SELECT 
	  `id`, `title`, `comment`, `ip`, `date`
	FROM
	  `thread`
	WHERE
	  `id` = %i', $id
    );
}
</pre>

<p>Nyní vypsat šablonu a doplnit do homepage:default odkaz na vlakno</p>



<h2>Vložení komentáře</h2>

<p>Pro vložení komentáře si nachystáme metodu insert() do modelové třídy Comment.php.</p>


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