### SVG Placeholder plugin for Craft CMS

A plugin which generates an invisible SVG of specific dimensions for use when lazyloading images in [Craft CMS](http://buildwithcraft.com) templates.

**Installation**

1. Unzip file 
2. Place `svg-placeholder` directory into your `craft/plugins` directory
3. Install plugin in the Craft Control Panel under Settings > Plugins

###Usage

{{ craft.svg_placholder.generate({height:500,width:'300'}) }}

##Example (used with [Lazysizes](https://github.com/aFarkas/lazysizes))

`<img class="lazyload" src="{{ craft.svg_placholder.generate({height:500,width:'300'}) }}" data-src="path-to-real-image-500x300.jpg" />`
