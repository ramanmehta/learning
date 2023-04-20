<?php 
    //index array
    // $student1 = array("Raman" , "Mohan" , "Shyan" , "Kumar");

    // // print_r($student);
    // $count = count($student1);

    // for($i = 0; $i < $count; $i++){
    //     echo "Row $i : ".$student1[$i];
    //     echo "<br>";
    // }

    // associative array

    // $student2 = array("Raman" => 34, "Rishi" => 35, "Rajesh" => 34, "Amit" => 32);
    // // print_r($student2);
    // echo "<table border=1><tr><thead border=1>Name</thead><thead>Age</thead></tr>";
    // foreach($student2 as $name => $age){
    //     echo " <tr><td> $name </td><td> $age </td> </tr>";
    // }

    // echo "</table>";


    // multidimensional array

    $student3 = array(
        array("Raman", "B.tech", "PHP", "Mohali"),
        array("Amit", "Diploma", "Mechnical", "Banglore"),
        array("Rajesh", "Diploma", "Mechnical", "Odisa"),
        array("Manoj", "MCA", "Computer", "Mumbai"),
        array("Rishi", "B.Tech", "BPSC", "Bihar")
    );

    //row = 5, col = 4
echo "<ol>";
    for($row = 0; $row < 5; $row++){
        // echo "Row $row";
        
        echo "<li>";
        for($col = 0; $col <4; $col++){
            echo $student3[$row][$col] ;
            echo "<br>";
        }
       echo "</li>";
    }
 echo "<ul>";
?>