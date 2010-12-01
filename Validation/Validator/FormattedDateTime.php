<?php
/**
 * Formatted Date validator
 */

/**
 * Formatted Date validator
 */
class Validation_Validator_FormattedDateTime extends Validation_Validator {

	/**
	 * Checks if a value is a date with the specified format
	 * 
	 * @return boolean true if a date that matches the given format.
	 */
	public function validate($sFormat) {
		$bValid = true;

		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}

		$tTime = strtotime($this->mValue);
		$sFormattedTime = date($sFormat, $tTime);
		$bValid = $bValid && ($sFormattedTime === $this->mValue);

		return $bValid;
	}
}
?>