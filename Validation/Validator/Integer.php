<?php
/**
 * Integer validator
 */

/**
 * Integer validator
 */
class Validation_Validator_Integer extends Validation_Validator {
	
	/**
	 * Checks if a value is an integer
	 * 
	 * @return boolean true if an integer
	 */
	public function validate() {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$bValid = $bValid && (boolean)preg_match('/^-?\d+$/', (string)$this->mValue);
		
		return $bValid;
	}
}
