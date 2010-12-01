<?php
/**
 * Binary validator
 */

/**
 * Binary validator
 */
class Validation_Validator_Binary extends Validation_Validator
{
	/**
	 * Set value.
	 *
	 * @param array $aParams form values
	 * @param string $sElementName name of form element to validate
	 */
	public function setValue($aParams, $sElementName)
	{
		$this->mValue = isset($aParams[$sElementName]) ? $aParams[$sElementName] : null;
	}

	/**
	 * Checks if a value is 0 or 1
	 * 
	 * @return boolean true if binary
	 */
	public function validate()
	{
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}

		// Explicitly disallow true and false
		$bValid = $bValid && $this->mValue !== true && $this->mValue !== false;
		
		// typecast to a string so we can do an === comparison
		// can't use == because 0 == 'foo'
		// can't typecast as an int because 1 === (int)'1foo'
		$sValue = (string)$this->mValue;
		$bValid = $bValid && ($sValue === '0' || $sValue === '1');
		
		return $bValid;
	}
}
