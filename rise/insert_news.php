<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/filecheck.js"></script>

<h1>RISE NEWS 登録画面</h1>

<form action = "service/insert_news_service.php" enctype="multipart/form-data" onsubmit="return formcheck();">
	IMG:<br><input type="file" id ="img_file" name="img_file"><br>
	TITLE :<br><input type="text" name="title"><br>
	CONTENT:<br><textarea name="content" style="height: 500px; width: 500px;"></textarea><br>
	<input type="submit" value="登録"> <input type="button" value="戻る" onclick="location.href= 'news.php'">
</form>

