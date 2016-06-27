<?PHP
// este template sirve para pre-procesar cosas (nodos, metodos, html, etc)
// toda la logica va aqui (back)
// metodo render --> pintar cosas -- solo pinta las cosas 1 ves
// objetos inician con #
// ver metodos predefinidos: api.drupal.org
function iClinica_preprocess_html(&$vars) {
     // Load font
     drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));
	 
	 if ($vars['is_front'] == TRUE){
         drupal_add_css( path_to_theme().'/assets/css/iclinica-home.css', array('group' => CSS_THEME ));
	 }
}

function iClinica_preprocess_page(&$variables){
	global $base_url;

	$menu_trail = menu_set_active_trail(); // menu_set_active_trail-> trae el path del menu
	
	$variables['base_url'] = $base_url;
	$variables['imgs_url'] = $base_url.'/'.path_to_theme();	
	$variables['in_admin'] = path_is_admin(current_path()) ? TRUE : FALSE;
	
	$variables['parent_page'] = isset($menu_trail[1]['link_title']) ? $menu_trail[1]['link_title']:'';
    $variables['parent_class']= isset($menu_trail[1]['options']['attributes']['class'][0]) ? $menu_trail[1]['options']['attributes']['class'][0]:'';
	// debuguear 
	kpr($variables); //metodo del modulo devel --> muestra los atributos k trae la pagina
	//kpr($menu_trail); // muestra los atributos k trae el menu
}

function iClinica_file_directory_path() {
  global $base_url;
  $path = variable_get('file_directory_path', conf_path() . '/files');
  return $base_url."/".$path;
}

function iClinica_preprocess_image(&$vars){
	$vars['attributes']['class'][] = 'img-responsive';
}

function iClinica_preprocess_image_style(&$vars){
	$vars['attributes']['class'][] = 'img-responsive';
}
?>