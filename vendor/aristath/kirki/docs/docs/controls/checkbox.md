---
layout: default
title: WordPress Customizer Checkbox Control
slug: checkbox
subtitle: Learn how to create a checkbox control using the Kirki Customizer Framework.
mainMaxWidth: 55rem;
bodyClasses: control page
returns: boolean
heroButtons:
  - url: ../controls
    class: white button round border-only
    icon: fa fa-arrow-circle-o-left
    label: Back to Controls
---

`checkbox` controls provide a simple true/false choice to users.

If a checkbox is not what you're after visually, you can also use a [`switch`](switch) or a [`toggle`](toggle). They are both internally checkboxes, so you use them the exact same way, their only difference is the way they present the options.

### Example

```php
Kirki::add_field( 'theme_config_id', [
	'type'        => 'checkbox',
	'settings'    => 'checkbox_setting',
	'label'       => esc_html__( 'Checkbox Control', 'kirki' ),
	'description' => esc_html__( 'Description', 'kirki' ),
	'section'     => 'section_id',
	'default'     => true,
] );
```

### Usage

```php
<?php if ( true == get_theme_mod( 'checkbox_setting', true ) ) : ?>
	<p>Checkbox is checked</p>
<?php else : ?>
	<p>Checkbox is unchecked</p>
<?php endif; ?>
```

Adding a class to a `<div>` if the checkbox is checked:

```php
<?php $value = get_theme_mod( 'checkbox_setting', true ); ?>
<div class="<?php echo ( $value ) ? 'checkbox-on' : 'checkbox-off'; ?>">
	If the checkbox is checked, the class will have a class "checkbox-on".
	If the checkbox is unchecked, the class will have a class "checkbox-off".
</div>
```
