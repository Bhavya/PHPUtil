<?php
/*These functions make life easier. Please do not change.*/
class util{
	// ASSORTED
	//**************************************************
	/*convert2MB
		Converts Bits to MegaBytes.
	*/
	public function convert2MB($valueInBits){
		$value = $valueInBits / 1048576;
		return $value;
	}
	
	
	//FILE IO
	//**************************************************
	/*fileRead
		Returns an array of all the lines in a file.
		Delimits by the newline character
	*/
	public function fileRead($path){
		$file_handle = fopen($path, "rb");
		$body = "";
		while(!feof($file_handle)){
			$body .= fgets($file_handle);
		}
		fclose($file_handle);		
		$lines = explode("\n", $body);
		return $lines;
	}
	
	public function fileWrite(){
	
	}
	
	// REGEX AND HIGHER ORDER FUNCTIONS
	//**************************************************
	/*regCount
		Returns the number of instances of a specific regex in an array.
	*/
	public function regCount($inputArray, $regex){
		$i = 0;
		foreach($inputArray as $line){
			if(preg_match($regex,$line)){
				$i++;
			}
		}
		return $i;
	}
	
	public function map(){
	}
	
	public function reduce(){
	}
	
	public function filter(){
	}
	
	public function fold(){
	
	}
	
	
	//DEALING WITH SPECIAL CHARACTERS
	//**************************************************	
	/*s_enc
		Returns a string containing the ordinal values of each 
		character in the original string.
		Characters are separated by a period.
	*/
	public function s_enc($s)
	{
		for( $i = 0; $i < strlen($s); $i++ ){
			$r[] = ord($s[$i]);
		}
		return implode('.', $r);
	}
	
	/*s_dec
		Takes the encrypted created by s_enc string and returns 
		the original string.
	*/	
	public function s_dec($s)
	{
		$s = explode(".", $s);
		for( $i = 0; $i < count($s); $i++ ){
			$s[$i] = chr($s[$i]);
		}
		return implode('', $s);
	}
}
?>