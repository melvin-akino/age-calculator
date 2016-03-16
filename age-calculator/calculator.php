<?php
class Common {
	public function calculate_age($bdate, $saildate)
	{
		$bdate = new DateTime($bdate);  
	    $saildate = new DateTime($saildate);

	    if ($bdate >= $saildate) {
	    	return false;
	    }

	    $diff = $saildate->diff($bdate);

	    if ($diff->y)
	    {
	        return 'Age: ' . $diff->y . ' years, ' . $diff->m . ' months, ' . $diff->d . ' days';
	    }
	    elseif ($diff->m)
	    {
	        return 'Age: ' . $diff->m . ' months, ' . $diff->d . ' days';
	    }
	    else
	    {
	        return 'Age: ' . $diff->d . ' days';
	    }
	}
}
	$Common  = new Common();
	//echo print_r($_POST, true);
	$result = $Common->calculate_age($_POST['birthdate'], $_POST['saildate']);

	echo json_encode(array('result' => $result));

?>