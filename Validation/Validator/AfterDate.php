<?php
/**
 * AfterDate validator
 */

/**
 * AfterDate validator
 */
class Validation_Validator_AfterDate extends Validation_Validator {
	
	/**
	 * Checks if a value is after a certain date and time
	 * 
	 * @return boolean true if value is after specified date and time
	 */
	public function validate($tTimeStamp) {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$tTime = strtotime($this->mValue);
		if ($tTime) {
			$bValid = $bValid && ($tTime > $tTimeStamp);
		} else {
			$bValid = false;
		}
		
		return $bValid;
	}
}
