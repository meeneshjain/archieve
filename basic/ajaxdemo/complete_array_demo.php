<?php 
echo '<b>array Reference  <br><br></b>';
echo '<b>Array() <br><br></b>';
$array=array('23','23','21','22','123');
$arr=array('123','22','12','234',21);
$array1=array('low','high','medium','left ','right','bottom');
$array2=array("mj"=>22,"rj"=>23);
$marray=array(
	array('6','21','78'),
	array('213','35','1'),
	array('14','8','100')
);
print_r(array('hello','hiii','how','when'));

echo '<br><br>';
echo '<b>chage key case  <br><br></b>';
print_r(array_change_key_case($array2,CASE_UPPER));
echo '<br>';
print_r(array_change_key_case($array1,CASE_UPPER));

echo '<br><br>';
echo '<b>array chunk <br><br></b>';

print_r(array_chunk($array1,2));


echo '<br><br>';
echo '<b> array combine  <br><br></b>';
print_r(array_combine($array,$array1));

echo '<br><br>';
echo '<b>array count value <br><br></b>';
print_r(array_count_values($array));

echo '<br><br>';
echo '<b>array fill <br><br></b>';
print_r(array_fill(1,10,'blue'));



echo '<br><br>';
echo '<b>array fill keys <br><br></b>';

print_r(array_fill_keys($array1,'blue'));



echo '<br><br>';
echo '<b>array flip <br><br></b>';

print_r(array_flip($array2));


echo '<br><br>';
echo '<b>array keys <br><br></b>';
print_r(array_keys($array1));

echo '<br><br>';
echo '<b>array map <br><br></b>';
function fun($array)
{
	return $array * $array ; 
}

print_r(array_map('fun',$array));



echo '<br><br>';
echo '<b>array merge <br><br></b>';

print_r(array_merge($arr,$array));


echo '<br><br>';
echo '<b>array difference <br><br></b>';

print_r(array_diff($array,$array1));


echo '<br><br>';
echo '<b>array interset <br><br></b>';
print_r(array_intersect($arr,$array));

echo '<br><br>';
echo '<b>array diff accociate userdefined  <br><br></b>';
function fun2($ar1,$ar2)
{
	if($ar1===$ar2)
	{
		return $ar1*$ar2;
	}
	//return ($ar1>$ar2)?1 : -1;
	
}
print_r(array_diff_uassoc($arr,$array,fun2));



echo '<br><br>';
echo '<b>array merge recursive  <br><br></b>';

print_r(array_merge_recursive($arr,$array));


echo '<br><br>';
echo '<b>array multi sort <br><br></b>';

print_r(array_multisort($array,$arr));


echo '<br><br>';
echo '<b>array pad <br><br></b>';

print_r(array_pad($array,7,'blue'));



echo '<br><br>';
echo '<b>array pop <br><br></b>';

print_r(array_pop($arr));

echo '<br><br>';
echo '<b>array push <br><br></b>';

print_r(array_push($arr,"blue","red",'green'));

echo '<br><br>';
echo '<b>array rand  <br><br></b>';
$ar_random = array_rand($arr,3);
echo $arr[$ar_random[0]];


echo '<br><br>';
echo '<b>array reduce <br><br></b>';

function fun3($ar1,$ar2)
{
	return $ar1 .'* '. $ar2 ;  
}

print_r(array_reduce($arr,fun3));


echo '<br><br>';
echo '<b>array replace <br><br></b>';

print_r(array_replace($array,$arr));


echo '<br><br>';
echo '<b>array reverse <br><br></b>';

print_r(array_reverse($array1));


echo '<br><br>';
echo '<b>array search <br><br></b>';
echo array_search('bottom',$array1);
echo '<br>';
print_r(array_search('bottom',$array1));


echo '<br><br>';
echo '<b>array shift <br><br></b>';

print_r(array_shift($arr));


echo '<br><br>';
echo '<b>array product <br><br></b>';

print_r(array_product($array2));


echo '<br><br>';
echo '<b>array slice <br><br></b>';

print_r(array_slice($arr,2));


echo '<br><br>';
echo '<b>array splice <br><br></b>';

print_r(array_splice($arr,0,2,$array));

	

echo '<br><br>';
echo '<b>array sum <br><br></b>';

print_r(array_sum($array));



echo '<br><br>';
echo '<b>array unique <br><br></b>';
$arr_same=array('12','33','33','33','22','12','12','33','55','23','12','1234');
print_r(array_unique($arr_same));

echo '<br><br>';
echo '<b>array unshift <br><br></b>';
array_unshift($array,'blue');
print_r($arr);

echo '<br><br>';
echo '<b>array values <br><br></b>';

print_r(array_values($array2));

echo '<br><br>';
echo '<b>array walk <br><br></b>';
//array_walk($arr,"fun4");
function fun4($values,$keys)
{
	echo  'the values '.$values ." and the corresponding key ". $keys ; 
	echo '<br>';
	
}
array_walk($arr,"fun4");


echo '<br><br>';
echo '<b>array  sort <br><br></b>';

sort($arr);
$count = count($arr);

for($x=0 ; $x <=$count; $x++)
{
	
	echo $arr[$x];
	echo '<br>';
}
echo '-------------------------<br>';
foreach($arr as $value)
{
	print_r( $value);
	echo '<br>';
}



echo '<br><br>';
echo '<b>array rsort  <br><br></b>';
rsort($arr);

foreach($arr as $value)
echo $value .'<br>';



echo '<br><br>';
echo '<b>array arsort  <br><br></b>';

arsort($arr);

foreach($arr as $keys=>$values)
{
	echo 'keys = '.$keys.' and values = '.$values.' ';
	echo '<br>';
}

echo '<br><br>';
echo '<b>array asort  <br><br></b>';

asort($arr);

foreach($arr as $keys => $values)
{
		echo 'keys = '.$keys.' and values = '.$values.' ';
		echo '<br>';
}

echo '<br><br>';
echo '<b>array current   <br><br></b>';
echo current($array1);

echo '<br><br>';
echo '<b>array next   <br><br></b>';
echo next($array1);

echo '<br><br>';
echo '<b>array  previous <br><br></b>';
echo prev($array1);

echo '<br><br>';
echo '<b>array reset   <br><br></b>';
echo reset($array1);

echo '<br><br>';
echo '<b>array end  <br><br></b>';
echo end($array1);
echo '<br><br>';
echo '<b>array shuffle   <br><br></b>';
shuffle($arr);

foreach($arr as $keys => $values)
{
	echo 'keys are = '.$keys.' and values are = '.$values.'';
	echo '<br>';
}

echo '<br><br>';
echo '<b>array   sizeof <br><br></b>';
echo sizeof($arr);

echo '<br><br>';
echo '<b>array each  <br><br></b>';
print_r(each($array));

echo '<br><br>';
echo '<b>array  in_array  <br><br></b>';

if(in_array('21',$arr))
{
	echo 'match found';
}
else
{
	echo 'match not found';
}

echo '<br><br>';
echo '<b>array range   <br><br></b>';

$number = range(0,10);
print_r($number);


echo '<br><br>';
echo '<b>array pos   <br><br></b>';
echo pos($array1);


echo '<br><br>';
echo '<b> key   <br><br></b>';
echo key($array2);











































































?>
