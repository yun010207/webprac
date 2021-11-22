<!DOCTYPE html>

<html>
	<head>
		<title> FORM 태그와 컨트롤 - 회원등록 </title>
	</head>

	<body>
		<br><h2><center> 회원등록 화면</center></h2>

		<form method="post" action="입력처리2.php">
			<center>
				<table border="1" bordercolor="blue" width=840 cellspacing="1" cellpadding="5">
					<tr>
						<td width="250" align="right"> 아이디 : </td>
						<td width="330">
							<input type="text" size=10 maxlength=10 name="id">
						</td>
						<td width="250" align="right"> 성명 : </td>
						<td width="300">
							<input type="text" size=10 maxlength=10 name="name">
						</td>
					</tr>
					<tr>
						<td align="right"> 비밀번호 : </td>
						<td>
							<input type="password" size=10 maxlength="10" name="pw1">
						</td>
						<td align="right"> 비밀번호 확인 : </td>
						<td>
							<input type="password" size=10 maxlength="10" name="pw2">
						</td>
					</tr>

					<tr>
						<td align="right"> 핸드폰 : </td>
						<td>
							<select name="p1">
								<option value=" "> 선택 </option>
								<option value="010 "> 010 </option>
								<option value="011 "> 011 </option>
								<option value="016 "> 016 </option>
								<option value="017 "> 017 </option>
								<option value="019 "> 019 </option>
							</select> - 
							<input type="text" size="4" name="p2" maxlength="4"> - 
							<input type="text" size="4" name="p3" maxlength="4">
						</td>

						<td align="right"> 성별 : </td>
						<td>
							<input type="radio" name="sex" value="여자" checked> 여
							<input type="radio" name="sex" value="남자"> 남
						</td>
					</tr>
					<tr>
						<td align="right"> 주소 : </td>
						<td colspan="3">
							<input type="text" size="67" name="addr">
						</td>
					</tr>

					<tr>
						<td align="right"> 남기고 싶은 글 : </td>
						<td colspan="3">
							<textarea name="memo" rows=8 cols=64></textarea>
						</td>
					</tr>
				</table>

				<br>

				<table border=0 width=840>
					<tr>
						<td align="center">
							<input type="submit" value="◀ 회원등록 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="▶ 다시작성 ◀">
						</td>
					</tr>
				</table>
				<center>
					<input type="hidden" name="thema" value="회원등록 서식">
				</center>

			</center>
		</form>
	</body>
</html>