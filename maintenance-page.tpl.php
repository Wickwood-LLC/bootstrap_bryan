<?php

/**
 * @file
 * Implementation to display a single Drupal page while offline. Taken from Bartik maintenance page template.
 *
 * All the available variables are mirrored in page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see bartik_process_maintenance_page()
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <?php print $head; ?>
    <title>
        <?php print $head_title; ?>
    </title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <link rel="stylesheet" href="https://use.typekit.net/fzs3blv.css">
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <div id="skip-link">
        <a href="#main-content" class="element-invisible element-focusable">
            <?php print t('Skip to main content'); ?>
        </a>
    </div>
    <div id="page-wrapper">
        <div id="page">
            <div id="header">
                <div class="section clearfix">
                    <div class="panel-display panel-3col-33-stacked  clearfix" id="mini-panel-header">
                        <div class="panel-panel panel-col-top">
                            <div class="inside">
                                <div class="contextual-links-region panel-pane pane-fieldable-panels-pane pane-current-7 campaign-slogan-2 pane-bundle-text">
                                  <h2 class="rtecenter pane-page-slogan2">Your Choice for Justice</h2>
                                </div>
                            </div>
                        </div>
                        <div class="center-wrapper">
                            <div class="panel-panel panel-col-first">
                                <div class="inside">
                                    <div class="">
                                        <div class="panel-pane pane-page-logo">
                                          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-panel panel-col">
                                <div class="inside">
                                    <div class="">
                                        <div class="contextual-links-region panel-pane pane-fieldable-panels-pane pane-uuid-bd7a9404-bf07-4689-bb8b-2371f80a3c97 title-bryan pane-bundle-text">
                                            <h1 class="rtecenter"><a href="https://3.testing.1.dev.bryanclenahan.com/">BRYAN</a></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-panel panel-col-last">
                                <div class="inside">
                                    <div class="">
                                        <div class="panel-pane pane-page-logo">
                                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-panel panel-col-bottom">
                            <div class="inside">
                                <div class="">
                                    <div class="panel-pane pane-page-site-name">
                                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                                    </div>
                                    <div class="panel-pane pane-page-slogan">
                                        <?php print $site_slogan; ?>
                                    </div>
                                    <div class="contextual-links-region panel-pane pane-fieldable-panels-pane pane-uuid-f762c2c6-3ffd-42e0-bc81-aa5d97add637 campaign-slogan-1 pane-bundle-text">
                                        <h1 class="rtecenter"><em>Because it matters.</em></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.section, /#header -->
            <div id="main-wrapper">
                <div id="main" class="clearfix">
                    <div id="content" class="column">
                        <div class="section">
                            <a id="main-content"></a>
                            <?php if ($title): ?>
                            <h1 class="title" id="page-title"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print $content; ?>
                            <?php if ($messages): ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.section, /#content -->
                </div>
            </div>
            <!-- /#main, /#main-wrapper -->
        </div>
    </div>
    <!-- /#page, /#page-wrapper -->
</body>

</html>