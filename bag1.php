<!DOCTYPE html>
<html>
<body>
<h2> Soal nomor 1</h2>
<h3> Irisan 2 array</h3>
<?php
$a_arr = array( 'M' =>'Mango', 
			    'A' =>	'Aple', 
				'Me'=>	'Melon' , 
				'O' => 'Orange' , 
				'P'=>	'Pinacle'
				);
$b_arr = array('M'=>'Mango', 
                'P'=>	'Pinacle', 
                'Pe'=> 'Pears'
);		
print_r(array_intersect($a_arr, $b_arr));
?>
<h3> Gabungan 2 array</h3>
<?php
$a_arr = array( 'M' =>'Mango', 
			    'A' =>	'Aple', 
				'Me'=>	'Melon' , 
				'O' => 'Orange' , 
				'P'=>	'Pinacle'
				);
$b_arr = array('M'=>'Mango', 
                'P'=>	'Pinacle', 
                'Pe'=> 'Pears'
);		
print_r(array_merge($a_arr,$b_arr));
?>
<h3> Selisih 2 array</h3>
<?php
$a_arr = array( 'M' =>'Mango', 
			    'A' =>	'Aple', 
				'Me'=>	'Melon' , 
				'O' => 'Orange' , 
				'P'=>	'Pinacle'
				);
$b_arr = array('M'=>'Mango', 
                'P'=>	'Pinacle', 
                'Pe'=> 'Pears'
);		
print_r(array_diff($a_arr,$b_arr));
?>
<h2>Soal nomor 2</h2>
<?php
	$obj1 = new stdClass;
	$obj1 -> code = 00000000;
	$obj1 -> name = 'Lorem';
	
	$obj2 = new stdClass;
	$obj2 -> code = 00000000;
	$obj2 -> name = 'Ipsum';
	
	$tes = array($obj1, $obj2);

var_dump($tes);
?>

</body>
</html>