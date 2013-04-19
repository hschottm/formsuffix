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
 * Generate the widget and return it as string
 * @return string
 */
	public function generate()
	{
		$widget = parent::generate();
		if (strlen($this->suffix))
		{
			if (strlen($this->addSubmit()))
			{
				$widget = str_replace($this->addSubmit(), '', $widget);
			}
			$widget = $widget . sprintf(' <span class="suffix">%s</span>', $this->suffix);
			$widget .= $this->addSubmit();
		}
		return $widget;
	}
}

?>