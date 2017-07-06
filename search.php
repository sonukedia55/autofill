
<?php
// PDO connect *********

$con = mysqli_connect("localhost","root","","autocomplet");

function connect() {
    return new PDO('mysql:host=localhost;dbname=autocomplet', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = $_POST['keyword'].'%';
$sql = "SELECT country_name FROM country WHERE country_name LIKE (:keyword) ORDER BY country_id ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$in=0;
$list = $query->fetchAll();
$gh='<ul>';
foreach ($list as $rs) {

          $gh.='<input type="hidden" value="'.$rs['country_name'].'" id="go'.$in.'" />';

				$gh.='<li  onclick="set_item('.$rs['country_name'].');">'.$rs['country_name'].'</li>';
        $in++;

			}
			echo $gh;
			$gh='';


?>
