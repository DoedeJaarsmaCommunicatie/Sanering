---
layout: default
title: option_name
published: true
mainMaxWidth: 55rem;
---

You don't have to manually set the `option_name` argument as it is automatically set for you from the config you're using.

However, if needed, you can override it on a per-field basis.

Example:

```php
// Use serialized options under "my_option".
// Settings will be accessed from "my_option['my_setting']".
Kirki::add_config( 'my_config', [
	'option_type' => 'option',
	'option_name' => 'my_option'
];

// Add a simple text-field.
// This will inherit the option_name from our config.
Kirki::add_field( 'my_config', [
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'my_section',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );

// Another text-field.
// This will override the option_name of the config.
// As a result, it will be written to a separate serialized option in the db.
Kirki::add_field( 'my_config', [
	'type'        => 'text',
	'settings'    => 'my_setting',
	'label'       => esc_html__( 'Text Control', 'kirki' ),
	'section'     => 'my_section',
	'default'     => esc_html__( 'This is a default value', 'kirki' ),
	'priority'    => 10,
	'option_name' => 'my_option_2'
] );
```
