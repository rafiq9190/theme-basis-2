<?php
new \Kirki\Panel(
	'header_settings',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header Settings', 'kirki' ),
		'description' => esc_html__( 'Customize your header settings.', 'kirki' ),
	]
);

new \Kirki\Section(
	'header_layout_setting',
	[
		'title'       => esc_html__( 'Header Layout', 'kirki' ),
		'description' => esc_html__( 'Customize your header layout.', 'kirki' ),
		'panel'       => 'header_settings',
		'priority'    => 160,
	]
);

new \Kirki\Section(
	'typography_settings',
    [
        'title'       => esc_html__( 'Typography Settings', 'kirki' ),
        'description' => esc_html__( 'Customize your typography settings.', 'kirki' ),
        'panel'       => '',
        'priority'    => 160,
    ]

);

new \Kirki\Section(
	'menu_settings',
	[
		'title'       => esc_html__( 'Menu Settings', 'kirki' ),
		'description' => esc_html__( 'Customize your menu settings.', 'kirki' ),
		'panel'       => 'header_settings',
		'priority'    => 160,
	]
);


new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'header_layout_setting',
		'default'     => [
			'background-color'      => 'rgba(255,255,255,1)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#header',
			],
		],
	]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'menu_background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'menu_settings',
		'default'     => [
			'background-color'      => 'rgba(255,255,255,1)',
			
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#nav',
			],
		],
	]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'menu_active_background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'menu_settings',
		'default'     => [
			'background-color'      => '#d52349',
		
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => ' #nav>ul>li:hover>a , #nav>ul>li.current-menu-item>a ',
			],
		],
	]
);


new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting',
		'label'       => esc_html__( 'Typography Control', 'kirki' ),
		'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'typography_settings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#333333',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'choices' => [
	'fonts' => [
		'google' => [ 'popularity', 30 ],
	],
],
		'output'      => [
			[
				'element' => 'h2',
			],
		],
	]
);