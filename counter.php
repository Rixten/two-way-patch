<!-- this is a php file that I'm testing something with -->

 <?php

$list1 = array("angry", "awed", "curious", "excited", "sceptical", "scared");
// angry0, awed1, curious2, excited3, sceptical4, scared5

$list2 = array(0, 0, 0, 0, 0, 0);

$count1 = 0;
$count2 = 0;

$angry = 0;
$awed = 0;
$curious = 0;
$excited = 0;
$sceptical = 0;
$scared = 0;

$emotion = $_POST['emotion']; // define variable emotion & assign data to it

for ( $count1 = 0; $count1 < 6; $count1++ ) { // run through array 1
  if ( $emotion == $list[$count1] ) { // if emotion string matches array element

      for ( $count2 = 0; $count2 < 6; $count2++ ) { // run through array 2

          if ( $count1 == $count2 ) {
            $list2[$count2] = $list2[$count2] + 1; // increment number in array 2
          }
      }
  }
}

  ?>
