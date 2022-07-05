<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Sign up.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<!-- Code the PHP  -->

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

    $Username=$_POST['Username'];
    $Email=$_REQUEST['Enail'];
    $passowed=$_POST['Passowrd'];
    $Gender=$_POST['Gender_'];
    
    $Skills_PHP=$_POST['Ski_PHP'];
    $Skills_JS=$_POST['Ski_JS'];
    $Skills_Python=$_POST['Ski_Python'];
 }
 function TestText($text){
    $text=htmlspecialchars($text);
    //htmlspecialchars ==> This method converts text containing code to plain text
    // -------
    // Trim ==> This method removes spaces from the beginning and end of the text
    $text=trim($text);
    // ------
//  stripceslashes ==> This method removes the slash from the text
    $text=stripcslashes($text);

   return $text;

    

 }
     ?>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">

            <div class="square" id="square1" style="--i:0"></div>
            <div class="square" id="square2" style="--i:1"></div>
            <div class="square" id="square3" style="--i:2"></div>
            <div class="square" id="square4" style="--i:3"></div>

            <div class="con ">
                <div class="form ">
                    <h2 style="top: -20px;">Login Form</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <!-- Username => input  -->
                        <div class="input ">
                            <input type="text" class="text1  inb" placeholder="Username " 
                            name="Username"
                            value="<?php
                             #Print Value To Username

                            if($Username==""){
                                echo 'The User name is empty';
                            }
                           else if(strlen($Username) <3){
                                echo 'The name is too short';
                            }
                            else{
                             echo "Username: ".TestText($Username) ;
                            // echo "User Name :$Username" ;
                        }?>">
                        </div>
                        <!-- Email => input  -->
                        <div class="input ">
                            <input name="Enail" type="text" 
                             class="text1  inb" placeholder="Email" 
                             
                             value="<?php
                             #Print Value To Email
                                if($Email==""){
                                echo 'Email is empty';
                             }
                             else if ($Email <>'@'){
                                echo 'Email is syntex error';

                             }
                             else{
                                echo "Email: ".TestText($Email) ;

                            }?>" >
                        </div>
                        <!-- Password => input  -->
                        <div class="input ">
                            <input name="Passowrd" type="password" class="password1 inb" placeholder="password "
                           value="<?php
                               
                             #Print Value To Password
                                if($passowed==""){
                           echo "";

                             }
                            //  else if (strlen( $passowed) <8){
                            //    echo '<script> alert("Put a password more than 8 character")</script>';

                            //  }
                            //  else{
                          
                            //    echo "<script> alert('Password:.$passowed')</script>";
                             
                            // }?>" >
                        </div>
                        <!-- Gender => radio -->
                        <div class="input_radio ">
                            <p class="Gender">Gender</p>
                            <label for=""> Male</label>
                            <input type="radio" name="Gender_" class="radio_gend"
                            <?php
                             if(isset($Gender) && $Gender=="Male"){
                                echo "checked";
                              }
                             ?>
                             value="Male">
                            <label for=""> Female</label>
                            <input type="radio" name="Gender_" class="radio_gend"
                            <?php
                             if(isset($Gender) && $Gender=="Female"){
                                echo "checked";
                              }
                             ?>
                            value="Female">
                            <label for=""> Other</label>
                            <input type="radio" name="Gender_" class="radio_gend"
                            <?php
                             if(isset($Gender) && $Gender=="Other"){
                                echo "checked";
                              }
                             ?>
                            value="Other">
                        </div>
                        <!-- Skills => Checkbox -->
                        <div class="input_radio ">
                            <p class="skills">Skills</p>
                            <label for=""> PHP</label>
                            <input type="checkbox" name="Ski_PHP" class="checkbox"
                            <?php
                            if(isset($Skills_PHP)&& $Skills_PHP=="PHP"){
                                echo "checked";
                            }
                            ?> value="PHP">
                            <label for=""> JS</label>
                            <input type="checkbox" name="Ski_JS" class="checkbox"
                            <?php
                            if(isset($Skills_JS)&& $Skills_JS=="JS"){
                                echo "checked";
                            }
                            ?> value="JS">
                            <label for=""> Python</label>
                            <input type="checkbox" name="Ski_Python" class="checkbox"
                            <?php
                            if(isset($Skills_Python)&& $Skills_Python=="Python"){
                                echo "checked";
                            }
                            ?> value="Python">
                        </div>
                        <!-- file => input -->
                        <div class="input ">
                            <input type="file" id="file" class="file_C" name="CV">
                            <label for="file">
                                <i class="material-icons file_Clable">
                                    <pre> Dawnload CV </pre> 
                                </i>&nbsp;
                             
                            </label>
                        </div>

                        <!-- submit => input  -->
                        <div class="input ">
                       
                            <input type="submit" class="sent1 " value="Login ">
                            
                        </div>
                        <!-- Clear => input -->
                        <div class="input ">
                            <input type="reset" class="reset " value="Clear All ">
                        </div>




                    </form>
                    <p class="p " id="twasl">Designed by: <b>
                        <span>Ebrahem</span>
                         <span>&ensp;AL</span>
                          <span>&ensp;Mando</span>
                         </b>
                    </p>

                    <div class="twasl">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/abo.mohamad.902604 " target="_blank "> <i class="fa fa-facebook-square "></i></a>
                            </li>
                            <li>
                                <a href="https://t.me/Ebrahem_a_adnan " target="_blank "><i class="fa fa-telegram " aria-hidden="true "></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/qr/WKQGLFXGRZRTP1 " target="_blank "><i class="fa fa-whatsapp " id="w1" aria-hidden="true "></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/ibrahim_aladnan?utm_medium=copy_link " target="_blank "><i class="fa fa-instagram " aria-hidden="true "></i></a>
                            </li>
                            <li>
                                <a href="mailto:ebrahemalmando2001@gmai.com " target="_blank "><i class="fa fa-envelope " aria-hidden="true "></i></a>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>
        </div>
    </section>
<script>
    
</script>
</body>