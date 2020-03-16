<?php
ob_start();
session_start();

include 'connect-db.php';

//EVENTS ADD

if (isset($_POST['eventadd'])) {


      $uploads_dir = '../img/events/';
      $tmp_name = $_FILES['img_link']["tmp_name"];
      $name = $_FILES['img_link']["name"];
      //resmin isminin benzersiz olması
      $benzersizsayi1=rand(20000,32000);
      $benzersizsayi2=rand(20000,32000);
      $benzersizsayi3=rand(20000,32000);
      $benzersizsayi4=rand(20000,32000);  
      $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
      $refimgyol=$uploads_dir."/".$benzersizad.$name;
      move_uploaded_file($tmp_name, "$uploads_dir$benzersizad$name");
      
      $start_date=date("Y-m-d", strtotime($_POST['start_date']));
      $end_date=date("Y-m-d", strtotime($_POST['end_date']));

      $kaydet=$db->prepare("INSERT INTO events SET
            mentor_id=:mentor_id,
            type=:type,
            info=:info,
            title=:title,
            organizer=:organizer,
            sector=:sector,
            link=:link,
            start_date=:start_date,
            end_date=:end_date,
            target_group=:target_group,
            img_link=:img_link
            ");
      $insert=$kaydet->execute(array(
            'mentor_id' => $_POST['mentor_id'],
            'type' => $_POST['type'],
            'info' => $_POST['info'],
            'title' => $_POST['title'],
            'organizer' => $_POST['organizer'],
            'sector' => $_POST['sector'],
            'link' => $_POST['link'],
            'start_date' =>  $start_date,
            'end_date' => $end_date,
            'target_group' => $_POST['target_group'],
            'img_link' => $refimgyol
            ));

      if ($insert) {

            Header("Location:../controlpanel/mentor-networking.php?update=ok");

      } else {

            Header("Location:../controlpanel/mentor-networking.php?update=no");
      }




}

//HER SIGNUP
if (isset($_POST['hersignup1'])) {
      
      echo $email=htmlspecialchars($_POST['email']); echo "<br>";
      echo $all_password=trim($_POST['all_password']); echo "<br>";
      echo $confirmpassword=trim($_POST['confirmpassword']); echo "<br>";

      if ($all_password==$confirmpassword) {

            if (strlen($all_password)>=6) {

                  $usercheck=$db->prepare("select * from users where email=:email");
                  $usercheck->execute(array(
                        'email' => $email
                        ));

                  $count=$usercheck->rowCount();

                  if ($count==0) {

                        $password=md5($all_password);
                        $who=1;

                        $record=$db->prepare("INSERT INTO users SET
                              
                              email=:email,
                              all_password=:all_password,
                              who=:who

                              ");
                        $insert=$record->execute(array(
                              
                              'email' => $_POST['email'],
                              'all_password' => $password,
                              'who' => $who

                              ));

                        if ($insert) {
                              
                          
                              header("location:../hersignup.php?email=$email");
                             
                        }
                        else {
                              echo "<p align='left'><font color=red  size='4pt'>*Registration failed!</font></p>";
                              #print_r($insert->errorInfo());
                              }
                  } else {
                        echo "<p align='left'><font color=red  size='4pt'>*This Email is already in use!</font></p>";
                        #print_r($insert->errorInfo());
                        }

            } else {
                  echo "<p align='left'><font color=red  size='4pt'>*Password is less more than 6 character!</font></p>";
            }

      } else {
          echo "<p align='left'><font color=red  size='4pt'>*Passwords do not match!</font></p>";
            }
}


if (isset($_POST['hersignup'])) {
      
      $usercheck=$db->prepare("SELECT * FROM users where email=:email");
      $usercheck->execute(array(
        'email' => $_POST['email']
        ));
      $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);

	$record=$db->prepare("INSERT INTO her SET
		
		firstname=:firstname,
		lastname=:lastname,
		status=:status,
		birth=:birth,
		gender=:gender,
		country=:country,
		legalStatus=:legalStatus,
		degreeCountry=:degreeCountry,	
		town=:town,
		user_id=:user_id

		");
	$insert=$record->execute(array(
		
		'firstname' => $_POST['firstname'],
		'lastname' => $_POST['lastname'],
		'status' => $_POST['status'],
		'birth' => $_POST['birth'],
		'gender' => $_POST['gender'],
		'country' => $_POST['country'],
		'legalStatus' => $_POST['legalStatus'],
		'degreeCountry' => $_POST['degreeCountry'],
		'town' => $_POST['town'],
		'user_id' => $userinfo['user_id']
		

		));

	if ($insert) {

            $email = $userinfo['email'];
            $lastname = $_POST['lastname'];
            $Lastname = ucfirst($lastname);
            $all_password = $userinfo['all_password'];

            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
        
            $to = "$email";
            $subject = "Registration completed to All-in-one4HER platform & project";
            $message = "
            Dear Mr/Ms " . $Lastname . ",

            Thank you for registering to All-in-one4HER project and platform. Your password is: " . $all_password . ".
            
            We are only at the beginning phase of our project and just started to develop our platform aiming to facilitate your integration to the labour market in Flanders, Belgium. The other pages in our online platform will be activated later.
            
            You will receive automatic updates about our platform and be informed about our project activities, opportunities (career coaching, mentoring, etc.) by e-mail. You can also follow us on social media to get timely updates.
            
            If you have any questions, please don’t hesitate to contact us either by replying to this e-mail or by phone.
            
            Kind regards,
            
            All-in-one4HER Team 
            
        __________________________________________

            Geachte heer / mevrouw " . $Lastname . ",
            
            Bedankt voor uw aanmelding voor het All-in-one4HER-project en -platform. Je wachtwoord is: " . $all_password . ".

            We zijn nog maar in de beginfase van ons project en zijn net begonnen ons platform te ontwikkelen om uw integratie op de arbeidsmarkt in Vlaanderen, België, te vergemakkelijken. De andere pagina's op ons online platform worden later geactiveerd.
            
            U zal automatische updates over ons platform ontvangen en per e-mail op de hoogte gehouden worden van onze projectactiviteiten en kansen (loopbaancoaching, mentoring, enz.). U kunt ons ook volgen op sociale media om tijdig updates te ontvangen.
            
            Als u vragen heeft, aarzel niet a.u.b. om ons te contacteren door e-mail/telefoon.
            
            Met vriendelijke groeten,
            
            All-in-one4HER Team
            
            @: info@all-in-one4her.eu
            www.all-in-one4her.eu
            Phone: +32 (0) 2 801 13 58
            Address: Beyond the Horizon ISSG 
            Da Vincilaan 1, 1932 Zaventem Belgium
            https://www.linkedin.com/groups/8765305/ 
            https://www.facebook.com/Allinone4HER/ 
            ";
            $headers = "From: All-in-one4HER <info@all-in-one4her.eu>" . "\r\n";
        
            header("location:../welcome.php?firstname=$firstname");
            mail($to,$subject,$message,$headers);

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $status = $_POST['status'];
            $birth = $_POST['birth'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $legalStatus = $_POST['legalStatus'];
            $degreeCountry = $_POST['degreeCountry'];
            $town = $_POST['town'];
            $email = $userinfo['email'];

            $to_2 = "info@all-in-one4her.eu";
            $from_2 = "All-in-one4HER <info@all-in-one4her.eu>";
            $subject_2 = "A new HER is registered";
            $message_2 = " 
            
            first name: " . $firstname . "

            last name: " . $lastname . "

            status: " . $status . "

            birth: " . $birth . "

            gender: " . $gender . "

            legal status: " . $legalStatus . "

            country of origin: " . $country . "

            Country of highest degree: " . $degreeCountry . "

            town: " . $town . "

            email: " . $email . "

            ";
            $headers_2 = 'From: ' . $from_2 . "\r\n";
            mail($to_2, $subject_2, $message_2, $headers_2);
      }
      else {
            echo "<p align='left'><font color=red  size='4pt'>*Registration failed!</font></p>";
            #print_r($insert->errorInfo());
            }
 
}

//MENTOR SIGNUP

if (isset($_POST['mentorsignup1'])) {

      echo $email=htmlspecialchars($_POST['email']); echo "<br>";
      echo $all_password=trim($_POST['all_password']); echo "<br>";
      echo $confirmpassword=trim($_POST['confirmpassword']); echo "<br>";

      if ($all_password==$confirmpassword) {


            if (strlen($all_password)>=6) {

                  $usercheck=$db->prepare("select * from users where email=:email");
                  $usercheck->execute(array(
                        'email' => $email
                        ));

                  $count=$usercheck->rowCount();

                  if ($count==0) {

                        $password=md5($all_password);
                        $who=2;

                        $record=$db->prepare("INSERT INTO users SET
                              
                              email=:email,
                              all_password=:all_password,
                              who=:who

                              ");
                        $insert=$record->execute(array(
                              
                              'email' => $_POST['email'],
                              'all_password' => $password,
                              'who' => $who

                              ));

                        if ($insert) {
                             
                          
                              header("location:../mentorsignup.php?email=$email");
                             
                          }
                        else {
                              echo "<p align='left'><font color=red  size='4pt'>*Registration failed!</font></p>";
                              #print_r($insert->errorInfo());
                              }
                  } else {
                        echo "<p align='left'><font color=red  size='4pt'>*This Email is already in use!</font></p>";
                        #print_r($insert->errorInfo());
                        }

            } else {
                  echo "<p align='left'><font color=red  size='4pt'>*Password is less more than 6 character!</font></p>";
            }

      } else {
           echo "<p align='left'><font color=red  size='4pt'>*Passwords do not match!</font></p>";
      }

}

if (isset($_POST['mentorsignup'])) {
      
      $usercheck=$db->prepare("SELECT * FROM users where email=:email");
      $usercheck->execute(array(
        'email' => $_POST['email']
        ));
      $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);
      

      $record=$db->prepare("INSERT INTO mentor SET
            
            firstname=:firstname,
            lastname=:lastname,
            age=:age,
            education=:education,
            sector=:sector,
            experience=:experience,
            user_id=:user_id
            

            ");
      $insert=$record->execute(array(
            
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'age' => $_POST['age'],
            'education' => $_POST['education'],
            'sector' => $_POST['sector'],
            'experience' => $_POST['experience'],
            'user_id' => $userinfo['user_id']

            ));

      if ($insert) {
            $email = $userinfo['email'];
            $lastname = $_POST['lastname'];
            $Lastname = ucfirst($lastname);
            $all_password = $userinfo['all_password'];

            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
        
            $to = "$email";
            $subject = "Registration completed to All-in-one4HER platform & project";
            $message = "
            Dear Mr/Ms " . $Lastname . ",

            Thank you for registering to All-in-one4HER project and platform. Your password is: " . $all_password . ".
            
            We are only at the beginning phase of our project and just started to develop our platform aiming to facilitate your integration to the labour market in Flanders, Belgium. The other pages in our online platform will be activated later.
            
            You will receive automatic updates about our platform and be informed about our project activities, opportunities (career coaching, mentoring, etc.) by e-mail. You can also follow us on social media to get timely updates.
            
            If you have any questions, please don’t hesitate to contact us either by replying to this e-mail or by phone.
            
            Kind regards,
            
            All-in-one4HER Team 
            
        __________________________________________

            Geachte heer / mevrouw " . $Lastname . ",
            
            Bedankt voor uw aanmelding voor het All-in-one4HER-project en -platform. Je wachtwoord is: " . $all_password . ".

            We zijn nog maar in de beginfase van ons project en zijn net begonnen ons platform te ontwikkelen om uw integratie op de arbeidsmarkt in Vlaanderen, België, te vergemakkelijken. De andere pagina's op ons online platform worden later geactiveerd.
            
            U zal automatische updates over ons platform ontvangen en per e-mail op de hoogte gehouden worden van onze projectactiviteiten en kansen (loopbaancoaching, mentoring, enz.). U kunt ons ook volgen op sociale media om tijdig updates te ontvangen.
            
            Als u vragen heeft, aarzel niet a.u.b. om ons te contacteren door e-mail/telefoon.
            
            Met vriendelijke groeten,
            
            All-in-one4HER Team
            
            @: info@all-in-one4her.eu
            www.all-in-one4her.eu
            Phone: +32 (0) 2 801 13 58
            Address: Beyond the Horizon ISSG 
            Da Vincilaan 1, 1932 Zaventem Belgium
            https://www.linkedin.com/groups/8765305/ 
            https://www.facebook.com/Allinone4HER/ 
            ";
            $headers = "From: All-in-one4HER <info@all-in-one4her.eu>" . "\r\n";
        
            header("location:../welcome.php?firstname=$firstname");
            mail($to,$subject,$message,$headers);

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $education = $_POST['education'];
            $sector = $_POST['sector'];
            $experience = $_POST['experience'];
            $email = $userinfo['email'];

            $to_2 = "info@all-in-one4her.eu";
            $from_2 = "All-in-one4HER <info@all-in-one4her.eu>";
            $subject_2 = "A new MENTOR is registered";
            $message_2 = " 
            
            first name: " . $firstname . "

            last name: " . $lastname . "

            age: " . $age . "

            level of education: " . $education . "

            working sector: " . $sector . "

            working experience: " . $experience . "

            email: " . $email . "

            ";
            $headers_2 = 'From: ' . $from_2 . "\r\n";
            mail($to_2, $subject_2, $message_2, $headers_2);
        }
      else {
            echo "<p align='left'><font color=red  size='4pt'>*Registration failed!</font></p>";
            #print_r($insert->errorInfo());
            }
                  

}

//EMPLOYERS SIGNUP

if (isset($_POST['employersignup'])) {

      echo $email=htmlspecialchars($_POST['email']); echo "<br>";
      echo $all_password=trim($_POST['all_password']); echo "<br>";
      echo $confirmpassword=trim($_POST['confirmpassword']); echo "<br>";

      if ($all_password==$confirmpassword) {

            if (strlen($all_password)>=6) {

                  $hercheck=$db->prepare("select * from users where email=:email");
                  $hercheck->execute(array(
                        'email' => $email
                        ));

                  $count=$hercheck->rowCount();

                  if ($count==0) {

                        $password=md5($all_password);
                        $who=3;

                        $record=$db->prepare("INSERT INTO users SET
                              
                              firstname=:firstname,
                              lastname=:lastname,
                              position=:position,
                              company=:company,
                              sector=:sector,
                              employees=:employees,
                              email=:email,
                              all_password=:all_password,
                              who=:who

                              ");
                        $insert=$record->execute(array(
                              
                              'firstname' => $_POST['firstname'],
                              'lastname' => $_POST['lastname'],
                              'position' => $_POST['position'],
                              'company' => $_POST['company'],
                              'sector' => $_POST['sector'],
                              'employees' => $_POST['employees'],
                              'email' => $_POST['email'],
                              'all_password' => $password,
                              'who' => $who

                              ));

                        if ($insert) {
                              $email = $_POST['email'];
                            $lastname = $_POST['lastname'];
                            $Lastname = ucfirst($lastname);
                            $all_password = $_POST['all_password'];

                            ini_set( 'display_errors', 1 );
                            error_reporting( E_ALL );
                        
                            $to = "$email";
                            $subject = "Registration completed to All-in-one4HER platform & project";
                            $message = "
                            Dear Mr/Ms " . $Lastname . ",
                
                            Thank you for registering to All-in-one4HER project and platform. Your password is: " . $all_password . ".
                            
                            We are only at the beginning phase of our project and just started to develop our platform aiming to facilitate your integration to the labour market in Flanders, Belgium. The other pages in our online platform will be activated later.
                            
                            You will receive automatic updates about our platform and be informed about our project activities, opportunities (career coaching, mentoring, etc.) by e-mail. You can also follow us on social media to get timely updates.
                            
                            If you have any questions, please don’t hesitate to contact us either by replying to this e-mail or by phone.
                            
                            Kind regards,
                            
                            All-in-one4HER Team 
                            
                        __________________________________________
                
                            Geachte heer / mevrouw " . $Lastname . ",
                            
                            Bedankt voor uw aanmelding voor het All-in-one4HER-project en -platform. Je wachtwoord is: " . $all_password . ".
                
                            We zijn nog maar in de beginfase van ons project en zijn net begonnen ons platform te ontwikkelen om uw integratie op de arbeidsmarkt in Vlaanderen, België, te vergemakkelijken. De andere pagina's op ons online platform worden later geactiveerd.
                            
                            U zal automatische updates over ons platform ontvangen en per e-mail op de hoogte gehouden worden van onze projectactiviteiten en kansen (loopbaancoaching, mentoring, enz.). U kunt ons ook volgen op sociale media om tijdig updates te ontvangen.
                            
                            Als u vragen heeft, aarzel niet a.u.b. om ons te contacteren door e-mail/telefoon.
                            
                            Met vriendelijke groeten,
                            
                            All-in-one4HER Team
                            
                            @: info@all-in-one4her.eu
                            www.all-in-one4her.eu
                            Phone: +32 (0) 2 801 13 58
                            Address: Beyond the Horizon ISSG 
                            Da Vincilaan 1, 1932 Zaventem Belgium
                            https://www.linkedin.com/groups/8765305/ 
                            https://www.facebook.com/Allinone4HER/ 
                            ";
                            $headers = "From: All-in-one4HER <info@all-in-one4her.eu>" . "\r\n";
                        
                            header("location:../welcome.php");
                            mail($to,$subject,$message,$headers);
                
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $position = $_POST['position'];
                            $company = $_POST['company'];
                            $sector = $_POST['sector'];
                            $employees = $_POST['employees'];
                            $email = $_POST['email'];
                
                            $to_2 = "info@all-in-one4her.eu";
                            $from_2 = "All-in-one4HER <info@all-in-one4her.eu>";
                            $subject_2 = "A new EMPLOYER is registered";
                            $message_2 = " 
                            
                            first name: " . $firstname . "
                
                            last name: " . $lastname . "
                
                            position: " . $position . "
                
                            name of company: " . $company . "
                
                            sector: " . $sector . "
                
                            number of employees: " . $employees . "
                
                            email: " . $email . "
                
                            ";
                            $headers_2 = 'From: ' . $from_2 . "\r\n";
                            mail($to_2, $subject_2, $message_2, $headers_2);
                          }
                        else {
                        echo "<p align='left'><font color=red  size='4pt'>*Registration failed!</font></p>";
                        #print_r($insert->errorInfo());
                              }
                  } else {
                        echo "<p align='left'><font color=red  size='4pt'>*This Email is already in use!</font></p>";
                        #print_r($insert->errorInfo());
                        }

            } else {
                  echo "<p align='left'><font color=red  size='4pt'>*Password is less more than 6 character!</font></p>";
            }

      } else {
           echo "<p align='left'><font color=red  size='4pt'>*Passwords do not match!</font></p>";
      }

}

//ORGANISATION SIGNUP

if (isset($_POST['organisationsignup'])) {

      echo $email=htmlspecialchars($_POST['email']); echo "<br>";
      echo $all_password=trim($_POST['all_password']); echo "<br>";
      echo $confirmpassword=trim($_POST['confirmpassword']); echo "<br>";

      if ($all_password==$confirmpassword) {

            if (strlen($all_password)>=6) {

                  $hercheck=$db->prepare("select * from users where email=:email");
                  $hercheck->execute(array(
                        'email' => $email
                        ));

                  $count=$hercheck->rowCount();

                  if ($count==0) {

                        $password=md5($all_password);
                        $who=4;

                        $record=$db->prepare("INSERT INTO users SET
                              
                              firstname=:firstname,
                              lastname=:lastname,
                              position=:position,
                              organisation=:organisation,
                              region=:region,
                              email=:email,
                              all_password=:all_password,
                              who=:who

                              ");
                        $insert=$record->execute(array(
                              
                              'firstname' => $_POST['firstname'],
                              'lastname' => $_POST['lastname'],
                              'position' => $_POST['position'],
                              'organisation' => $_POST['organisation'],
                              'region' => $_POST['region'],
                              'email' => $_POST['email'],
                              'all_password' => $password,
                              'who' => $who

                              ));

                        if ($insert) {
                            $email = $_POST['email'];
                            $lastname = $_POST['lastname'];
                            $Lastname = ucfirst($lastname);
                            $all_password = $_POST['all_password'];

                            ini_set( 'display_errors', 1 );
                            error_reporting( E_ALL );
                        
                            $to = "$email";
                            $subject = "Registration completed to All-in-one4HER platform & project";
                            $message = "
                            Dear Mr/Ms " . $Lastname . ",
                
                            Thank you for registering to All-in-one4HER project and platform. Your password is: " . $all_password . ".
                            
                            We are only at the beginning phase of our project and just started to develop our platform aiming to facilitate your integration to the labour market in Flanders, Belgium. The other pages in our online platform will be activated later.
                            
                            You will receive automatic updates about our platform and be informed about our project activities, opportunities (career coaching, mentoring, etc.) by e-mail. You can also follow us on social media to get timely updates.
                            
                            If you have any questions, please don’t hesitate to contact us either by replying to this e-mail or by phone.
                            
                            Kind regards,
                            
                            All-in-one4HER Team 
                            
                        __________________________________________
                
                            Geachte heer / mevrouw " . $Lastname . ",
                            
                            Bedankt voor uw aanmelding voor het All-in-one4HER-project en -platform. Je wachtwoord is: " . $all_password . ".
                
                            We zijn nog maar in de beginfase van ons project en zijn net begonnen ons platform te ontwikkelen om uw integratie op de arbeidsmarkt in Vlaanderen, België, te vergemakkelijken. De andere pagina's op ons online platform worden later geactiveerd.
                            
                            U zal automatische updates over ons platform ontvangen en per e-mail op de hoogte gehouden worden van onze projectactiviteiten en kansen (loopbaancoaching, mentoring, enz.). U kunt ons ook volgen op sociale media om tijdig updates te ontvangen.
                            
                            Als u vragen heeft, aarzel niet a.u.b. om ons te contacteren door e-mail/telefoon.
                            
                            Met vriendelijke groeten,
                            
                            All-in-one4HER Team
                            
                            @: info@all-in-one4her.eu
                            www.all-in-one4her.eu
                            Phone: +32 (0) 2 801 13 58
                            Address: Beyond the Horizon ISSG 
                            Da Vincilaan 1, 1932 Zaventem Belgium
                            https://www.linkedin.com/groups/8765305/ 
                            https://www.facebook.com/Allinone4HER/ 
                            ";
                            $headers = "From: All-in-one4HER <info@all-in-one4her.eu>" . "\r\n";
                        
                            header("location:../welcome.php");
                            mail($to,$subject,$message,$headers);
                
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $position = $_POST['position'];
                            $organisation = $_POST['organisation'];
                            $region = $_POST['region'];
                            $email = $_POST['email'];
                
                            $to_2 = "info@all-in-one4her.eu";
                            $from_2 = "All-in-one4HER <info@all-in-one4her.eu>";
                            $subject_2 = "A new Government Institution is registered";
                            $message_2 = " 
                            
                            first name: " . $firstname . "
                
                            last name: " . $lastname . "
                
                            position: " . $position . "
                
                            organisation name: " . $organisation . "
                
                            region: " . $region . "
                
                            email: " . $email . "
                
                            ";
                            $headers_2 = 'From: ' . $from_2 . "\r\n";
                            mail($to_2, $subject_2, $message_2, $headers_2);
                          }
                        else {
                        echo "<p align='left'><font color=red  size='4pt'>*Registration failed!</font></p>";
                        #print_r($insert->errorInfo());
                              }
                  } else {
                        echo "<p align='left'><font color=red  size='4pt'>*This Email is already in use!</font></p>";
                        #print_r($insert->errorInfo());
                        }

            } else {
                  echo "<p align='left'><font color=red  size='4pt'>*Password is less more than 6 character!</font></p>";
            }

      } else {
           echo "<p align='left'><font color=red  size='4pt'>*Passwords do not match!</font></p>";
      }

}


// LOGIN

if (isset($_POST['login'])) {

      $email=$_POST['email'];
      $all_password=md5($_POST['all_password']);

      $usercheck=$db->prepare("SELECT * FROM users where email=:email and all_password=:all_password");
      $usercheck->execute(array(
            'email' => $email,
            'all_password' => $all_password
            
            ));
      $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);
      echo $count=$usercheck->rowCount();

      if ($count==1) {

            $_SESSION['user_id']=$userinfo['user_id'];
            $_SESSION['email']=$email;
            
            header("Location:../controlpanel/index.php");
            exit;

      } else {

            header("Location:../index.php?login=no");
            exit;
      }
      

}

//HER UPDATE PROFILE

if (isset($_POST['herupdate'])) {

      $user_id=$_SESSION['user_id'];
      

      $save=$db->prepare("UPDATE her SET
            firstname=:firstname,
            lastname=:lastname,
            
            birth=:birth,
            gender=:gender,
            country=:country,
            legalStatus=:legalStatus,
            degreeCountry=:degreeCountry, 
            town=:town
                
            WHERE user_id={$_POST['user_id']}");
      $update=$save->execute(array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            
            'birth' => $_POST['birth'],
            'gender' => $_POST['gender'],
            'country' => $_POST['country'],
            'legalStatus' => $_POST['legalStatus'],
            'degreeCountry' => $_POST['degreeCountry'],
            'town' => $_POST['town']

            ));

      if ($update) {

            Header("Location:../controlpanel/her-info.php?update=ok&user_id=$user_id");

      } else {

            Header("Location:../controlpanel/her-info.php?update=no&user_id=$user_id");
      }

}

//HER DELETE PROFILE

/*if ($_GET['herdelete']=="ok") {
      
      $sil=$db->prepare("DELETE from her where user_id=:user_id");
      $kontrol=$sil->execute(array(
            'user_id' => $_GET['user_id']
            ));

      if ($kontrol) {

            Header("Location:../production/ogrenciler.php?durum=ok");

      } else {

            Header("Location:../production/ogrenciler.php?durum=no");
      }

}*/

//BACKGROUND ADD

if (isset($_POST['backgroundadd'])) {


      $add=$db->prepare("INSERT INTO background SET
            
            type=:type,
            levelStudy=:levelStudy,
            diploma=:diploma,
            institution=:institution,
            country=:country,
            start_year=:start_year,
            end_year=:end_year,
            sector=:sector,
            title=:title,
            user_id=:user_id
            ");
      $insert=$add->execute(array(
            
            'type' => $_POST['type'],
            'levelStudy' => $_POST['levelStudy'],
            'diploma' => $_POST['diploma'],
            'institution' => $_POST['institution'],
            'country' => $_POST['country'],
            'start_year' => $_POST['start_year'],
            'end_year' => $_POST['end_year'],
            'sector' => $_POST['sector'],
            'title' => $_POST['title'],
            'user_id' => $_SESSION['user_id']
            

            ));

      if ($insert) {
   
            Header("Location:../controlpanel/her-background.php?bgadd=ok");

      } else {

            Header("Location:../controlpanel/her-background.php?bgadd=no");
      }

}

//LANGUAGE ADD

if (isset($_POST['languageadd'])) {


      $add=$db->prepare("INSERT INTO herlanguages SET
            
            her_id=:her_id,
            language_name=:language_name,
            level=:level
            ");
      $insert=$add->execute(array(
            
            'her_id' => $_POST['her_id'],
            'language_name' => $_POST['language_name'],
            'level' => $_POST['level']
            

            ));

      if ($insert) {
   
            Header("Location:../controlpanel/her-competences.php?langadd=ok");

      } else {

            Header("Location:../controlpanel/her-competences.php?langadd=no");
      }

}

//MOTIVATION ADD

if (isset($_POST['saveMotivation'])) {


      $add=$db->prepare("INSERT INTO motivation SET
            
            her_id=:her_id,
            study=:study,
            work=:work,
            sector=:sector,
            mentoring=:mentoring,
            coaching=:coaching
            ");
      $insert=$add->execute(array(
            
            'her_id' => $_POST['her_id'],
            'study' => $_POST['study'],
            'work' => $_POST['work'],
            'sector' => $_POST['sector'],
            'mentoring' => $_POST['mentoring'],
            'coaching' => $_POST['coaching']

            ));

      if ($insert) {
   
            Header("Location:../controlpanel/her-info.php?motivationadd=ok");

      } else {

            Header("Location:../controlpanel/her-info.php?motivationadd=no");
      }

}

//MOTIVATION UPDATE

if (isset($_POST['updateMotivation'])) {


      $save=$db->prepare("UPDATE motivation SET
            
            study=:study,
            work=:work,
            sector=:sector,
            mentoring=:mentoring,
            coaching=:coaching

            WHERE her_id={$_POST['her_id']}");
      $update=$save->execute(array(
            
            'study' => $_POST['study'],
            'work' => $_POST['work'],
            'sector' => $_POST['sector'],
            'mentoring' => $_POST['mentoring'],
            'coaching' => $_POST['coaching']

            ));

      if ($update) {
   
            Header("Location:../controlpanel/her-info.php?motivationupdate=ok");

      } else {

            Header("Location:../controlpanel/her-info.php?motivationupdate=no");
      }

}

//MOPP ADD

if (isset($_POST['addMopp'])) {



      $add=$db->prepare("INSERT INTO mopp SET
            
            her_id=:her_id,
            organisation_name=:organisation_name
            ");
      $insert=$add->execute(array(
            
            'her_id' => $_POST['her_id'],
            'organisation_name' => $_POST['organisation_name']

            ));



      if ($insert) {
   
            Header("Location:../controlpanel/her-info.php?moppadd=ok");

      } else {

            Header("Location:../controlpanel/her-info.php?moppadd=no");
      }

}


//MENTOR UPDATE PROFILE

if (isset($_POST['mentorupdate'])) {

      $user_id=$_POST['user_id'];
      

      $save=$db->prepare("UPDATE mentor SET
            firstname=:firstname,
            lastname=:lastname,
            gender=:gender,
            birth=:birth,
            country=:country,
            legalStatus=:legalStatus,
            job=:job,
            levelofStudy=:levelofStudy,
            sector=:sector,
            experience=:experience,
            tel=:tel
                
            WHERE user_id={$_POST['user_id']}");
      $update=$save->execute(array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'gender' => $_POST['gender'],
            'birth' => $_POST['birth'],
            'country' => $_POST['country'],
            'legalStatus' => $_POST['legalStatus'],
            'job' => $_POST['job'],
            'levelofStudy' => $_POST['levelofStudy'],
            'sector' => $_POST['sector'],
            'experience' => $_POST['experience'],
            'tel' => $_POST['tel']
            ));

      if ($update) {

            Header("Location:../controlpanel/mentor-info.php?update=ok&user_id=$user_id");

      } else {

            Header("Location:../controlpanel/mentor-info.php?update=no&user_id=$user_id");
      }

}


//MENTEE ADD

if (isset($_POST['addMentees'])) {



      $add=$db->prepare("UPDATE mentor SET
            
            mentees=:mentees

             WHERE user_id={$_SESSION['user_id']}
            ");
      $insert=$add->execute(array(
            
            
            'mentees' => $_POST['mentees']

            ));



      if ($insert) {
   
            Header("Location:../controlpanel/mentor-info.php?addMentees=ok");

      } else {

            Header("Location:../controlpanel/mentor-info.php?addMentees=no");
      }

}

if (isset($_POST['addNotes'])) {

 $her_id=$_POST['her_id'];
      
      $note_date=date("Y-m-d H:i:s");

      $add=$db->prepare("UPDATE her SET
            
            notes=:notes,
            note_date=:note_date

             WHERE her_id={$_POST['her_id']}
            ");
      $insert=$add->execute(array(
            
            
            'notes' => $_POST['notes'],
            'note_date' => $note_date

            ));



      if ($insert) {
   
            Header("Location:../controlpanel/mentor-hernetworking.php?addNotes=ok&her_id=$her_id");

      } else {

            Header("Location:../controlpanel/mentor-hernetworking.php?addNotes=no&her_id=$her_id");
      }

}



?>