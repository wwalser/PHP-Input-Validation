<?php
/**
 * Same validator
 */

/**
 * Same validator
 */
class Validation_Validator_Same extends Validation_Validator {
	
	/**
	 * Checks if a value is equal to all of it's dependancies
	 * 
	 * @param array $aDependancies form elements that must be the same as this field
	 * @return boolean true if all values are the same
	 */
	public function validate($aDependancies = array()) {
		$bValid = true;
		
		foreach ($aDependancies as $sDependancy) {
			$bValid = $bValid && $this->aParams[$sDependancy] === $this->mValue;
		}
		
		return $bValid;
	}
}