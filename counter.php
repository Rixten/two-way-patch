<!-- this is a php file -->

 <?php
 // Check if the form is submitted
 if ( isset( $_GET['submit'] ) ) {

 // Retrieve the form data by using the element's name attributes value as key
 $emotion = $_GET['emotion'];

 // Array: angry0, awed1, curious2, excited3, sceptical4, scared5
$labels = array("angry", "awed", "curious", "excited", "sceptical", "scared");
$date = date('m/d/Y');  /* get current date */


$fp = fopen("data.txt", "a"); /* open data file, append */
$savestring = $labels[$emotion].", ".$date."n"; /* append data file */
fwrite($fp,$savestring);
fclose($fp);

}

  ?>
