<?php
// one metho

error_reporting(E_ALL); // Error engine - always ON!

ini_set('display_errors', TRUE); // Error display - OFF in production env or real server

ini_set('log_errors', TRUE); // Error logging

ini_set('error_log', 'C:\xampp\htdocs\loggingApi\mylogs\error.log'); // Logging file

ini_set('log_errors_max_len', 1024); // Logging file size


// one method

// ini_set('display_errors',1);
// ini_set('log_errors',1);
// ini_set('error_log','C:\xampp\htdocs\loggingApi\mylogs\error.log');
// error_reporting(E_ALL);

// require 'C:\xampp\htdocs\loggingApi\vendor\autoload.php';

 //use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

//log channels
  //$log = new Logger('name');
  //$log->pushHandler(new StreamHandler('C:\xampp\htdocs\loggingApi\mylogs\logging.log', Logger::WARNING));

//require 'joe.com'; // just to generate an error

//  //data insert
// $logger->error('Foo');
// $log->error('Bar');

// first try and catch

// try{
//     echo "Work being done.<br />";
//     throw new Exception("something went wrong<br/>",243);
// }catch(Exception $e){
//     echo $e->getMessage();
//     $log->error($e);
// }finally{
//     echo "here we Good.<br/>";
// }


try{
// creating a mysql object

$mysqli=new MySQLi('localhost','root','ussd','');
if(mysqli_connect_error()){
    throw new Exception(mysqli_connect_error());
}
$sql="SELECT * FROM person";
$result=$mysqli->query($sql);
    if(!$result){
        throw new Exception($mysqli->error);
    }
    while($row=$result->fetch_object()){
        $result[]=$row;
    }
}catch(Exception $e){

}finally{

}
print_r($result);






// require 'C:\xampp\htdocs\loggingApi\vendor\autoload.php';

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// //log channels
//  $log = new Logger('name');
//  $log->pushHandler(new StreamHandler('C:\xampp\htdocs\loggingApi\mylogs\logging.log', Logger::WARNING));

//  $logger = new Logger('error');
//  $logger->pushHandler(new StreamHandler('C:\xampp\htdocs\loggingApi\mylogs\error.log', Logger::ERROR));





?>




