<?php
/**
 * Determines if a value exists in the input data for an api request
 */

/**
 * Determines if a value exists in the input data for an api request
 */
class Validation_Validator_HasValue_Api extends Validation_Validator_HasValue
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
		return array_key_exists($sElementName, $aParams);
	}
}

?>
