<?php 

echo "<b>String</b> -  ".  $string_demo = "hello world How are you .... ! ";
echo '<br><br>';
echo  '<b>addcslashes<br></b>';
echo  addcslashes($string_demo,'o');

echo '<br><br>';
echo '<b>addslashes<br><br></b>';
echo addslashes("what does 'print' means");

echo '<br><br><b> bin2hex <br><br></b>';
$str="hello";
echo bin2hex($str);

echo '<br><br>';
echo '<b> back to hex <br><br></b>';
echo pack("H*", bin2hex($str));


echo '<br><br>';
echo '<b> chop <br><br></b>';
echo chop($string_demo, "you .... ! ");

echo '<br><br>';
echo '<b> chr <br><br></b>';
echo chr(52)."<br>";
echo chr(052).'<br>';
echo chr(0x52)."<br>";
$str_char=chr(61);

echo "you ".$str_char." me";



echo '<br><br>';
echo '<b> chunk split<br><br></b>';
echo chunk_split($string_demo,2,".");

echo '<br><br>';
echo '<b> convert cyr string <br><br></b>';
echo convert_cyr_string($string_demo,'w','d');

echo '<br><br>';
echo '<b> convert uuencode <br><br></b>';
echo $string_convert= convert_uuencode($string_demo);
echo '<br><br>';
echo '<b> convert uudecode <br><br></b>';
echo convert_uudecode($string_convert);

echo '<br><br>';
echo '<b> count character<br><br></b>';
echo count_chars($string_demo,3)."<br><br>";
echo count_chars("hello",4).'<br>';
$str_array=count_chars($string_demo,1);
foreach($str_array as $key=>$value)
{
	echo "character key &nbsp; <b> ".chr($key) .' </b> &nbsp; Values '.$value.'<br>';
}

echo '<br><br>';
echo '<b> crc32<br><br></b>';
echo $str_crc =crc32("hello world")."<br>";
printf($str_crc);


echo '<br><br>';
echo '<b> crypt <br><br></b>';
echo crypt("hello",'5')."<br>";
echo(crypt("hello",'5'));


echo '<br><br>';
echo '<b> explode <br><br></b>';

print_r(explode(" ",$string_demo));


echo '<br><br>';
echo '<b> fprintf <br><br></b>';
$number = 123;
$file = fopen("test.txt","w");
fprintf($file,"With 2 decimals: %1\$.2f \nWith no decimals: %1\$u",$number);


echo '<br><br>';
echo '<b> get html translation table  <br><br></b>';
print_r(get_html_translation_table());
echo '<br>';
 
print_r(get_html_translation_table(HTML_ENTITIES));



echo '<br><br>';
echo '<b> hebrev <br><br></b>';
echo 'á çùåï äúùñ ====>';
echo hebrev("á çùåï äúùñ");


echo '<br><br>';
echo '<b> hex2bin <br><br></b>';

$str_1='hello world';
$str_2 = bin2hex($str_1);
echo $str_2."<br>";
//echo hex2bin($str_2);



echo '<br><br>';
echo '<b> html entites <br><br></b>';

echo htmlentities($string_demo);
echo '<br>';
echo html_entity_decode($string_demo);



echo '<br><br>';
echo '<b> html special characters  <br><br></b>';


$str222="10 &lt &gt 1 ";
echo $str222."<br>";
echo htmlspecialchars($str222);
echo '<br>';
echo htmlspecialchars_decode($str222);


echo '<br><br>';
echo '<b> lcfirst<br><br></b>';
$string="HELLO WORLD";
echo lcfirst($string);


echo '<br><br>';
echo '<b>leveshtein  <br><br></b>';

//echo levenshtein("hello world","world",5,10);






echo '<br><br>';
echo '<b> localeconv <br><br></b>';
print_r(localeconv());



echo '<br><br>';
echo '<b> ltrim  <br><br></b>';
$str_trim=" a   a sa   !";
echo ltrim($str_trim);







echo '<br><br>';
echo '<b> md5 <br><br></b>';
echo md5("hello");
echo '<br>';
echo md5("hello",true);





echo '<br><br>';
echo '<b>md5_file  <br><br></b>';
$filename='text.txt';
echo $md5_enc= md5_file($filename);
file_put_contents("md5file.txt",$md5_enc);





echo '<br><br>';
echo '<b> metaphone<br><br></b>';
echo metaphone("hello world");
echo '<br>';
echo metaphone("assistance");
echo '<br>';
echo metaphone("assistant");



echo '<br><br>';
echo '<b> nl2br()<br><br></b>';

