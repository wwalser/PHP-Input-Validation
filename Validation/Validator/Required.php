<?php
/**
 * Required validator
 */

/**
 * Required validator
 */
class Validation_Validator_Required extends Validation_Validator {
	
	/**
	 * Checks if a value exists
	 * 
	 * @param array $aDependancies form elements that must have values in order
	 * for $sElementName to be required; e.g., only require field X if field Y
	 * is filled in
	 * @return boolean true if the value exists
	 * @todo Modify to handle file inputs.
	 */
	public function validate($aDependancies = array()) {
		$bValid = true;
		
		// check dependancies
		$bDependanciesMet = true;
		if ($bDependanciesMet && $this->isArrayAssociative($aDependancies)) {
			// if we expect a set value, check that...
			foreach ($aDependancies as $sDependancy => $sValue) {
				$bDependanciesMet = $bDependanciesMet && $this->hasValue($sDependancy);
				if (!empty($sValue) && $bDependanciesMet) {
					$bDependanciesMet = $bDependanciesMet && $this->aParams[$sDependancy] == $sValue;
				}
			}
		} else {
			// ...otherwise, we're happy if the field is set
			foreach ($aDependancies as $sDependancy) {
				$bDependanciesMet = $bDependanciesMet && $this->hasValue($sDependancy);
			}
		}
				
		// only check if we have a value if all dependancies were met
		if ($bDependanciesMet) {
			$bValid = $bValid && $this->hasValue() && $this->mValue !== '';
		}
		
		return $bValid;
	}
	
	///////////////////////////////////////////
	///////  PROTECTED
	///////////////////////////////////////////
	/**
	 * Detects whether an array is associatively or numerically indexed
	 * @param array $aData
	 * @return boolean
	 */
	protected function isArrayAssociative($aData)
	{
		$aArrayValues = array_values($aData);
		$bAssociative = $aArrayValues !== $aData;
		
		return $bAssociative;
	}
}
?>