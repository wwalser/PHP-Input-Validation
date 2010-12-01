<?php
/**
 * Minimum string length validator
 */

/**
 * Minimum string length validator
 */
class Validation_Validator_MinLength extends Validation_Validator {
	
	/**
	 * Checks if a value has met its minimum length requirement
	 * 
	 * @param int $iMinLength minimum length for string
	 * @return boolean true if length of element is greater than or equal to the minimum length
	 */
	public function validate($iMinLength) {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$iValueLength = strlen($this->mValue);
		$bValid = $bValid && ($iValueLength >= $iMinLength);
		
		return $bValid;
	}
}
