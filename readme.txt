===  Simple Custom Posts per Page ===
Contributors: Jabawack
Donate link: http://www.adostudio.it
Tags: custom posts, posts per page, pagination,pages, post type 
Requires at least: 2.7
Tested up to: 3.1
Stable tag: 1.0

This plugin allows to configure the number of posts displayed for every custom post registered.

== Description ==

Simple Custom Posts per Page (SCPP) allows to configure the number of posts displayed for every custom post registered in Wordpress.

See [Screenshots](http://wordpress.org/extend/plugins/simple-custom-posts-per-page/screenshots/) to known why it is called "Simple".

In your *Readme* page in *Setting* tab of Wordpress, it adds an option for every post type. 

**Disable Plugin in Template**:
You can disable plugin filters in your template whenever you want. Maybe you need a query with a different number of custom posts per page for a specific post type.
Using this code before your query, the filter plugin will be disabled for a specific post type:

`<?php $GLOBALS['ado_cspp_disable']="YOUR_TYPE"; ?>`

With this code, you can use your personalized query for your loop.

**More**:
You can find more informations in the official [Post](http://www.adostudio.it/blog/simple-custom-posts-per-page-397/) on my Blog.

== Installation ==

Like the most common plugins, installation is very simple.

e.g.

1. Upload folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Set a number of posts per page in *Reading* Setting in Wordpress pannel.

== Frequently Asked Questions ==

= Can i disable this plugin in my theme? =

Yes. If you need a different number of posts per page, you can disable plugin for a specific post type.
Use this code before your custom query for your loop:
`<?php $GLOBALS['ado_cspp_disable']="YOUR_TYPE"; ?>`

= What languages are supported? =

At the moment English and Italian. If you want translate this plugin in a different language, contact me at info[A_T]adostudio.it

== Screenshots ==

1. Options added in Reading Setting of Wordpress

== Changelog ==

= 1.0 =
* First Version. Cheers!