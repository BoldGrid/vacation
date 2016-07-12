<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-vacation';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'12' => array( '[menu]secondary' ),
		'1' => array( '[widget]boldgrid-widget-2' ),
		'5' => array( '[action]boldgrid_site_identity' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'13' => array( '[menu]tertiary', '[menu]social' ),
	);

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#446cb3',
				'#203356',
				'#b7b7b7',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#26a65b',
				'#145230',
				'#32cc72',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#6c7a89',
				'#333333',
				'#99acc0',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#f4b350',
				'#6c7a89',
				'#d35400',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#a2ded0',
				'#01ae92',
				'#6c7a89',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#545454';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 215;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1.entry-title, .mod-alpha h2, .mod-gamma-1 h2, .mod-divider a'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.3,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['page-template-default h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.9,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.background-primary h3'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = '2x';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Primary Menu';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Fixed Side Menu';
	$boldgrid_framework_configs['menu']['prototype']['social']['menu_class'] = 'menu-items';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
	<div class="container">
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
	</div>
HTML;

	// Widget 1.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Header';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Header';

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

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );

/**
 * Add Pattern To Pages.
 */
function add_page_pattern() {
	if ( is_page() && ! is_page_template() ) : ?>
		<div class="background-pattern">
			<div class="container"></div>
		</div>
	<?php endif;
}
add_action( 'boldgrid_content_before', 'add_page_pattern' );
