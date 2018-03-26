<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>이미지 업로드 공부</title>
</head>
<body>


<form enctype="multipart/form-data" action="uploadok.php" method="post">
	 <!-- 8.클라이언트쪽 업로드 제한용량을 설정함-->
	<input type="hidden" name="MAX_FILE_SIZE" value="524288">

	<fieldset><legend>업로드할 사진파일(JPG,PNG)을 선택하세요(512K이내):</legend>

	<p><b>파일:</b> <input type="file" name="upload" /></p>

	</fieldset>
	<div align="center"><input type="submit" name="upload_form" value="업로드" /></div>
	<input type="hidden" name="upload_check" value="true" />
	<!-- 이름에 맞게 저장하기 위해 이름값 보낸다 -->
</form>
</body>
</html>
