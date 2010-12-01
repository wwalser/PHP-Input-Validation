<?php
/**
 * Email validator
 */

/**
 * Email validator
 */
class Validation_Validator_Email extends Validation_Validator {
	
	/**
	 * Checks if a value is a properly formatted email address
	 * 
	 * @todo add internalization
	 * @return boolean true if the value is a properly formatted email address
	 */
	public function validate() {
		$bValid = true;
		
		// don't validate if we don't have a value
		if (!$this->hasValue()) {
			return true;
		}

		/*
		$qtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]' ;
		$dtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]' ;
		$atom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c .\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+' ;
		$quoted_pair = '\\x5c\\x00-\\x7f' ;
		$domain_literal = "\\x5b($dtext|$quoted_pair)*\\x5d";
		$quoted_string = "\\x22($qtext|$quoted_pair)*\\x22";
		$domain_ref = $atom;
		$sub_domain = "($domain_ref|$domain_literal)";
		$word = "($atom|$quoted_string)";
		$domain = "$sub_domain(\\x2e$sub_domain)+";
		$local_part = "$word(\\x2e$word)*";
		$addr_spec = "$local_part\\x40$domain";
		
		//echo "!^$addr_spec$!"; // to build the regex below		 
		 */

		$bValid = preg_match('!^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c .\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c\x00-\x7f)*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c .\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c\x00-\x7f)*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c .\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c\x00-\x7f)*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c .\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c\x00-\x7f)*\x5d))+$!', $sEmail) ? true : false;
		return $bValid;
	}
}

?>
