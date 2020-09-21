<?php

$b='5 SEPT 2013';
                $b1 = date("m/d/Y",strtotime($b));
                $b2 = date("Y-m-d",strtotime($b));            
                $b3 = date("m/d/Y",strtotime($b));
                echo $b1;
				echo "<br>
<br>
";
echo $b2 . " <br>
" . $b3 ;
				//convert string date to php date    03/07/2013 mm/dd/yy

?>