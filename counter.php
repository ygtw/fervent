<?php
        $counter = "counter.txt";
        $fd = fopen($counter, "r");
        $num =  fread($fd, filesize( $counter ));
        fclose($fd);
        $fd = fopen($counter, "w");
        $users = $num + 1;
        echo "本傳說第 $users 次被寫下";
        fwrite($fd, $users);
        fclose($fd);
?>