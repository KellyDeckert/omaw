<?php
// Add fields
foreach(glob(get_template_directory() . '/assets/acf/fields/*.php') as $file) {
  require $file;
}