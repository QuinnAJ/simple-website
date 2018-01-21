<?php require_once('./dao/mailinglistDAO.php'); ?>
<?php include("header.php");?>
  <div id="content" class="clearfix">
	<?php
				//Builds and displays errors when fields are left empty
        try{
            $mailinglistDAO = new mailinglistDAO();
            $hasError = false;
            $errorMessages = Array();

            if(isset($_POST['customerfName']) || 
                isset($_POST['customerlName']) ||
								isset($_POST['phoneNumber']) ||
								isset($_POST['emailAddress']) ||
								isset($_POST['username']) ||
								isset($_POST['referrer'])){

                if($_POST['customerfName'] == ""){
                    $errorMessages['firstNameError'] = "Please enter a first name.";
                    $hasError = true;
                }

                if($_POST['customerlName'] == ""){
                    $errorMessages['lastNameError'] = "Please enter a last name.";
                    $hasError = true;
                }
								
								if($_POST['phoneNumber'] == ""){
                    $errorMessages['phoneNumberError'] = "Please enter a phone number.";
                    $hasError = true;
                }
								
								if($_POST['emailAddress'] == ""){
                    $errorMessages['emailAddressError'] = "Please enter an email address.";
                    $hasError = true;
                }
								
								if($_POST['username'] == ""){
                    $errorMessages['usernameError'] = "Please enter a username.";
                    $hasError = true;
                }
								
								if($_POST['referral'] == "Select referer"){
                    $errorMessages['referrerError'] = "Please enter a referrer type.";
                    $hasError = true;
                }

                if(!$hasError){
                    $mailingList = new MailingList($_POST['customerfName'], $_POST['customerlName'], 
																										$_POST['phoneNumber'], $_POST['emailAddress'],
																										$_POST['username'], $_POST['referral']);
                    $addSuccess = $mailinglistDAO->addMailingList($mailingList);
                    echo '<h3>' . $addSuccess . '</h3>';
                }
            }
				
        ?>
  <aside>
    <h2>Mailing Address</h2>
    <h3>1385 Woodroffe Ave<br>
      Ottawa, ON K4C1A4</h3>
    <h2>Phone Number</h2>
    <h3>(613)727-4723</h3>
    <h2>Fax Number</h2>
    <h3>(613)555-1212</h3>
    <h2>Email Address</h2>
    <h3>info@wpeatery.com</h3>
    </aside>
    <div class="main">
      <h1>Sign up for our newsletter</h1>
      <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
      <form name="frmNewsletter" id="frmNewsletter" method="post" action="contact.php">
        <table>
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="customerfName" id="customerfName" size='40'>
						<?php 
                if(isset($errorMessages['firstNameError'])){
                        echo '<span style=\'color:red\'>' . $errorMessages['firstNameError'] . '</span>';
                      }
            ?></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="customerlName" id="customerlName" size='40'>
						<?php 
                if(isset($errorMessages['lastNameError'])){
                        echo '<span style=\'color:red\'>' . $errorMessages['lastNameError'] . '</span>';
                      }
            ?></td>
          </tr>
          <tr>
            <td>Phone Number:</td>
            <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'>
						<?php 
                if(isset($errorMessages['phoneNumberError'])){
                        echo '<span style=\'color:red\'>' . $errorMessages['phoneNumberError'] . '</span>';
                      }
            ?></td>
          </tr>
          <tr>
            <td>Email Address:</td>
            <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
						<?php 
                if(isset($errorMessages['emailAddressError'])){
                        echo '<span style=\'color:red\'>' . $errorMessages['emailAddressError'] . '</span>';
                      }
            ?></td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id="username" size='20'>
						<?php 
                if(isset($errorMessages['usernameError'])){
                        echo '<span style=\'color:red\'>' . $errorMessages['usernameError'] . '</span>';
                      }
            ?></td>
          </tr>
          <tr>
            <td>How did you hear<br> about us?</td>
            <td>
              <select name="referral" size="1">
                <option>Select referer</option>
                <option value="newspaper">Newspaper</option>
                <option value="radio">Radio</option>
                <option value="tv">Television</option>
                <option value="other">Other</option>
              </select>
							<?php 
                if(isset($errorMessages['referrerError'])){
                        echo '<span style=\'color:red\'>' . $errorMessages['referrerError'] . '</span>';
                      }
            ?>
            </td>
          </tr>
          <tr>
            <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
          </tr>
        </table>
				<?php
				  }catch(Exception $e){
            echo '<h3>Error on page.</h3>';
            echo '<p>' . $e->getMessage() . '</p>';            
        }
        ?>
      </form>
    </div><!-- End Main -->
<?php include("footer.php");?>