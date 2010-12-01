<?php
/**
 * InArray validator
 */

/**
 * InArray validator
 */
class Validation_Validator_InArray extends Validation_Validator {
	
	/**
	 * Checks if a the given value is in the provided array of allowed values
	 * 
	 * @param array $aValues possible values for the validated value
	 * @return boolean true if the form field value is found in the provided values array
	 */
	public function validate($aAllowedValues) {
		$bValid = true;
		
		if (!in_array($this->mValue, $aAllowedValues)) {
			$bValid = false;
		}
		
		return $bValid;
	}
}