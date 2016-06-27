<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

    <div class="wrapper">
			<div class="container-fluid top">
				<div class="container"><!-- datos de la clinica, logo , tel, etc-->
					<div class="row header hidden-xs">
					
					    <?php if (!empty($site_slogan)): ?>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<?php print $site_slogan; ?>
							</div>
						<?php endif; ?>
						
						<div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-6 text-center">
							<img src="http://placehold.it/200x140" class="img-responsive">
						</div>
						
						<div class="col-md-3 col-md-offset-2 hidden-sm">
							<div class="row phone-top">
								<div class="col-xs-2">
									<i class="fa fa-phone fa-3x fa-pull-left" aria-hidden="true"></i>
								</div>
								<div class="col-xs-10">
									<?php print render($page['content']['system_main']['nodes'][3]['field_phones']['#items'][0]['value']);?>
								</div>
							</div>
							<div class="row location-top">
								<div class="col-xs-2">
									<i class="fa fa-map-marker fa-3x fa-pull-left" aria-hidden="true"></i>
								</div>
								<div class="col-xs-10">
									<?php print render($page['content']['system_main']['nodes'][3]['field_direction']['#items'][0]['value']);?>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12 visible-sm">
							<div class="col-sm-6">
								<i class="fa fa-phone fa-3x fa-pull-left" aria-hidden="true"></i>
								<?php print render($page['content']['system_main']['nodes'][3]['field_phones']['#items'][0]['value']);?>
							</div>
							<div class="col-sm-6">
								<i class="fa fa-map-marker fa-3x fa-pull-left" aria-hidden="true"></i>
								<?php print render($page['content']['system_main']['nodes'][3]['field_direction']['#items'][0]['value']);?>
							</div>
						</div>
						
					</div>	
				</div>
				<div class="row main-menu">
						<nav id="navbar-main" class="navbar navbar-default center" role="navigation"><!-- menu -->
							<div class="container">
								<div class="navbar-header row">
									<div class="col-xs-8 visible-xs data-mobile">
										<img src="http://placehold.it/100x60" class="img-responsive">
									</div>	
									<div class="col-xs-4">								
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-c">
											<span class="sr-only">Menu</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
								</div>

								<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-c">
								<?php if (!empty($page['main_menu'])): ?>
									<ul class="nav navbar-nav">
										<?php print render($page['main_menu']); ?>
									</ul>
								<?php endif; ?>
								</div>
								
								<?php if (!empty($page['page_top_information'])): ?>
								<div class="search">
									<?php print render($page['page_top_information']); ?>
								</div>
								<?php endif; ?>								
							</div>
						</nav>
				</div>
			</div>
					
			<div class="container-fluid promotions">
                
				<?php if (!empty($page['slide_home'])): ?> <!-- Slider -->
				    <?php print render($page['slide_home']); ?>
				<?php endif; ?>
				
				<div class="banner-clinica"> <!-- banner clinica -->
					<div class="container">
						<?php print render($page['content']['system_main']['nodes'][3]['field_text_banner']['#items'][0]['value']);?>
					</div>
				</div>
				
			</div> 
			
			<div class="container content-main"> <!-- contenido principal -->
			
				<div class="row options text-center">
					<div class="col-sm-4">
						<img src="<?php print iClinica_file_directory_path()."/". render($page['content']['system_main']['nodes'][3]['field_image_promotions'][0]['#item']['filename']);?>" class="img-responsive">
					</div>
					
					<div class="col-sm-4">
						<img src="<?php print iClinica_file_directory_path()."/". render($page['content']['system_main']['nodes'][3]['field_image_promotions'][1]['#item']['filename']);?>" class="img-responsive">
					</div>
					
					<div class="col-sm-4">
						<img src="<?php print iClinica_file_directory_path()."/". render($page['content']['system_main']['nodes'][3]['field_image_promotions'][2]['#item']['filename']);?>" class="img-responsive">
					</div>			
				</div>
				
				<div class="row tags">
					<ul>
						<li>Analisis Clinicos</li>
						<li>Laboratorio</li>
						<li>Estudios Cardiacos</li>
						<li>Tiroides</li>
						<li>Estudios Renales</li>
						<li>Gammagrafias</li>
						<li>Estudios Hepaticos</li>
						<li>Ultrasonidos</li>	
						<li>Tratamientos con yodo 131</li>					
					</ul>
					
				</div>
				
				<div class="row contact-us">
					<div class="col-sm-6 contact">
						<h3>Contáctanos</h3>
						<div class="container-fluid back-wt">						
							<?php if (!empty($page['contact'])): ?> <!-- Slider k va aser un bloque de imagenes -->
								<?php print render($page['contact']); ?>
							<?php endif; ?>						
						</div>
					</div>
					<div class="col-sm-6 map">
						<h3>Visítanos</h3>
						<div class="container-fluid back-wt">
							<p>Nos ubicamos en Cuauhtemoc 797</p>
							<?php 
							$lat = $page['content']['system_main']['nodes'][3]['field_latitud_home']['#items'][0]['value'];
							$log = $page['content']['system_main']['nodes'][3]['field_longitud_home']['#items'][0]['value'];
							?>
							<iframe src="https://maps.google.com.mx/maps?f=q&hl=en&q=<?php print $lat; ?>,<?php print $log; ?>&iwloc=&ie=UTF8&t=m&z=15&output=embed" width="100%" frameborder="0"></iframe>
						</div>
					</div>
				</div>

			</div>

			<footer> <!-- footer -->
			    <?php if (!empty($page['footer'])): ?> <!-- Slider k va aser un bloque de imagenes -->
					<?php print render($page['footer']); ?>
				<?php endif; ?>
			</footer>
			
		</div>