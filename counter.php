<?php
        $counter = "counter.txt";
        $fd = fopen($counter, "r");
        $num =  fread($fd, filesize( $counter ));
        fclose($fd);
        $fd = fopen($counter, "w");
        $users = $num + 1;
        echo "���ǻ��� $users ���Q�g�U";
        fwrite($fd, $users);
        fclose($fd);
?>