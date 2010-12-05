<?php
/**
 * Validation for user inputs
 */

/**
 * Validation for user inputs
 */
class Validation
{
	/**
	 * Request being validated
	 *
	 * @var Request
	 */
	protected $oRequest;
	
	/**
	 * Constructor
	 *
	 * @param Request $oRequest
	 */
	public function __construct($oRequest = null)
	{
		$this->oRequest = $oRequest;
	}
	
	public function __call($sMethod, $aParams)
	{
		$sMessage = array_shift($aParams);
		
		return array(
			'method'  => $sMethod,
			'message' => $sMessage,
			'params'  => $aParams,
		);
	}
	
	/**
	 * Gets the validator for a validation method
	 *
	 * @param string $sMethod
	 * @param array $aParams
	 * @param string $sElementName
	 * @return Validation_Validator
	 */
	public function getValidator($sMethod, $aParams, $sElementName)
	{
		$sClass = 'Validation_Validator_' . ucfirst($sMethod);
		$oValidator = new $sClass($aParams, $sElementName);
		/* @var $oValidator Validation_Validator */
		$oValidator->setRequest($this->oRequest);
		
		return $oValidator;
	}
	
	/**
	 * Runs all validations according to the provided configuration
	 * 
	 * @param array $aValidationConfig
	 * @param array $aParams form values
	 * @return array error messages
	 */
	public function validate($aValidationConfig, $aParams)
	{
		$aErrors = array();
		
		$sGlobalMessage = 'Please review the following message(s) and try again';
		if (!empty($aValidationConfig['globalMessage'])) {
			$sGlobalMessage = $aValidationConfig['globalMessage'];
			unset($aValidationConfig['globalMessage']);
		}
		
		$aDetails = array();
		foreach ($aValidationConfig as $sElementName => $aValidations) {
			foreach ($aValidations as $aValidation) {
				$oValidator = $this->getValidator($aValidation['method'],
					$aParams, $sElementName);
				
				$bValid = call_user_func_array(array($oValidator, 'validate'),
					$aValidation['params']);
				if (!$bValid) {
					$aDetails[] = $aValidation['message'];
				}
			}
		}
		
		if (!empty($aDetails)) {
			$aErrors['global'] = $sGlobalMessage;
			$aErrors['details'] = $aDetails;
		}
		
		return $aErrors;
	}
}	
?>