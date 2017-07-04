<?php
	include('includes/guide.php');
	include('includes/mysqlDB.php');
	$ob=new guide_alocation();
	$students=array(array('id'=>112,'cgpa'=>4.5,'status'=>0),
				array('id'=>113,'cgpa'=>5.5,'status'=>1),
				array('id'=>114,'cgpa'=>6.5,'status'=>0),
				array('id'=>115,'cgpa'=>7.5,'status'=>1),
				array('id'=>116,'cgpa'=>8.5,'status'=>1),
				array('id'=>117,'cgpa'=>9.5,'status'=>1),
				array('id'=>118,'cgpa'=>6.75,'status'=>0),
				array('id'=>119,'cgpa'=>6.75,'status'=>1),
				array('id'=>120,'cgpa'=>6.75,'status'=>1),
				array('id'=>121,'cgpa'=>6.75,'status'=>1)
			);
	
		$ob->set_students($students);
		
		foreach($students as $key=>$val){
			print_r($val);
			echo "</br>";
		}
	echo "</br> Teachers Sections..</br>";
	
	$professors=array(array('id'=>91,'limit'=>2),
					array('id'=>92,'limit'=>2),
					array('id'=>93,'limit'=>3),
					array('id'=>94,'limit'=>2)
			);
		$ob->set_professors($professors);
		foreach($professors as $key=>$val){
			print_r($val);
			echo "</br>";
		}
		
		$ob->sort_students();
		$ob->allocate_professors();
		$allocate=$ob->get_allocation();
		
		//allocate[0]['teacher_id']=134;
		//print_r($allocate[0]['teacher_id']);
		
		echo "</br> Alloction </br>";
		
		
		foreach($allocate as $key=>$val){
			print_r($val);
			echo "</br>";
		}
		
		$db=new mysqlDB("localhost","root","");
		$db->connection_open();
		print_r($db->get_error());
 ?>