<?php
// debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//get domain query
$actions = array(      // Array of actions
    'v4' => ' -4 ',
    'v6' => ' -6 ',
    'getheader' => ' -I ',
    'verbose' => ' -v '
);
if (isset($_POST['curl1']))
{   
    //get domain from input

    $domain = $_POST['domain'];
    
    // disallow connection if domain has other than letters, numbers, and hyphens
    if (preg_match("/^[:.A-Za-z0-9-]+$/", $domain)) {
        if(isset($_POST['curl1']) && array_key_exists($_POST['curl1'], $actions)) {
         if(isset($_POST['ipversion1']) && array_key_exists($_POST['ipversion1'], $actions)) {
            if(isset($_POST['ipversion1']) && array_key_exists($_POST['ipversion2'], $actions)) {
            
                //connect ipv4/v6
                $ipv = $actions[$_POST['curl1']];
                #$ipv1 = $actions[$_POST['ipversion1']];
               # $ipv2 = $actions[$_POST['ipversion2']];

                echo "<strong>Command Sample: curl </strong>";
                #echo "<code> $domain $ipv $ipv1 $ipv2</code>";
                echo "<code> $domain $ipv</code>";
                
                //execute shell command
                #$shellexec = shell_exec("dig $domain $ipv $ipv1 $ipv2");
                $shellexec = shell_exec("curl $ipv $domain");

                echo '<pre>'.$shellexec.'</pre>';
        }
            } else {
            die('Unknown Message');  // Otherwise, display and error and end execution
            }
        }
    } else {
    // display error
    echo 'Invalid domain name provided!';
    }
}
?>