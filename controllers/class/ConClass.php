<?php
class Con
{
	var $myconn;
	public function __construct() {  $this->db(); }
    function db()
    {
        $con=mysql_connect("localhost","root","");
        if(!$con) {  die("could not connect".mysql_errno()); }
		else { 	mysql_select_db("health",$con); $this->myconn=$con; }
        return $this->myconn;
    }
    function close() {  mysql_close($this->myconn);  }
}
?>