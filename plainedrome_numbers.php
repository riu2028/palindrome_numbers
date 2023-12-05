 <?php  
    function palindrome($n){  
    $number = $n;  
    $sum = 0;  
    while(floor($number)) {  
    $rem = $number % 10;  
    $sum = $sum * 10 + $rem;  
    $number = $number/10;  
    }  
    return $sum;  
    }  
    $input = 1235361;  
    $num = palindrome($input);  
    if($input==$num){  
    echo "$input is a Palindrome number";  
    } else {  
    echo "$input is not a Palindrome";  
    }  
    ?>  
	
	
	
	

// PHP code to check for Palindrome number in PHP
// Function to check for Palindrome
/*function Palindrome($number){ 
	$temp = $number; 
	$new = 0; 
	while (floor($temp)) { 
		$d = $temp % 10; 
		$new = $new * 10 + $d; 
		$temp = $temp/10; 
	} 
	if ($new == $number){ 
		return 1; 
	}
	else{
		return 0;
	}
} 

// Driver Code
$original = 1441; 
if (Palindrome($original)){ 
	echo "Palindrome"; 
} 
else { 
echo "Not a Palindrome"; 
}

?>*/ 