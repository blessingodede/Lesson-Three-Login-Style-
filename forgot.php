<style>
    
    body{
        background: white;
    }
    #loginform{
        
        background: white;
        width: 500px;
        height: auto;
        margin: 0 auto;
        margin-top: 60px;
        text-align: center;
        padding: 10px;
        font-weight: bold;
        font-size: 20px;
        
    }
    .textinput{
        width: 100%;
        height: 50px;
        padding: 5px;
       
        
    }
    .button{
        width: 100%;
        padding: 5px;
        height: 50px;
        background: #1E90FF;
        color: #FFFFFF;
        font-size: 20px;
            
    }
    a{
        text-decoration: none;
        font-weight: normal;
        font-size: 15px;
        color: red;
        float: left;
         
    }
    h5{
        color: #1E90FF;
        font-weight: normal;
        text-align: center;
    }
    #succ{
      
        color: #1E90FF;
        float: left;
        font-weight: normal;
        font-size: 16px;
        padding: 5px;
        
    }


</style>
<?php
          
      $mistmatch_err = '';
      $email_err = '';
      $succ = '';
      
      if(isset($_POST['submit'])){
          
        $email = $_POST['username'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
    
        if($email == 'blessingodede@gmail.com'){
            
            if($password==$rpassword){
           
                  $succ = 'Thanks for changing your password';
                
            }else{
                
                $mistmatch_err = 'Mistmatch Password';
            }
            
        }else{
             $email_err = "Invalid Email";
        }
          
      }
    
    
    ?>

<html>
    
    <head>
        <title> LOGIN USER</title>
    </head>
    
    <body>
        <div id="loginform">
            <img src ="ndulogo.png"> 
            <h5> Retrieve Password </h5>
            <div id = "succ">
                <?php echo $succ; ?>
                <?php echo $mistmatch_err; ?>
                <?php echo $email_err; ?>
            </div>
            <form method ="POST" action="forgot.php">
    
            <input type ="text" class="textinput" name ="username" placeholder="Email"><br><br>
            <input type ="password" class="textinput" name ="password" placeholder="New Password"><br><br>
        
            <input type ="password" class="textinput" name ="rpassword" placeholder="Confirm Password">
            <br><br>
            <input type="submit" name ="submit" value="PROCESS" class="button">
        </form>
        </div>
    
    </body>
    
    




</html>
