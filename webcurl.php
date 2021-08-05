<?php
// debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//get domain query
$actions = array(      // Array of actions
    'v4' => '4',
    'v6' => '6',
    'getheader' => 'I',
    'verbose' => 'v',
);
$domaina = $_POST['domain'];
$ipva = $_POST['curl1'];
$ipv1a = $_POST['curl2'];
$ipv2a = $_POST['curl3'];
echo "<strong>Command Sample: curl -$ipva$ipv1a$ipv2a $domaina</strong>";
if (isset($_POST['curl1']))
{   
    //get domain from input

    $domain = $_POST['domain'];
    
    // disallow connection if domain has other than letters, numbers, and hyphens
    if (preg_match("/^[.A-Za-z0-9-]+$/", $domain)) {
        $nth = "";
        if(isset($_POST['curl1']) ? $nth && array_key_exists($_POST['curl1'], $actions)) {
         if(isset($_POST['curl2']) ? $nth && array_key_exists($_POST['curl2'], $actions)) { 
         if(isset($_POST['curl3']) ? $nth && array_key_exists($_POST['curl3'], $actions)) {            
                //connect ipv4/v6

                $ipv = $actions[$_POST['curl1']];
                $ipv1 = $actions[$_POST['curl2']];
                $ipv2 = $actions[$_POST['curl3']];
                echo "<strong>Command Sample: curl -$ipv$ipv1$ipv2 $domain</strong>";
                #echo "<code> $domain $ipv $ipv1 $ipv2</code>";
                
                
                //execute shell command
                #$shellexec = shell_exec("dig $domain $ipv $ipv1 $ipv2");
                $shellexec = shell_exec("curl -$ipv$ipv1 $domain");

                echo '<pre>'.htmlspecialchars($shellexec,ENT_QUOTES).'</pre>';
                }   
            } 
                else {
                    die('Unknown Message');  // Otherwise, display and error and end execution
                }
        }
    } else {
    // display error
    echo 'Invalid domain name provided!';
    }
}
?>