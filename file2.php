<?php
echo '
<t1>benvenuto</t1></br>
<form action= file2.php method=post>
dimmi un path: <input type = text name=path>
<input type=submit value=submit> 
</form>
';
if(!empty($_POST['path'])){
$hn = opendir($_POST['path']);
while($file = readdir($hn)){
if(is_dir($_POST['path']."/".$file)){
 //  echo "$file è una cartella</br>";
    echo "<a href=ardizzone.pietro.tave.osdb.it/".$_POST['path']."/".$file.">".$file."</a> è una cartella</br>";
}else{
    
    //echo "$file è un file</br>";
    echo "<a href=".$_POST['path']."/".$file.">".$file."</a> è un file</br>";
}
}
closedir($hn);
}
?>