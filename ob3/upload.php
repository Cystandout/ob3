<? 
$upload_dir=getcwd()."\\image\\";
function makefilename(){
	$curtime=getdate();
	$filename=$curtime['year'].$curtime['mon'].$curtime['mday'].$curtime['hours'].$curtime['minutes'].$curtime['seconds'].".jpg";
	return $filename;
}
$newfilename=makefilename();
$newfile=$upload_dir.$newfilename;
if(file_exists($_FILES['upfile']['tmp_name'])){
	move_uploaded_file($_FILES['upfile']['tmp_name'],$newfile);
echo '上传成功';
}
else echo'上传失败';
?>