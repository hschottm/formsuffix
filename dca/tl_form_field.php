<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/formsuffix>
 * @package    formsuffix
 * @license    LGPL
 */

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['text'] = str_replace('maxlength', 'maxlength,suffix', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text']);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['suffix'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['suffix'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>50, 'tl_class'=>'w50'),
	'sql'                     => "varchar(50) NOT NULL default ''"
);


?>