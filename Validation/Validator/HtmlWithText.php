<?php
/**
 * Validation for non-empty html (e.g., html that includes text as well as tags)
 */

/**
 * Validation for non-empty html (e.g., html that includes text as well as tags)
 */
class Validation_Validator_HtmlWithText extends Validation_Validator {

	/**
	 * Validate that the provided string includes some text that's not just html tags
	 * 
	 * @return boolean true if the string includes actual text
	 */
	public function validate()
	{
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$sValue = trim(str_replace('&nbsp;', '', strip_tags($this->mValue)));
		$bValid = $bValid && strlen($sValue);
		
		return $bValid;
	}
}
?>