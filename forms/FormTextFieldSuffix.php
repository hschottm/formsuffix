<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/formsuffix>
 * @package    formsuffix
 * @license    LGPL
 */

namespace Contao;

/**
 * Class FormTextFieldSuffix
 *
 * Form field "text".
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/formsuffix>
 * @package    Controller
 */
class FormTextFieldSuffix extends FormTextField
{
	/**
	 * Initialize the object
	 *
	 * @param array $arrAttributes An optional attributes array
	 */
	public function __construct($arrAttributes=null)
	{
		$this->strTemplate = 'form_textfield_suffix';
		parent::__construct($arrAttributes);
	}
	
	public function hasSuffix()
	{
		return (strlen($this->suffix) > 0);
	}
}

?>