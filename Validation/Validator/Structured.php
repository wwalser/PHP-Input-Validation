<?php
/**
 * Structured validator
 */

/**
 * Structured validator
 */
class Validation_Validator_Structured extends Validation_Validator
{
	
	/**
	 * Returns true if the value has the specified structure; otherwise, false.
	 *
	 * @param array $aStructure The structure to compare against the value.
	 * @return boolean
	 */
	public function validate($aExpectedStructure)
	{
		$aActualStructure = $this->aParams[$this->sElementName];
		
		if (!is_array($aActualStructure)) {
			return false;
		}
		
		return true;
	}
}
