<?php
/**
 * Date validator
 */

/**
 * Date validator
 */
class Validation_Validator_IsoDateTime extends Validation_Validator {
	
	/**
	 * Checks if a value is a date
	 * 
	 * @return boolean true if a date
	 */
	public function validate() {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$tTime = strtotime($this->mValue);
		$sFormattedTime = date('c', $tTime);
		$bValid = $bValid && ($sFormattedTime === $this->mValue);
		
		return $bValid;
	}
}
