<!-- Gets data from database and displays in a table -->
<?php require_once('./dao/mailinglistDAO.php'); ?>
<?php include("header.php");?>
  <div id="content" class="clearfix"><p>
 <?php
				$mailinglistDAO = new mailinglistDAO();
        $mailingLists = $mailinglistDAO->getMailingList();
            if($mailingLists){
                echo '<table border=\'1\'>';
                echo '<tr><th>Full Name</th><th>Email</th><th>Username</th><th>Phone</th></tr>';
                foreach($mailingLists as $mailingList){
                    echo '<tr>';
                    echo '<td>' . $mailingList->getFirstName() .' '. $mailingList->getLastName() . '</td>';
										echo '<td>' . $mailingList->getEmailAddress() .'</td>';
										echo '<td>' . $mailingList->getUsername() .'</td>';
										echo '<td>' . $mailingList->getPhoneNumber() .'</td>';
                    echo '</tr>';
                }
								echo '</table>';
            }
?></p>
<?php include("footer.php"); ?>