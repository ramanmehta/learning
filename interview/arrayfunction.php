<?php 
    $student1 = array("Raman" , "Mohan" , "Shyan" , "Kumar");
    $student2 = array("Raman" => 34, "Rishi" => 35, "Rajesh" => 34, "Amit" => 36);
    // sort($student1);  // sort index array acending array
    // rsort($student1);  // rsort  sort index array decending array
    // asort($student2); // asort sort associative array acending order according to value
    // arsort($student2);  // asort sort associative array decending order according to value
    // ksort($student2);    //sort associative array  accendind order accordind to key
    // krsort($student2);    //sort associative array  accendind order accordind to key
     // print_r($student2);
    // $sumnum1 = array(2,5,3,4); //index array
    // $sumnum2 = array('a' => 2, 'b' => 3, 'c' => 4); //associative array
    // echo array_sum($sumnum2);

    // sum imdex array via loop
    // $sumnum1 = array(2,5,3,4); //index array
    // $count = count($sumnum1);
    // $sum = 0;
    // for($i = 0; $i < $count; $i++){
    //     $sum += $sumnum1[$i]; 
    // }
    // echo "sum is = ".$sum;

    //array merge index array

    // $array1 = array("one","two","three","four");
    // $array2 = array("five", "six", "seven" ,"eight");

    // $merge = array_merge($array1,$array2);
    // print_r($merge);

     //array merge associative array but if same key skip first key so to resove this array merge recrsive use
    $array1 = array("a" => "one","b" => "two","c" => "three","d" => "four");
    $array2 = array("d" => "five", "f" =>"six", "g" =>"seven" ,"h" =>"eight");
    
    $merge = array_merge($array1, $array2);

    print_r($merge);
   


?>