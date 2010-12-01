<?php
/**
 * Determines if a value exists in the input data for the request
 */

/**
 * Determines if a value exists in the input data for the request
 */
abstract class Validation_Validator_HasValue
{
	/**
	 * Loads a HasValue class based on the request type
	 *
	 * @param string $sRequestType
	 * @return Validation_Validator_HasValue
	 */
	public static function load($sRequestType)
	{
		$sClassName = 'Validation_Validator_HasValue_' . $sRequestType;
		return new $sClassName();
	}
	
	/**
	 * Determines if an input element has a value
	 *
	 * @param array $aParams input values
	 * @param string $sElementName name of element to check for a value
	 * @return boolean
	 */
	abstract public function hasValue($aParams, $sElementName);
}

?>
