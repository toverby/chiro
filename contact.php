<?php include_once('header.php');?>


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
      {
              require ('connector.php');
              $errors = array();
              if (empty($_POST['firstname']))
              {

                           $errors[] = 'You forgot to enter your first name.';

              } else {

              $fn = mysqli_real_escape_string($database, trim($_POST['firstname']));
              }

              if (empty($_POST['lastname']))
                                                            {
                          $errors[] = 'You forgot to enter your last name.';
              } else {

              $ln = mysqli_real_escape_string($database, trim($_POST['lastname']));
              }

              if (empty($_POST['email']))
                                                          {
                           $errors[] = 'You forgot to enter your email address.';
              } else {
              $e = mysqli_real_escape_string($database, trim($_POST['email']));
                                                        }

              if (empty($errors))
                  {

                                   $q = "INSERT INTO sql345918 (firstname, lastname, email,rdate) VALUES ('$fn', '$ln', '$e',  NOW())";

                      $r = @mysqli_query ($database, $q);

                      if ($r)
                      {

                         echo '<h1>Welcome to Meyerson Chiropractic Family</h1>
                                <p>By registering you will have  access to many options that make your less complicated, no more. For full video tutorial on how to navigate, use and learn about new features to come click the link below.</p><p><br /></p>';

                                          if (!empty ($errors))
                                          {
                                                                echo '<h1>Error!</h1>
                                                                      <p class="error">The following error(s) occurred:<br />';
                                                                      foreach ($errors as $msg)
                                                                        echo " - $msg<br />\n";

                                                                        echo '</p><p>Please try again.</p><p><br /></p>';

                                                                       echo '<h1>System Error</h1>
                                                                        <p class="error">You could not be registered due to a system error. We apologize for any inconvenience. Please call the Meyerson Chiropractic office at 410-274-xxxx</p>';

                                                                  echo '<p>' . mysqli_error($database) . '<br /><br />Query: ' . $q . '</p>';
                                              }  // End of if ($errors)
                           }

          mysqli_close($database,$r);

          exit();
            }
        }//end main conditional IF
?>

<div id="content">
		<link rel="stylesheet" href="style.css"  type="text/css" media="screen" />
		<h1>Contact Dr. Jason Meyerson for an appointment</h1>


                      <form action="contact.php" method="post">

                              <fieldset>

                                  <legend>Basic Information</legend>

             <p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" /></p>
        <p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" /></p>
           <p>Email Address: <input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /> </p>
                                  <p><input type="submit" name="submit" value="Click Here" /></p>

                             </fieldset>


                    </form>
        </div>
     
<?php include_once ('footer.html'); ?>