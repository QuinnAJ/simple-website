<!-- Constructs and sets data for a new event -->
<?php
  class EventItem{

		private $eventName, $eventDate, $eventDesc, $eventPrice;

		function __construct($name,$date,$desc,$price){
      $this->setName($name);
			$this->setDates($date);
			$this->setDesc($desc);
			$this->setPrice($price);
    }
		public function setName($name){
      $this->eventName = $name;
    }
		public function getName(){
			return $this->eventName;
		}
		public function setDates($date){
      $this->eventDate = $date;
    }
		public function getDates(){
			return $this->eventDate;
		}
		public function setDesc($desc){
      $this->eventDesc = $desc;
    }
		public function getDesc(){
			return $this->eventDesc;
		}
		public function setPrice($price){
      $this->eventPrice = $price;
    }
		public function getPrice(){
			return $this->eventPrice;
		}
	}
?>