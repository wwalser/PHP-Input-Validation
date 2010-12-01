<?php
/**
 * Numeric validator
 */

/**
 * Numeric validator
 */
class Validation_Validator_Numeric extends Validation_Validator {
	
	/**
	 * Checks if a value is numeric
	 * 
	 * @return boolean true if numeric
	 */
	public function validate() {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$bValid = $bValid && is_numeric($this->mValue);
		
		return $bValid;
	}
}
