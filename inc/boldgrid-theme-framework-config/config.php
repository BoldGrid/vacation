<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-vacation'; // Text domain
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
                '#446cb3',
                '#203356',
                '#b7b7b7',
			) 
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
                '#26a65b',
                '#145230',
                '#32cc72',
			) 
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
                '#6c7a89',
                '#333333',
                '#99acc0',
			) 
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
                '#f4b350',
                '#6c7a89',
                '#d35400',
			) 
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
                '#a2ded0',
                '#01ae92',
                '#6c7a89',
			) 
		),
	);
	
	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 19: //<-- Real Estate
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 26: //<-- Restaurant
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		
		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#545454';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 215;

	// Typography Relationships
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.3, 
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-gamma-1 h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.3, 
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.background-primary h3' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.0, 
	);

	// Icons
	$boldgrid_framework_configs['social-icons']['size'] = '2x';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Primary Menu";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Fixed Side Menu";
	$boldgrid_framework_configs['menu']['prototype']['social']['menu_class'] = 'menu-items';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<div class="call-to-action">
				<h2>WHAT SETS US APART</h2>
				<p>We are committed to providing the absolute best quality to each and every one of our customers. Over the last 20 years, since our start, we have continued to grow while staying true to our orginal mission — to give you, the customer, a winning service that you can rely on.</p>
				<p class="p-button-primary">
					<a class="button-primary" href="about-us">FIND OUT MORE <i class="fa fa-chevron-circle-right"> </i></a>
				</p>
			</div>
		</div>
	</div>
HTML;

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);
	
	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Header';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Header';
	
	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Pacifico';
	$controls['logo_font_size']['default'] = 42;
	$controls['logo_text_transform']['default'] = 'lowercase';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
