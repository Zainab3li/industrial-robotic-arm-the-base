<?php 

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'base');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
 
$sql2="SELECT * FROM `basecontrol` ";
 $result=$dbc->query($sql2);




?>
<!DOCTYPE html>
<html>
<head>
<title> Robotic Arm </title>
<style type="text/css">





body,html{

  background-image:url("robot.png");
      background-attachment:fixed ;
      background-position:right bottom;
      background-repeat: no-repeat;
      background color:#fceed1;
}

lable{ 

  position:absolute;
   left:50px; 
    top:20px; 
    color:#0f2862;
    font-family: Garamond;
    font-style:oblique;
    font-size: 70px;
    font-weight: bold;
    
 
}


  
  body {
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  button{
    border: none;
    border-radius: 15px;
    box-shadow: 0 0 8px rgb(207, 207, 207);
  }
  
  button:hover{
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: inset 0 0 8px #f9f8fc;
    } 
  
  
  
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  
  body {
    height: 20vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  button{
    border: none;
    border-radius: 15px;
    box-shadow: 0 0 8px rgb(207, 207, 207);
  }
  
  button:hover{
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: inset 0 0 8px #f9f8fc;
    } 
  
    #foot1{
    position:absolute;
    top: 15px;
    left: 80px;
    bottom: -100px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os1{
     position: absolute;
      width: 170px;
      height: 65px;
      top: 0px;
      left: 80px;
     bottom: -100px;
      margin: auto;
      background-color:#f9f8fc;
      border: 2.5px solid    #004E7C;
      font-size: 20px;
      
      letter-spacing: 5px;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      color:#0f2862;
    
    }
    
    
   
    /** */
    #foot2{
    position:absolute;
    top: 15px;
    left: 630px;
    bottom: -100px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os2{
     position: absolute;
     width: 170px;
      height: 65px;
      top: 0px;
      left: 630px;
     
      bottom: -100px;
      margin: auto;
      background-color: #f9f8fc;
      border: 2.5px solid #0e172c;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      color:#0f2862;
    }
    
    
    

     
    

    
     /** */
     #foot3{
    position:absolute;
    top: 15px;
    left: 350px;
    bottom: 210px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os3{
     position: absolute;
      width: 170px;
      height: 65px;
      top: 20px;
      left: 350px;
     
      bottom: 230px;
      margin: auto;
      background-color: #f9f8fc;
      border: 2.5px solid #0e172c;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      color:#0f2862;
    }
    
    
    

     /** */
     #foot4{
    position:absolute;
    top: 15px;
    left: 350px;
    bottom: -420px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os4{
     position: absolute;
     width: 170px;
      height: 65px;
      top: 0px;
      left: 350px;
     
      bottom: -420px;
      margin: auto;
      background-color: #f9f8fc;
      border: 2.5px solid #0e172c;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      color:#0f2862;
    }
    
    
   

    /** */
    #foot5{
    position:absolute;
    top: 15px;
    left: 350px;
    bottom: -100px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os5{
     position: absolute;
     width: 170px;
      height: 65px;
      top: 0px;
      left: 350px;
     
      bottom: -100px;
      margin: auto;
      background-color: #f9f8fc;
      border: 2.5px solid #0e172c;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      color:#0f2862;
    }
    

   

    @media only screen and (orientation:portrait){
  lable{
   
     position:absolute;
     left:90px; 
      top:180px; 
      color::#0f2862;
      font-family: Garamond;
      font-style:oblique;
      font-size: 90px;
      font-weight: bold;
      
    }
    body,html{
      background-image:url("robot.png");
      background-attachment:fixed ;
      background-position:right bottom;
      background-repeat: no-repeat;
      background color:#fceed1;


    }
   
  
  
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  
  body {
    height: 100vh;
    overflow: hidden;
    display: block;
    align-items: center;
    justify-content: center;
  }
  
  button{
    border: none;
    border-radius: 15px;
    box-shadow: 0 0 8px rgb(207, 207, 207);
    
  }
  
 
  
  #foot1{
    position:absolute;
    top: -280px;
    left: 100px;
    
    margin: auto;
    border: none;
    padding: 9px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
  
  }
  
  .button-os1{
     position: absolute;
      width: 170px;
      height: 65px;
      top: -300px;
      left: 100px;
     bottom: -100px;
      margin: auto;
      background-color: white;
      border: 2.5px solid    #004E7C;
      font-size: 20px;
      font-color:#0f2862;
      letter-spacing: 5px;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      
    }
    
    
    
    
    
      
    
    /** */
    #foot2{
    position:absolute;
    top: -280px;
    right: 90px;
   
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os2{
     position: absolute;
     width: 170px;
      height: 65px;
      top: -300px;
      right: 90px;
      margin: auto;
      background-color: white;
      border: 2.5px solid    #004E7C;
      font-size: 20px;
      font-color:#0f2862;
      letter-spacing: 5px;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      
    }
    
    
   
     
    

    
     /** */
     #foot3{
    position:absolute;
    top: -380px;
    left: 380px;
    bottom: 210px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os3{
     position: absolute;
      width: 170px;
      height: 65px;
      top: -380px;
      left: 380px;
     
      
      margin: auto;
      background-color:white;
      border: 2.5px solid    #004E7C;
      font-size: 20px;
      font-color:#0f2862;
      letter-spacing: 5px;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      
    }
    
    
    

     /** */
     #foot4{
    position:relative;
    top: 950px;
    left: 380px;
    bottom: 220px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os4{
     position: absolute;
     width: 170px;
      height: 65px;
      top: 0px;
      left: 380px;
      bottom: -209px;
      
      margin: auto;
      background-color: white;
      border: 2.5px solid    #004E7C;
      font-size: 20px;
      font-color:#0f2862;
      letter-spacing: 5px;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      
    }
    
    
    

    /** */
    #foot5{
    position:absolute;
    top: -280px;
    left: 380px;
   bottom:-105px;
    margin: auto;
    border: none;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 0 8px #d9d4e7;
    width: 170px;
    height: 65px;
    background-color: #d9d4e7;
    animation-duration: 5s;
  }
  
  .button-os5{
     position: absolute;
     width: 170px;
      height: 65px;
      top: -300px;
      left: 380px;
     bottom:-100px;
      
      margin: auto;
      background-color: white;
      border: 2.5px solid    #004E7C;
      font-size: 20px;
      font-color:#0f2862;
      letter-spacing: 5px;
      font-family: Garamond;
      font-style:oblique;
      font-size:30px;
      font-weight: bold;
      
    }
    
    


   }
       
</style>
</head>

<body>

        <form  action="base1.php" method="POST">
       
  
      <lable> <span name="E1"> Control Panle For Base</span> </lable> 
      
      <button id="foot1" ><button class="button-os1 "  name="L">  Left</button></button>
      <button id="foot2" ><button class="button-os2 "  name="R"> Right</button></button>
      <button id="foot3" ><button class="button-os3 "  name="F">  Forward</button></button>
      <button id="foot4" ><button class="button-os4 "  name="B">   Backward</button></button>
      <button id="foot5" ><button class="button-os5 "  name="S">    Stop</button></button>
     
    <br>
  
      
   </form>
   <?php 


mysqli_close($dbc);

?>
  
    
  

</body>

</html>
