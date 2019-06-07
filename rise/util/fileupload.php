<?php
    function img_upload($param) {
        if(isset($_FILES['img_file']) && $_FILES['img_file']['name'] != "") {
            $file = $_FILES['img_file'];
            $dir = 'img/';
            $ext_str = "pdf,jpg,gif,png";
            $allowed_extensions = explode(',', $ext_str);

            $max_size = 5242880;
            $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

            if(!in_array($ext, $allowed_extensions)) {
                echo "업로드할 수 없는 확장자 입니다.";
            }

            if($file['size'] >= $max_size) {
                echo "5MB 까지만 업로드 가능합니다.";
            }

            $path = $_FILES['img_file']['name'];
            if(move_uploaded_file($file['tmp_name'], $dir.$path)) {
                echo"<h3>파일 업로드 성공</h3>";
            } else {
                echo "<h3>파일이 업로드 되지 않았습니다.</h3>";

                echo '<a href="javascript:history.go(-1);">이전 페이지</a>';
            }


        }

    }




?>