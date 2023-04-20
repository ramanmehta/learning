<?php 

// $ip = $_SERVER['REMOTE_ADDR']; 

// //     exec("arp -a $client_ip", $output);
// //   echo $MAC = $output[1];


// setcookie('vote',$ip ,time()+10);

// echo "Cookie is set";
// print_r($_POST); 
// if(isset($_POST)){    
//     // print_r($_COOKIE['rate']);
    
//     if(isset($_COOKIE['rate'])){
//         echo "You already voted";
//     }else{
//         $vote = $_POST['vote'];
//         setcookie('rate', $vote, time()+10);
//         echo "Thank you for vote";
//     }  
// }

if(isset($_POST['vote'])){
    print_r($_POST);
    if(isset($_COOKIE['rate'])){
        echo "You already voted";
    }else{
            $vote = $_POST['vote'];
            setcookie('rate', $vote, time()+20);
            echo "Thank you for vote";
        }  
// }else{
//     echo "please vote";
}

?>

<form method="post">
    <table>
        <tr>
            <td>
                <input type="submit" name="vote" value="Raman">
            </td>
            <td>vs</td>
            <td>
                <input type="submit" name="vote" value="Pushpa">
            </td>
        </tr>
    </table>
</form>
