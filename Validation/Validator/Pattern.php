<?php
/**
 * Regex validator
 */

/**
 * Regex validator
 */
class Validation_Validator_Pattern extends Validation_Validator
{
	/**
	 * Check if a value matches a regular expression
	 *
	 * @param string $sPattern the pattern to match against
	 * @return boolean true if pattern is matched
	 */
	public function validate($sPattern)
	{
		if (!is_string($sPattern) || !is_string($this->mValue)) {
			return false;
		}
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}
		
		$mMatchResult = preg_match($sPattern, $this->mValue);
		if ($mMatchResult === 0 || $mMatchResult === false) {
			return false;
		}
		
		return true;
	}
}

?>
