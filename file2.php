<?php
echo '
<t1>benvenuto</t1></br>
<form action= file2.php method=post>
dimmi un path: <input type = text name=path>
<input type=submit value=submit> 
</form>
';
if(!empty($_POST['path'])){
$content[] = scandir($_POST['path']);
for($i=0; $i<count(scandir($_POST['path'])); $i++){
if(is_dir($_POST['path']."/".scandir($_POST['path'])[$i])){
 //  echo "$file è una cartella</br>";
    echo "<a href=ardizzone.pietro.tave.osdb.it/".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a> è una cartella</br>";
}else{
    
    //echo "$file è un file</br>";
    echo "<a href=".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a> è un file</br>";
}
}
closedir($hn);
}
?>