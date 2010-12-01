<?php
/**
 * Base validator
 */

/**
 * Base validator
 */
class Validation_Validator {
	/**
	 * Input data
	 * 
	 * @var array
	 */
	protected $aParams;
	
	/**
	 * Value to validate
	 * 
	 * @var mixed
	 */
	protected $mValue;
	
	/**
	 * HasValue class
	 *
	 * @var Validation_Validator_HasValue
	 */
	protected $oHasValue;
	
	/**
	 * Request being validated
	 *
	 * @var Request
	 */
	protected $oRequest;
	
	/**
	 * Name of input element to validate
	 * 
	 * @var string
	 */
	protected $sElementName;
	
	/**
	 * Constructor
	 *
	 * @param array $aParams form values
	 * @param string $sElementName name of form element to validate
	 */
	public function __construct($aParams, $sElementName)
	{
		$this->aParams = $aParams;
		$this->sElementName = $sElementName;
		$this->setValue($aParams, $sElementName);
	}
	
	/**
	 * Set value.
	 *
	 * @param array $aParams form values
	 * @param string $sElementName name of form element to validate
	 */
	public function setValue($aParams, $sElementName)
	{
		$this->mValue = isset($aParams[$sElementName]) ? "{$aParams[$sElementName]}" : '';
	}
	
	/**
	 * Sets the request to be validated
	 *
	 * @param Request $oRequest
	 */
	public function setRequest($oRequest)
	{
		if (!empty($oRequest)) {
			$this->oRequest  = $oRequest;
			$this->oHasValue = Validation_Validator_HasValue::load($oRequest->getType());
		}
	}
	
	/**
	 * Determines if a form element has a value
	 * Anything other than null and empty string has a value.
	 *
	 * @param string $sElementName name of element to check for a value
	 * @return boolean
	 */
	protected function hasValue($sElementName = null)
	{
		$sElementName = (isset($sElementName) ? $sElementName : $this->sElementName);
		return $this->oHasValue->hasValue($this->aParams, $sElementName);
	}
}

?>
