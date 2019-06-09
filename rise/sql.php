<?php

/* news掲示板_SQL変数  */
$s_news = "select * from news";

$insert_news =  "INSERT INTO `news` (`title`, `img_file`, `img_size`, `content`, `reg_date`, `perform_flg`,`del_flag`) VALUES (?, ?, ?, ?, now(), ?,'0')";


?>