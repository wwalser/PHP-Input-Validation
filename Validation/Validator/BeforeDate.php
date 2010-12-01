<?php
/**
 * BeforeDate validator
 */

/**
 * BeforeDate validator
 */
class Validation_Validator_BeforeDate extends Validation_Validator {
	
	/**
	 * Checks if a value before a certain date and time
	 * 
	 * @return boolean true if value is before specified date and time
	 */
	public function validate($tTimeStamp) {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$tTime = strtotime($this->mValue);
		if ($tTime) {
			$bValid = $bValid && ($tTime < $tTimeStamp);
		} else {
			$bValid = false;
		}
		
		return $bValid;
	}
}
