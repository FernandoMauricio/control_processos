    <?php

        $conecta = mysql_connect("localhost", "root", "chup@queedement@") or print (mysql_error());
        mysql_select_db("processos_db", $conecta) or print(mysql_error());


    ?>