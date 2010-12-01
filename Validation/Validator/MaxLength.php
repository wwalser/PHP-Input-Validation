<?php
/**
 * Maximum string length validator
 */

/**
 * Maximum string length validator
 */
class Validation_Validator_MaxLength extends Validation_Validator {
	
	/**
	 * Checks if a value has exceeded its maximum length requirement
	 * 
	 * @param int $iMaxLength maximum length for string
	 * @return boolean true if length of element is less than or equal to the maximum length
	 */
	public function validate($iMaxLength) {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$iValueLength = strlen($this->mValue);
		$bValid = $bValid && ($iValueLength <= $iMaxLength);
		
		return $bValid;
	}
}