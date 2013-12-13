<?php

/* ====================================================================
	FILE INFO:
	
	This file enables the developer to define one or more options that 
	will be automatically integrated into the WordPress backend. Use 
	the register_dashboard_fragment() function to define new options.
	
	USAGE:
	
	Call the following function to integrate a new option:
		register_dashboard_fragment
		(
			$page, 
			$option_title, 
			$option_tip, 
			$field_name, 
			$field_type, 
			$default_value, 
			$data1, 
			$data2, 
			$data3
		)
		
	Attribute description:
		-$page: name of the tabbed page this option should belong to, 
		 alphanumeric
		-$option_title: the option's name, shown as the field label
		-$option_tip: a short description of the option
		-$field_name: a unique name for the option field/id, 
		 recommended: $option_title converted to lowercase with 
		 spaces converted to underscores
		-$field_type: text, textarea, radio, checkbox, select, button
		-$default_value: a default value for the option, used on first 
		 init
		-$data1: optional field data (button caption, etc)
		-$data2: optional field data
		-$data3: optional field data
		
	Notes:
		-$field_name is tied to the option key in the database so when 
		 this attribute changes it will force the creation of a new 
		 option and the old one will be orphaned
*/

/* ====================================================================
	THEME OPTIONS:
	
	These options allow the site admin to fine tune site/theme settings
	specific to the Rapid Responsive Theme.
*/

$this->register_dashboard_fragment(
	"Customization",
	"System Fonts",
	"These System Fonts will become a font style choice in the theme Customization panel.<br/><br/>Instructions: System Fonts are traditional fonts that are already installed on most people's computers. System Fonts are delimited with <strong>|</strong>. Use the existing values (above) as a reference for how the string should be formatted.",
	"system_fonts",
	"textarea",
	"Arial|Book Antiqua|Comic Sans MS|Courier New|Georgia|Monotype Corsiva|Tahoma|Times New Romain|Verdana"
);

$this->register_dashboard_fragment(
	"Customization",
	"Google Web Fonts",
	"These Google Web Fonts will become a font style choice in the theme Customization panel, as well as being available to your entire site for design purposes.<br/><br/>Instructions: When you choose one or more fonts at Google Web Fonts and then click Use, they give you three options for using the fonts on a website. The one we care about is @import. With their @import string in front of you, copy ONLY the font portion of the string and paste it here. If your fonts aren't showing up, make sure the string formatting symbols <strong>+ | : ,</strong> are intact and in their proper locations. Use the existing string (above) as a reference for how the string should be formatted.",
	"google_fonts",
	"textarea",
	"Lustria|Kristi|Niconne|Caesar+Dressing|PT+Sans+Narrow:400,700|Quicksand:300,400,700|Swanky+and+Moo+Moo|Allura|Limelight|Just+Me+Again+Down+Here|Coda:400,800|Alegreya+SC:400,400italic,700,700italic,900,900italic|Yanone+Kaffeesatz:400,200,300,700|Audiowide|Cuprum|Oswald:400,700,300|Source+Sans+Pro|Marcellus+SC|Anaheim|Oranienbaum|Carrois+Gothic|Gentium+Basic|Playfair+Display+SC|Oswald|Pontano+Sans"
);

$this->register_dashboard_fragment(
	"Other",
	"Google Custom Search Engine (CSE) ID",
	"Enter the ID of your Google CSE here and any instance of &lt;gsce:search&gt;&lt;/gcse:search&gt; within a Post or Page will be dynamically replaced with your custom search engine using Google's Ajax implementation via Javascript. You can <a href='http://www.google.com/cse/manage/all'>create your own CSE</a> or read the <a href='https://developers.google.com/custom-search/docs/element'>full documentation</a> at Google's website.",
	"google_custom_search_engine",
	"text",
	""
);

/* ====================================================================
	OPTIONS FOR TEST PURPOSES:
	
	These options are for showcasing the possibilities of the Options
	Framework. Feel free to DELETE these.
*/

$this->register_dashboard_fragment(
	"Showcase",
	"Checkbox Example",
	"Showcasing a 'checkbox' form field + option from the rapid-config.php file.",
	"checkbox_example",
	"checkbox",
	"true"
);

$this->register_dashboard_fragment(
	"Showcase",
	"Radio Example",
	"Showcasing a 'radio' form field + option from the rapid-config.php file.",
	"radio_example",
	"radio",
	"peach",
	"apple,orange,peach,banana"
);

$this->register_dashboard_fragment(
	"Showcase",
	"Select Example",
	"Showcasing a 'select' form field + option from the rapid-config.php file.",
	"select_example",
	"select",
	"peach",
	"apple,orange,peach,banana"
);

$this->register_dashboard_fragment(
	"Showcase",
	"Text Example",
	"Showcasing a 'text' form field + option from the rapid-config.php file.",
	"text_example",
	"text",
	"Custom text goes here..."
);

$this->register_dashboard_fragment(
	"Showcase",
	"Textarea Example",
	"Showcasing a 'textarea' form field + option from the rapid-config.php file.",
	"textarea_example",
	"textarea",
	"Custom multi-line text goes here..."
);

$this->register_dashboard_fragment(
	"Showcase",
	"Button Example",
	"Showcasing a 'button' form field + option from the rapid-config.php file.",
	"button_example",
	"button",
	"",
	"Execute a Javascript function!",
	"alert('Welcome traveler!')"
);

/* ====================================================================
	DEPRECATED OPTIONS:
	
	TODO:
	
	Re-implement these when their sub-components have been developed.
*/

/*
register_dashboard_fragment(
	"Getting Started",
	"Gallery",
	"To create the main Gallery Page, add a new Page and set the Template to Gallery. To create a single Gallery for the Gallery Page, add a new Post and set the category to Gallery then attach some images to this Post using the Media Uploader or Media Library. This new single Gallery will automatically appear on the main Gallery Page! To change the Gallery image sizes, please visit the [Settings > Media] page.",
	"gallery",
	"select",
	""
);

register_dashboard_fragment(
	"Getting Started",
	"Featured Slider",
	"The Featured Slider normally appears below the site header. You may use any Gallery as the Featured Slider. To create a Gallery, create a new Post and set its Category to Gallery. Any images you upload or attach to this new Post will become part of that Gallery. After creating a new Gallery, return here to set it as the Featured Slider.",
	"featured_slider",
	"select",
	""
);

register_dashboard_fragment(
	"Appearance",
	"Footer Content",
	"Configure the footer content here. You may use plain text or HTML.",
	"footer_content",
	"textarea",
	"Copyright..."
);
*/

?>