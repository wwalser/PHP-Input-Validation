<?php
/**
 * Username validator
 */

/**
 * Username validator
 */
class Validation_Validator_Username extends Validation_Validator {
	
	/**
	 * Checks if a value is using valid username syntax
	 * 
	 * @return boolean true if value is using valid username syntax
	 */
	public function validate() {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$sLoweredUsername = strtolower($this->mValue);
		
		// Invalid characters in username.
		if (preg_match("/[^a-z0-9_\.@\-]/", $sLoweredUsername)) {
			$bValid = false;
		} 
		// Username must contain one alphabetic character.
		else if (!(preg_match("/[a-z]/", $sLoweredUsername))) {
			$bValid = $bValid && false;
		} 
		// Username must be at least four characters long.
		else if (strlen($sLoweredUsername) < 4) {
			$bValid = $bValid && false;
		} 
		// Username must be less than fifty characters.
		else if (strlen($sLoweredUsername) > 50) {
			$bValid = $bValid && false;
		} 

		return $bValid;
	}
}
