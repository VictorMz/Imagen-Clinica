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
					
						<?php include 'include/header.php' ?>
						
					</div>	
				</div>
				<div class="container">
					<?php print $messages; ?>
				</div>
				<div class="row main-menu">
					<?php include 'include/menu.php' ?>	
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
				   
				   <?php if (!empty($page['promotions'])): ?> <!-- Slider k va aser un bloque de imagenes -->
						<?php print render($page['promotions']); ?>
					<?php endif; ?>
							
				</div>
				
				<div class="row tags hidden-xs">
					<ul>
						<?php
						$x=1;
						foreach ($page['content']['system_main']['nodes'][3]['field_tags_home']['#items'] as $i => $value): ?>
							<li><?php 
							if($x == $i){
								print '<b>'.$page['content']['system_main']['nodes'][3]['field_tags_home']['#items'][$i]['value'].'</b>'; 
								$x+=2;
							}else{
								print $page['content']['system_main']['nodes'][3]['field_tags_home']['#items'][$i]['value'];					
							}							
							?>
							</li>
						<?php 				
						endforeach;
						?>				
					</ul>
					
				</div>
				
				<div class="row contact-us">
					<div class="col-sm-6 contact">
					    <div class="border-shadow">
							<h3>Contáctanos</h3>
							<div class="container-fluid back-wt">
								<div class="form-area"> 
									<p>Dudas, sugerencias o comentarios. Envíarlas aqui:</p>
									<?php if (!empty($page['contact'])): ?> 
										<?php print render($page['contact']); ?>
									<?php endif; ?>	
								</div>							
							</div>
						</div>
					</div>
					<div class="col-sm-6 map">
					    <div class="border-shadow">
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

			</div>

			<?php include 'include/footer.php' ?>
			
		</div>