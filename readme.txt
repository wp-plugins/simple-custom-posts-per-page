===  Simple Custom Posts per Page ===
Contributors: Jabawack
Donate link: http://www.adostudio.it
Tags: custom posts, posts per page, pagination,pages, post type 
Requires at least: 2.7
Tested up to: 3.1
Stable tag: 1.0

This plugin allows to configure how many posts display for every custom post registred.

== Description ==

Simple Custom Posts per Page (SCPP) allows to set how many posts display for every custom post registrated in Wordpress.

See [Screenshots](http://screenshoturl) why it is called "Simple".

In your *Readme* page in *Setting* tab of Wordpress, it adds a more option for every post type, 

**Disable Plugin in Template**
You can disable plugin filters in your template when you want. Meaby you need a query with a different number of custom posts per page for a specific post type.
Using this code before your query, the filter plugin will be disabled for a specific post type:

`<?php $GLOBALS['ado_cspp_disable']="YOUR_TYPE"; ?>`

With this code, you can use your personalized query for your loop.

== Installation ==

Like the most common plugins, installation is very simple.

e.g.

1. Upload `ado-scpp` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Set a number of posts per page in *Readme* page in Wordpress pannel.

== Frequently Asked Questions ==

= Can i disable plugin in my theme? =

Yes. If you need a different number of posts per page, you can disable plugin for a specific post type.
Use this code before your custom query for your loop:
`<?php $GLOBALS['ado_cspp_disable']="YOUR_TYPE"; ?>`

= What lenguages are supported? =

At moment English and Italian. If you want translate plugin in a different language, contact me at info[A_T]adostudio.it

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 1.0 =
* First Version. Cheer!