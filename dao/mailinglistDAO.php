<?php
require_once('abstractDAO.php');
require_once('./model/mailinglist.php');

class mailinglistDAO extends abstractDAO {
    
		//connects to database
    function __construct() {
        try{
            parent::__construct();
        } catch(mysqli_sql_exception $e){
            throw $e;
        }
    }
    
		//retrieves data from mailing list
    public function getMailingList(){
        $result = $this->mysqli->query('SELECT * FROM mailinglist');
        $mailingLists = Array();
        
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
                $mailingList = new MailingList($row['firstName'], $row['lastName'], $row['phoneNumber'], $row['emailAddress'], $row['username'], $row['referrer']);
                $mailingLists[] = $mailingList;
            }
            $result->free();
            return $mailingLists;
        }
        $result->free();
        return false;
    }

		//adds data to database, assigns variables to data first to avoid a warning while passing
		//values by reference from an array
    public function addMailingList($mailingList){
        if(!$this->mysqli->connect_errno){
						$query = 'INSERT INTO mailinglist (firstName, lastName, phoneNumber, emailAddress, username, referrer) 
						VALUES (?,?,?,?,?,?)';
            $stmt = $this->mysqli->prepare($query);
						$firstN = $mailingList->getFirstName();
						$lastN = $mailingList->getLastName();
						$phoneN = $mailingList->getPhoneNumber();
						$emailA =  $mailingList->getEmailAddress();
						$userN = $mailingList->getUsername();
						$ref = $mailingList->getReferrer();
            $stmt->bind_param('ssssss',
                    $firstN, 
                    $lastN,
										$phoneN,
										$emailA,
										$userN,
										$ref);
            $stmt->execute();
            if($stmt->error){
                return $stmt->error;
            } else {
                return $mailingList->getFirstName() . ' ' . $mailingList->getLastName() . ' added successfully!';
            }
        } else {
            return 'Could not connect to Database.';
        }
    }
}
?>
