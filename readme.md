# Legato Asset

A simple tool for generating 
unique versioned URLs for images, stylesheet, javascript, etc.

## Installation 

composer require legato/asset

## Usage 

```php

Relative Path
<link href="<?= asset('css/style.css') ?>" rel="stylesheet">

Absolute Path
<link href="<?= asset('/css/style.css') ?>" rel="stylesheet">

```

### Relative Path Output

 `css/style.css?7ddf32e17a6ac5ce04a8ecbf782ca509`
 
`<link href="css/style.css?7ddf32e17a6ac5ce04a8ecbf782ca509" rel="stylesheet">`

### Absolute Path Output
 `/css/style.css?7ddf32e17a6ac5ce04a8ecbf782ca509`
 
`<link href="/css/style.css?7ddf32e17a6ac5ce04a8ecbf782ca509" rel="stylesheet">`

## Specifying A query String 

```php

<link href="<?= asset('css/style.css', 'v1') ?>" rel="stylesheet">

```
 `css/style.css?v1=7ddf32e17a6ac5ce04a8ecbf782ca509`
 
`<link href="css/style.css?v1=7ddf32e17a6ac5ce04a8ecbf782ca509" rel="stylesheet">`
