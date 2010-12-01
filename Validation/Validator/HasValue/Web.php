<?php
/**
 * Determines if a value exists in the input data for a web request
 */

/**
 * Determines if a value exists in the input data for a web request
 */
class Validation_Validator_HasValue_Web extends Validation_Validator_HasValue
{
	/**
	 * Determines if an input element has a value
	 *
	 * @param array $aParams input values
	 * @param string $sElementName name of element to check for a value
	 * @return boolean
	 */
	public function hasValue($aParams, $sElementName)
	{
		$bHasValue = isset($aParams[$sElementName]);
		if ($bHasValue && is_string($aParams[$sElementName])) {
			$bHasValue = trim($aParams[$sElementName]) !== '';
		}
		
		return $bHasValue;
	}
}

?>
