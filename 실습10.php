<?php
	echo "<h3>my-sql 연결 함수 사용</h3>";
	echo "<hr>";

	$db_host = "localhost";
	$db_user = "root";
	$db_passwd = "";

	$conn = mysqli_connect($db_host, $db_user);

	if($conn) {
		echo "> my-sql 서버에 성공적으로 연결되었습니다. <br><br>";
		echo " * 호스트 : ".$db_host."<br>";
		echo " * 사용자 : ".$db_user."<br>";
		echo " * 비밀번호 : ".$db_passwd."<br>";
		echo "> 성공적인 APM의 고수가 되십시오.<br><br>";
		echo "<hr>";
	}
	else {
		echo "<hr>";
		echo "....접속이 안 됩니다....<br>";
		echo "계정 정보, 비밀번호 정보, 네트워크 환경, 서버 환경을 확인 하시기 바랍니다.!!!<br>";
	}

	$db = mysqli_select_db($conn, "학사");


	if($db) {
		echo "> 데이터베이스 선택 성공 ... <br><br>";
		echo "> 선택한 데이터베이스는 <B> '학사' </B>입니다.<br><br>";
	}
	else {
		echo "> 데이터베이스 선택이 실패하였습니다....<br><br>";
		echo "> 프로그램 코드 및 데이터베이스 이름을 확인하시기 바랍니다. <br><br>";
	}

	/*
	$sql = "create table guest ( ";
	$sql = $sql. "id varchar(12) NOT NULL, ";
	$sql = $sql. "name varchar(12) NOT NULL, ";
	$sql = $sql. "sex char(4), ";
	$sql = $sql. "age int,  ";
	$sql = $sql. "point int, ";
	$sql = $sql. "primary key(id))";
	$sql = $sql. "default charset = utf8 ";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "테이블이 정상적으로 생성되었습니다.";
	}
	else {
		echo "테이블이 생성되지 않았습니다. 확인하시기 바랍니다.";
		exit;
	}
	

	$sql = "insert into guest values";
	$sql .= "('sagang', '강산애', '남', 23, 250)";
	$result = mysqli_query($conn, $sql);

	$sql = "insert into guest values";
	$sql .= "('sbhwang', '황산벌', '남', 37, 308)";
	$result = mysqli_query($conn, $sql);

	$sql = "insert into guest values";
	$sql .= "('grlee', '이겨례', '여', 19, 123)";
	$result = mysqli_query($conn, $sql);

	$sql = "insert into guest values";
	$sql .= "('cskin', '김창선', '남', 45, 569)";
	$result = mysqli_query($conn, $sql);

	$sql = "insert into guest values";
	$sql .= "('ershin', '신나라', '여', 33, 625)";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo "데이터가 정상적으로 입력되었습니다.";
	}
	else {
		echo "정상적인 데이터 입력 처리가 되지 않았습니다. 확인하시기 바랍니다.";
		exit;
	}
	*/

	echo "<hr>";
	$sql = "select * from guest";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

	echo ">>읽어온 총 행의 개수 : <B> [ {$count}  개 ] </B> <br>";
	echo "<hr>";

	$count = mysqli_num_fields($result);
	$test = mysqli_fetch_row($result);
	$test2 = mysqli_fetch_row($result);

	echo ">> <B> [ {$test[0]}, {$test[1]}, {$test[2]}, {$test[3]}, {$test[4]} ] </B><br>";
	echo ">> <B> [ {$test2[0]}, {$test2[1]}, {$test2[2]}, {$test2[3]}, {$test2[4]} ] </B><br>";

	echo ">>읽어온 총 행의 필드의 수 : <B> [ {$count}  개 ] </B> <br>";
	echo "<hr>";

	if(is_resource($conn)) {
		mysqli_close($conn);
		echo "데이터베이스 접속이 종료 되었습니다.";
	}
?>
