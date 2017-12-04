
<?php
/*
$link =  mysql_connect('localhost',  'root', 'admin');
if (!$link) {
	die('No pudo conectarse: ' . mysql_error());
}
else {
	//echo 'Conectado  satisfactoriamente<br>';
}
$db_selected = mysql_select_db('redsocial',  $link);

if (!$db_selected) {
	die ('Can\'t use foo : ' . mysql_error());
}
else {
	//echo 'Base de datos seleccionada<br>';
}

*/

 $databasehost = "localhost:3306";
 $databasename = "laravel";
 $databaseuser = "root";
 $databasepass = "admin";
 $link = mysqli_connect($databasehost, $databaseuser, $databasepass) or die(mysqli_error());

 mysqli_select_db($link, $databasename) or die(mysqli_error($link));
//mysql_close($link);
/*
class MySQL {
    static function getConn() {
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $database = "redsocial";
        return mysqli_connect($servername, $username, $password, $database);
    }
    static function closeConn($_conn) {
        mysqli_close($_conn);
    }
    static function query($_conn,$_query) {
        return mysqli_query($_conn, $_query);
    }
}

*/

?>