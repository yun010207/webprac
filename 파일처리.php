<?php
	
	echo "<B><br> ※ 파일 업로드 프로그램을 테스트 해봅시다. </b><hr>";
	echo "전송할 파일을 선택하세요...";

?>

<form enctype="multipart/form-data" action="파일처리2.php" method="post">
	<input type="file" size="60" name="upload"><hr>
	<input type="submit" value=" >> 전송하기 << ">
</form>