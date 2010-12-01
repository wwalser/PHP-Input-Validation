<?php
/**
 * In range validator
 */

/**
 * In range validator
 */
class Validation_Validator_InRange extends Validation_Validator
{
	/**
	 * Checks if a value is within the specified range
	 * 
	 * @param int $iMin minimum range value
	 * @param int $iMax maximum range value
	 * @return boolean true if value of the element is within the specified range
	 */
	public function validate($iMin = null, $iMax = null) {
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		// fail if the specified value is less than the min range value
		if (isset($iMin) && $iMin > $this->mValue) {
			return false;
		}
		
		// fail if the specified value is greater than the max range value
		if (isset($iMax) && $iMax < $this->mValue) {
			return false;
		}

		return true;
	}
}
