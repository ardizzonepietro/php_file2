<?php
echo '
<table align=center>
<tr><th><t1>benvenuto</t1></th></tr>
<tr><th><form action= file2.php method=post></th></tr>
<tr><th>dimmi un path: <input type = text name=path></th></tr>
<tr><th><input type=submit value=submit> </th></tr>
</table>
</form>
';
if(!empty($_POST['path'])){
$content[] = scandir($_POST['path']);
echo "<table align=center>";
for($i=0; $i<count(scandir($_POST['path'])); $i++){
if(is_dir($_POST['path']."/".scandir($_POST['path'])[$i])){
 //  echo "$file è una cartella</br>";
    echo "<tr><th><a href=ardizzone.pietro.tave.osdb.it/".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a> è una cartella</th></tr>";
}else{
    
    //echo "$file è un file</br>";
    echo "<tr><th><a href=".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a> è un file</th></tr>";
}
}

closedir($hn);
}
?>