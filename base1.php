<?php 
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'base');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql2="SELECT * FROM basecontrol   ";
 $result=$dbc->query($sql2);

 
 
  if (isset($_POST["L"])){
  // "Save Changes" clicked

   $p="1";

 $sql6=mysqli_query($dbc,"UPDATE `basecontrol` SET `Left` = '$p' ");
 
 if($sql6){
  $resultAll = mysqli_query($dbc, "SELECT `Left` FROM `basecontrol` ");
  if(!$resultAll){
    die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
        echo "left =";
        echo  $rowData["Left"].'<br>';
    }
  }
   
}
  
  
 
  
  else{
      
      echo "error";
      
  }
  }


  if (isset($_POST["R"])){
    // "Save Changes" clicked
  
     $p="1";
  
   $sql6=mysqli_query($dbc,"UPDATE `basecontrol` SET `Right` = '$p' ");
   
   if($sql6){
    $resultAll = mysqli_query($dbc, "SELECT `Right` FROM `basecontrol` ");
  if(!$resultAll){
    die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
        echo "right =" ;
        echo $rowData["Right"].'<br>';
    }
  }
   
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F"])){
      // "Save Changes" clicked
      $p="1";
      
    
     $sql6=mysqli_query($dbc,"UPDATE `basecontrol` SET `Forward` = '$p' ");
     
     if($sql6){
      $resultAll = mysqli_query($dbc, "SELECT `Forward` FROM `basecontrol`");
      if(!$resultAll){
        die(mysqli_error($dbcon));
      }
      
      if (mysqli_num_rows($resultAll) > 0) {
        while($rowData = mysqli_fetch_array($resultAll)){
            echo "Forward=";
            echo $rowData["Forward"].'<br>';
        }
      }
     
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B"])){
        // "Save Changes" clicked
        $p="1";
       
      
       $sql6=mysqli_query($dbc,"UPDATE `basecontrol` SET `Backward` = '$p' ");
       
       if($sql6){
        $resultAll = mysqli_query($dbc, "SELECT `Backward` FROM `basecontrol` ");
        if(!$resultAll){
          die(mysqli_error($dbcon));
        }
        
        if (mysqli_num_rows($resultAll) > 0) {
          while($rowData = mysqli_fetch_array($resultAll)){
              echo "Backward=" ;
              echo $rowData["Backward"].'<br>';
          }
        }
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S"])){
          // "Save Changes" clicked
        
          $p="1";
        
         $sql6=mysqli_query($dbc,"UPDATE `basecontrol` SET `Stop` = '$p' ");
         
         if($sql6){
          $resultAll = mysqli_query($dbc, "SELECT `Stop` FROM `basecontrol`");
  if(!$resultAll){
    die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
        echo "Stop =";
        echo $rowData["Stop"].'<br>';
    }
  }
  }
         
          
          else{
              
              echo "error";
              
          }}





?>

<?php 

mysqli_close($dbc);


?>

