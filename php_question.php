<?php
	header('Access-Control-Allow-Origin: *');
	/*Question : This page contain multiple array
	 * 		$employee array contain employee with employee_id, firstName etc.
	 * 		$employee_salary contain salary of employee
	 * 		$employee_status contain status of employee
	 * Now you will have to solve below questions : 
	 * 	a. Who is Head of Abhisek(7)
	 *  Note : Find by name eg: $name = "Abhisek"; Head is Sumita Nath
		b. List out all department  name
		* Note : Answer must be like Tech, Crm
		c. Who is CTO of Switchme.
		d. List out all employee whose age>23 and age<27
		e. add salary key in $employee array from $employee_salary array.
		* Note : Final array should be like : https://interview.switchme.in/php/arr_with_salary.php
		f. Modify $employee array : delete employee who has status Delete from $employee_status array
		* Note : Final array should be like : https://interview.switchme.in/php/arr_with_active_status.php
		* 
		* NOTE : YOU ARE NOT ALLOWED TO USE ANY INBUILT FUNCTION
		* NOTE : YOU ARE NOT ALLOWED TO USE ANY INBUILT FUNCTION
		* 
	* */
	
$employee = array
	(
	0=>
		array("employee_id"=>1, "firstName"=>"Zahir", "lastName"=>"Alam", "Age"=>25, "Company"=>"Switchme", "Role"=>"Developer", "Department"=>"Tech"
			,"Head"=>
				array("Id"=>3 , "Name"=>"Sourasis Roy")
		)
	,
	1=>
		array("employee_id"=>2, "firstName"=>"Amith", "lastName"=>"Manniken", "Age"=>25, "Company"=>"Switchme", "Role"=>"Developer", "Department"=>"Tech"
			,"Head"=>
				array("Id"=>3 , "Name"=>"Sourasis Roy")
		)
	,
	2=>
		array("employee_id"=>3, "firstName"=>"Sourasis", "lastName"=>"Roy", "Age"=>28, "Company"=>"Switchme", "Role"=>"CTO")
	,
	3=>
		array("employee_id"=>4, "firstName"=>"Aditya", "lastName"=>"Mishra", "Age"=>29, "Company"=>"Switchme", "Department"=>"Tech", "Role"=>"CEO")
	,
	4=>
		array("employee_id"=>5, "firstName"=>"Priti", "lastName"=>"Lata", "Age"=>24, "Company"=>"Switchme", "Role"=>"HR")
	,
	5=>
		array("employee_id"=>6, "firstName"=>"Sumita", "lastName"=>"Nath", "Age"=>24, "Company"=>"Switchme", "Role"=>"HLA Head", "Department"=>"Crm")
	,
	6=>
		array("employee_id"=>7, "firstName"=>"Tarini", "lastName"=>"Khanna", "Age"=>22, "Company"=>"Switchme", "Role"=>"Content Writer")
	,
	7=>
		array("employee_id"=>8, "firstName"=>"Abhisek", "lastName"=>"Soni", "Age"=>23, "Company"=>"Switchme", "Role"=>"HLA", "Department"=>"Crm"
			,"Head"=>
				array("Id"=>5 , "Name"=>"Sumita Nath")
		)
	,
	8=>
		array("employee_id"=>9, "firstName"=>"Ankit", "lastName"=>"Pump", "Age"=>23, "Company"=>"Switchme", "Role"=>"HLA", "Department"=>"Crm"
			,"Head"=>
				array("Id"=>5 , "Name"=>"Sumita Nath")
		)
	,
	9=>
		array("employee_id"=>10, "firstName"=>"Pogo", "lastName"=>"Laal", "Age"=>23, "Company"=>"Switchme", "Role"=>"Designer")
	,
	10=>
		array("employee_id"=>11, "firstName"=>"Sabina", "lastName"=>"Sekh", "Age"=>28, "Company"=>"Switchme", "Role"=>"HLA Head", "Department"=>"Crm")
	,
	11=>
		array("employee_id"=>12, "firstName"=>"Sanjay", "lastName"=>"Poudal", "Age"=>24, "Company"=>"Switchme", "Role"=>"HLA Head", "Department"=>"Crm"
			,"Head"=>
				array("Id"=>10 , "Name"=>"Sabina Sekh")
		)
	,
	);
	

$employee_salary = array
	(
	7=>
		array("employee_id"=>7, "salary"=>"55,000"
		)
	,
	2=>
		array("employee_id"=>2, "salary"=>"60,000"
		)
	,
	9=>
		array("employee_id"=>9, "salary"=>"50,000"
		)
	,
	10=>
		array("employee_id"=>10, "salary"=>"30,000"
		)
	,
	);


$employee_status = array
	(
	1=>
		array("employee_id"=>1, "status"=>"Active"
		)
	,
	2=>
		array("employee_id"=>2, "status"=>"Delete"
		)
	,
	11=>
		array("employee_id"=>11, "status"=>"Delete"
		)
	,
	10=>
		array("employee_id"=>10, "status"=>"Active"
		)
	,
	);
/*
###########################ANSWERS START FROM HERE##############################################################################
*/

// Ans 1
echo "1) ";
foreach($employee as $k => $val) {
    if($val['firstName'] == 'Abhisek'){
        print($val['Head']['Name']);
    }
}

echo "<br>";


// Ans 2
echo "2) " ;
$counter = array();	  	
foreach($employee as $k => $val) {
    if(!empty($val['Department'])) $counter[$val['Department']] = true;
}

foreach($counter as $k=>$val) {
    echo   $k.","; 
}

echo "<br>";

// Ans 3
echo "3) ";
foreach($employee as $k => $val) {
    if($val['Role'] == 'CTO') echo "CTO name is " . $val["firstName"] . " ".$val["lastName"]."\n"; 
}

echo "<br>";

// Ans 4
echo "4) ";
foreach($employee as $k => $val) {
    if($val['Age'] > 23 && $val['Age'] < 27) echo $val["firstName"] . " " .$val["lastName"]."\n"; 
}
echo "<br>";

 
     foreach ($employee_salary as $key => $value) {
          $employee[$key - 1]["salary"]= $value["salary"]; 
      } 




  foreach ($employee_status as $key => $value)
  {
      	if($value["status"]=="Delete")
      {        
            unset($employee[$key - 1]);
        } 
}
		
	
?>