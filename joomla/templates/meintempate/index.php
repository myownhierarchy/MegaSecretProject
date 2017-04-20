<?php /**
 * Created by PhpStorm.
 * User: ThorbenHartmann
 * Date: 10.04.17
 * Time: 23:07
 */
?>
<?php defined( '_JEXEC' ) or die;
$app = JFactory::getApplication();
$sitetitle = $app->get('sitename');
$logo = $this->params->get('logoFile');
$logoHtml =($logo) ? '<img src="' . $logo . '" alt="' . $sitetitle . '" style="horizontal-align: text-left;" />&nbsp;' :'';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language;?>" lang="<?php echo $this->language;?>">
<head>
    <?php
    JHtmlBootstrap::loadCss();
    $doc = JFactory::getDocument();
    $doc->addStyleSheet($this->baseurl . '/templates/' .$this->template . '/css/template.css');
    ?>
    <jdoc:include type="head"/>
    <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName');?>' rel='stylesheet' type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/template.css" type="text/css" />
</head>
    <body>
    <div class="container">
        <header>
            <a href="/" title="Home"><?php echo $logoHtml; ?></a>
        </header>
        <nav class="navbar row-fluid">
            <div class="navbar-inner">
                <jdoc:include type="modules" name="header"/>
            </div>
        </nav>
        <div class="row-fluid">
            <div id="sidebar-left" class="span3 sidebar"> <jdoc:include type="modules" name="sidebar-left"/> </div>
            <main id="content" class="span9"> <jdoc:include type="modules" name="content"/> </main>

        </div>
        <footer> <jdoc:inlcude type="modules" name="footer"/> </footer>
    </div>
    </body>
</html>