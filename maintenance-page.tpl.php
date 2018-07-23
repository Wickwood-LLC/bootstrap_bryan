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
    <!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <?php print $head; ?>
        <title>
            <?php print $head_title; ?>
        </title>
        <?php print $styles; ?>
        <?php print $scripts; ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style type="text/css">
        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/86f93e/00000000000000003b9b093f/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n9&v=3) format("woff2"), url(https://use.typekit.com/af/86f93e/00000000000000003b9b093f/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n9&v=3) format("woff"), url(https://use.typekit.com/af/86f93e/00000000000000003b9b093f/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n9&v=3) format("opentype");
            font-weight: 900;
            font-style: normal;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/8be0a8/00000000000000003b9b093e/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i9&v=3) format("woff2"), url(https://use.typekit.com/af/8be0a8/00000000000000003b9b093e/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i9&v=3) format("woff"), url(https://use.typekit.com/af/8be0a8/00000000000000003b9b093e/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i9&v=3) format("opentype");
            font-weight: 900;
            font-style: italic;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/1f7f57/00000000000000003b9b093b/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3) format("woff2"), url(https://use.typekit.com/af/1f7f57/00000000000000003b9b093b/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3) format("woff"), url(https://use.typekit.com/af/1f7f57/00000000000000003b9b093b/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3) format("opentype");
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/ba66d8/00000000000000003b9b093a/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3) format("woff2"), url(https://use.typekit.com/af/ba66d8/00000000000000003b9b093a/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3) format("woff"), url(https://use.typekit.com/af/ba66d8/00000000000000003b9b093a/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3) format("opentype");
            font-weight: 700;
            font-style: italic;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/773235/00000000000000003b9b0934/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"), url(https://use.typekit.com/af/773235/00000000000000003b9b0934/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"), url(https://use.typekit.com/af/773235/00000000000000003b9b0934/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/56978c/00000000000000003b9b0935/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff2"), url(https://use.typekit.com/af/56978c/00000000000000003b9b0935/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff"), url(https://use.typekit.com/af/56978c/00000000000000003b9b0935/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("opentype");
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/1f55cd/00000000000000003b9b0932/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("woff2"), url(https://use.typekit.com/af/1f55cd/00000000000000003b9b0932/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("woff"), url(https://use.typekit.com/af/1f55cd/00000000000000003b9b0932/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("opentype");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: proxima-nova;
            src: url(https://use.typekit.com/af/626569/00000000000000003b9b0933/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("woff2"), url(https://use.typekit.com/af/626569/00000000000000003b9b0933/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("woff"), url(https://use.typekit.com/af/626569/00000000000000003b9b0933/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("opentype");
            font-weight: 300;
            font-style: italic;
        }

        @font-face {
            font-family: eurostile-extended;
            src: url(https://use.typekit.com/af/bea946/00000000000000000001799b/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n9&v=3) format("woff2"), url(https://use.typekit.com/af/bea946/00000000000000000001799b/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n9&v=3) format("woff"), url(https://use.typekit.com/af/bea946/00000000000000000001799b/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n9&v=3) format("opentype");
            font-weight: 900;
            font-style: normal;
        }

        @font-face {
            font-family: eurostile-extended;
            src: url(https://use.typekit.com/af/27e125/00000000000000000001799e/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i9&v=3) format("woff2"), url(https://use.typekit.com/af/27e125/00000000000000000001799e/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i9&v=3) format("woff"), url(https://use.typekit.com/af/27e125/00000000000000000001799e/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i9&v=3) format("opentype");
            font-weight: 900;
            font-style: italic;
        }
        </style>
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
                                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                                                <?php print $site_name; ?>
                                            </a>
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