echo nl2br("hello 
world and 
this is 
entered ");



echo '<br><br>';
echo '<b> number Format<br><br></b>';
echo number_format('10000000000');
echo '<br>';
echo number_format('100000000',2,'',".");



echo '<br><br>';
echo '<b> print() <br><br></b>';

print 'hello <br>';
print('hello');





echo '<br><br>';
echo '<b> ord()<br><br></b>';
echo ord("world");
echo '<br>'.ord("i");
echo '<br>' . ord('tu');






echo '<br><br>';
echo '<b> parse_str<br><br></b>';
parse_str("name=meenesh & lastname=jain & age=50");
echo $name .' <br>'. $lastname .'<br>'. $age;
echo '<br>';

echo 'in form of array <br>';
parse_str("name=meenesh & lastname=jain & age=50",$myarray);
print_r($myarray);


echo '<br><br>';
echo '<b>printf() <br><br></b>';
$number=123;
$str="indore";
printf("there are more than %u bicycle in %s",$number,$str);


echo '<br><br>';
echo '<b>quoted printable decode  & quoted printable encode <br><br></b>';

echo quoted_printable_decode("hello=0Aworld");
echo quoted_printable_encode("hello world");




echo '<br><br>';
echo '<b>quotemeta() <br><br></b>';

echo quotemeta("HEllo world.. (this is meenesh?)");


echo '<br><br>';
echo '<b>setlocale() <br><br></b>';

echo setlocale(LC_TIME,NULL);


echo '<br><br>';
echo '<b>sha1() <br><br></b>';

echo sha1("hello world ");
echo '<br>';
echo sha1('hello world',TRUE);


echo '<br><br>';
echo '<b>similar text() <br><br></b>';

echo similar_text("hello world how are you","hello how are you humans");

echo '<br>';
echo similar_text("hello","hii hello",$percent);
echo '<br>'.$percent;


echo '<br><br>';
echo '<b>str_getCSV() <br><br></b>';

print_r( str_getCSV("hello world "," . "));


echo '<br><br>';
echo '<b>str replace insensitive  <br><br></b>';

echo str_ireplace('hello','hii','hello world how are you ');


echo '<br><br>';
echo '<b>str replace sensitive <br><br></b>';

echo str_replace('Hello World','Hiii Indore','Hello World ');





echo '<br><br>';
echo '<b> Str pad<br><br></b>';

echo str_pad('hello world ','50','*');


echo '<br><br>';
echo '<b>str_repeat <br><br></b>';

echo str_repeat("hello ",5);


echo '<br><br>';
echo '<b>str_rot13 <br><br></b>';

echo str_rot13("hello world ");
echo '<br>';
echo str_rot13("uryyb jbeyq");

echo '<br><br>';
echo '<b>str_shuffle <br><br></b>';

echo str_shuffle("hello world ");


echo '<br><br>';
echo '<b>str_split <br><br></b>';

print_r( str_split('hello world'));


echo '<br><br>';
echo '<b>str_word_count <br><br></b>';

echo str_word_count('Meenesh Jain');


echo '<br><br>';
echo '<b>strcmp - string compare insensitive  <br><br></b>';

echo  strcmp("hello world","HELLO WORLD");
echo '<br><br>';
echo '<b>strcasesmp - string compare sensitve <br><br></b>';
echo strcasecmp('HELLO','hiiii',6);


echo '<br><br>';
echo '<b>strip_tags <br><br></b>';

echo strip_tags('<b>meenesh jain</b> <br> is a rockstar');




echo '<br><br>';
echo '<b>stripcslahes <br><br></b>';
echo $str2222= addcslashes("hello world how ",'o');
echo '<br>'. stripcslashes($str2222);


echo '<br><br>';
echo '<b>stripslashes <br><br></b>';

echo $str1234=addslashes('hello world "this is india " and "Indore"');
echo '<br>';
echo stripslashes($str1234);


echo '<br><br>';
echo '<b>strlen <br><br></b>';

echo strlen("MEENESH JAIN");
echo '<br><br>';
echo '<b>stripos<br><br></b>';

echo stripos('i love php,i love php too','php');


echo '<br><br>';
echo '<b>strpos <br><br></b>';

echo strpos('I LOVE PHP , I LOVE php','love');

echo '<br><br>';
echo '<b>stristr <br><br></b>';

echo stristr("hello world ",'world');

echo '<br><br>';
echo '<b>strncmp <br><br></b>';

echo strncmp('hello world ','hello world',6);


echo '<br><br>';
echo '<b>strspn <br><br></b>';

echo strspn("hello world this is meenesh jain ","e");

echo '<br><br>';
echo '<b>substr() <br><br></b>';

echo substr("hello world",5);


echo '<br><br>';
echo '<b>strstr <br><br></b>';
echo strstr("hello India","hello India");


echo '<br><br>';
echo '<b>trim <br><br></b>';

echo trim("        heelo aad asd ass df g h h h h h         sd             ","\0");

echo '<br><br>';
echo '<b>ucfirst <br><br></b>';

echo ucfirst("hello wordl");


echo '<br><br>';
echo '<b>ucwords <br><br></b>';
echo ucwords("hello world How are you");
echo '<br>';

echo '<br><br>';
echo '<b>strtolower <br><br></b>';
echo strtolower("HIIIII SDSOS SD S S S S ");



echo '<br><br>';
echo '<b>strtoupper <br><br></b>';
 echo strtoupper("sadas asd asdasd asdadas");

echo '<br><br>';
echo '<b>wordwrap <br><br></b>';

echo wordwrap("hello world how are you ","5","<br>");

echo '<br><br>';
echo '<b>substr_compare <br><br></b>';

echo substr_compare('hello world','hello world',0);
echo '<br>';
echo substr_compare('hello world','hello india',0);

?>
