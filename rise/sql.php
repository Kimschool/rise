<?php

/* news掲示板_SQL変数  */
$s_news = "select * from news";

function insert_sql($title, $img_file, $img_size, $content) {
    return "INSERT INTO `news` (`no`, `title`, `img_file`, `img_size`, `content`, `reg_date`, `del_flag`) VALUES (NULL, '$title', '$img_file', '$img_size', '$content', now(), '0')";
}


?>