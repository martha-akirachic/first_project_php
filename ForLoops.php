<?php
for($count=0;$count<=10;$count++){
    echo $count.",";
}
?>

<br />
<?php
 for($count=20;$count>0;$count--){
     if($count %2==0){
         echo"{$count} is even.<br />";
     }else{
         echo"{$count} is odd.<br />";
     }
 }
 ?>