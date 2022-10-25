<?php
// Add options pages
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
	acf_set_options_page_menu('Site Options');
}

// Add fields
foreach(glob(get_template_directory() . '/assets/acf/fields/*.php') as $file) {
  require $file;
}