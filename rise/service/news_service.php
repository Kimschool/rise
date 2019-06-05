<?php
    /*  */
    function showdata($conn, $sql) {
        foreach ($conn->query($sql) as $value) {
            echo "<div class='news_content center'>";
            echo "<span>".$value['reg_date']."</span><br>";
            echo "<span>".$value['title']."</span><br>";
            echo "<img src='".$value['img_file']."'><br>";
            echo $value['no']."<br>";
            echo "<span>".modcontent($value['content'])."</span><br>";
            echo "</div>";
        }
    }

    // URL, Mail을 자동으로 체크하여 링크만듬
    function modcontent($text) {

        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        $text = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $text);

//         // URL 치환
//         $homepage_pattern = "/([^\"\'\=\>])(mms|http|https|HTTP|ftp|FTP|telnet|TELNET)\:\/\/(.[^ \n\<\"\']+)/";
//         $text = preg_replace($homepage_pattern,"\\1<a href=\\2://\\3 target=_blank>\\2://\\3</a>", " ".$text);

        return strtr($text,array("\r\n"=>'<br>',"\r"=>'<br>',"\n"=>'<br>'));
    }
?>