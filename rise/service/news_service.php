<?php
    /*  */
    function showdata($conn, $sql) {
        foreach ($conn->query($sql) as $value) {
            echo "\t\t<div class='news_content center'>\r\n";
            echo "\t\t\t<span>".$value['reg_date']."</span><br>\r\n";
            echo "\t\t\t<span>".$value['title']."</span><br>\r\n";
            echo "\t\t\t<a href='".$value['img_file']."'"."data-lightbox='".$value['img_file']."' data-title='".$value['title']."'>\r\n";
            echo "\t\t\t\t<img src='".$value['img_file']."'><br>\r\n";
            echo "\t\t\t</a>\r\n";
            echo "\t\t\t<span>".modcontent($value['content'])."</span><br>\r\n";
            echo "\t\t</div>\r\n";
        }
    }

    // URL, Mail을 자동으로 체크하여 링크만듬
    function modcontent($text) {

        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        $text = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $text);

        return strtr($text,array("\r\n"=>'<br>',"\r"=>'<br>',"\n"=>'<br>'));
    }
?>