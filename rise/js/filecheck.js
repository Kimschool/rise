function formcheck(frm) {
	var extArray = new Array('pdf','jpg','gif','png');
	var path = document.getElementById('img_file').value;

	if(path != "") {
		var pos = path.indexOf(".");
		if(pos < 0) {
			alert("확장자가 없는파일 입니다.");
			return false;
		}

		var ext = path.slice(path.indexOf(".")+1).toLowerCase();
		var checkExt = false;
		for(var i = 0; i < extArray.length; i++) {
			if(ext == extArray[i]) {
				checkExt = true;
				break;
			}
		}

		if(checkExt == false) {
			alert("업로드할수없는 파일입니다.");
			return false;
		}
		return true;
	}
}