<?php
	class guide_alocation{
	
		public $no_of_students;
		public $no_of_professors;
		public $professor_id_limit=array();
		public $professors=array(array());
		public $students=array(array());
		public $allocate=array(array());
		function __construct(){
			$this->no_of_professors;
			
		}
		function set_no_of_students($students){
			$this->no_of_students=$students;
		}
		function get_no_of_students(){
			return $this->no_of_students;
		}
		function set_no_of_professors($professors){
			$this->no_of_professors=$professors;
		}
		function get_no_of_professors(){
			return $this->no_of_professors;
		}
		//function set_profesor_limit(){
			//for($i=0;$i<get_no_of_professors;$i++){	
		//}
		function set_professors($professors){
			$this->professors=$professors;
		}
		function set_students($students){
			$this->students=$students;
		}
		
		function sort_students(){
			function custom_sort1($a,$b) {
               return $a['cgpa']<$b['cgpa'];
		    }
		    function custom_sort2($a,$b) {
               return $a['status']<$b['status'];
		    }
			usort($this->students, "custom_sort1");
			usort($this->students, "custom_sort2");	
		}
		function allocate_professors(){
			$i=0;
			$j=0;
			foreach($this->professors as $key=>$val){
				$limit=$val['limit'];
				while($limit>0){
					$this->allocate[$j]['teacher_id']=$val['id'];
					$this->allocate[$j]['student_id']=$this->students[$j]['id'];
					$limit--;
					$j++;
				}
				$i++;
			}
				
		}
		function get_allocation(){
			return $this->allocate;
		}
		
		}
		

?>