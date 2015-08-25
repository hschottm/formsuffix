<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Forms
	'Contao\FormTextFieldSuffix' => 'system/modules/formsuffix/forms/FormTextFieldSuffix.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'form_textfield_suffix' => 'system/modules/formsuffix/templates',
));
