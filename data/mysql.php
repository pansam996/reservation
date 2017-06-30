<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
error_reporting(1);
date_default_timezone_set("Asia/Taipei");
mysql_connect("localhost","admin","0000");
mysql_query("SET NAMES 'UTF8'");
mysql_select_db("reservation");
$mr=mysql_result;
$mq=mysql_query;
$mnr=mysql_num_rows;
$mfa=mysql_fetch_array;
/*---------------------新增訂單:Group 2---------------------------------*/
if($_GET[m]==1)
{
	$num=mktime(date("H"),date("i"),date("s"),date("n"),date("j"),date("Y"));
	$mq("insert into book(_sid,_number,_seat) values('$_GET[show]','$num','$_GET[seat]')");
	$name=$_POST[_name];
	$phone=$_POST[_phone];
	$email=$_POST[_email];
	$mq("insert into booker(_bookid,_name,_phone,_email) values('$_GET[show]','$name','$phone','$email')");
	?>
	<title>傳送中...</title>
    <script>
    alert('完成訂位\n訂單編號:<?=$num?>')
	location.replace('../index.php')
    </script>
	<?
}
/*---------------------------------------------------------------*/