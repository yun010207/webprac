<?php

	echo "<br><b> ※ 업로드 된 파일의 정보 확인 </b><hr>";

	$up = $_FILES['upload']['name'];

	if(move_uploaded_file($_FILES['upload']['tmp_name'], $up))
	{
		echo "파일 업로드 성공 !! <p>";
		echo " 1.파일 이름 : {$_FILES['upload']['name']}<br>";
		echo " 2.파일 타입 : {$_FILES['upload']['type']}<br>";
		echo " 1.파일 크기 : {$_FILES['upload']['size']} byte<br>";
		echo " 1.파일 이름 : {$_FILES['upload']['tmp_name']}<br>";
	}
	else {
		echo " 파일 업로드 실패 !!";
	}