<?php
include_once('ConClass.php');
class customer extends Con
{
	public function __construct() {
                parent::__construct();
	}
	public function login($email,$password)
	{
		$message='';
		$result = mysql_query("SELECT * FROM user WHERE email='$email'") or die (mysql_error());
		$row = mysql_fetch_array($result);
		$num_results = mysql_num_rows($result);
		if ($num_results > 0)
		{
			if($row['status']=='active'){
				if(base64_encode($password)==$row['password'])
				{
					$_SESSION['customer']=array('id'=>$row['aid'],'name'=>$row['username']);
					$_SESSION['expire'] =time()+(60*60);
					$msg= "done";
				}
				else{ $msg= '<p>Error !! Wrong password</p>'; }
			}
			else { $msg= '<p>Error !!Your account is not Active</p>'; }
		}
		else { $msg= '<p>Error !! This email is not registered with us</p>'; }
		return $msg;
	}
	public function forgot($email)
	{
		$message='';
		$result = mysql_query("SELECT * FROM user WHERE email='$email'") or die (mysql_error());
		$row = mysql_fetch_assoc($result);
		$num_results = mysql_num_rows($result); 
			if ($num_results > 0){ 
				$pass=base64_decode($row['password']);
				$to = $row['email']; $name=$row['username'];
				$openmail= explode('@',$to);
				$subject = "Password request approved";
				$headers = "From: Lunch Box <admin@shoplexy.com> \r\n";
				$headers .= "Reply-To: admin@shoplexy.com \r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";	
				$message .= '<div class="movableContent">
                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height="55"></td></tr>
                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="center">
                                  <h2 >Hello ' .$name. ', Your password request approved!</h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="15"> </td></tr>

                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="center">
                                  <p  style="text-align:left;color:#999999;font-size:14px;font-weight:normal;line-height:19px;">
                                    Your Password is : <b>'.$pass.'</b> . Login to your account <a class="link1" class="color:#382F2E;" href="http://health.shoplexy.com/dashboard/login.php">Login</a>. 
                                    <br>
                                    <br>
                                    Have questions? Get in touch with us via email our support team or call us at 9916225399.
                                    <br>
                                    <br>
                                    Cheers,
                                    <br>
                                    <span style="color:#222222;">LUNCH BOX TEAM.</span>
                                  </p>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="55"></td></tr>

                          <tr>
                            <td align="center">
                              <table>
                                <tr>
                                  <td align="center" bgcolor="#DC2828" style="background:#DC2828; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align="center">
                                        <a href="http://health.shoplexy.com/dashboard/login.php" class="link2" style="color:#ffffff;">Login to Your account</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height="20"></td></tr>
                        </table>
                      </div>';
				mail($to,$subject,$message,$headers);
				$msg='<div class="alert alert-success">
						<p>Password has been sent to your mail id.<a href="login.php" class="btn btn-sm btn-success">Sign in</a></p>
					  </div>';
			}
			else
			{
				$msg= '<div class="text-danger wrapper text-center" ng-show="authError"><p>Error !! This email is not registered with us</p></div>';
			}
			return $msg;
		
	}

	public function customerSignup($name,$email,$password,$other)
	{
		$message='';
		if($this->checkMail($email))
		{
			$jother= json_encode($other);
			$aid= mysql_query("SELECT max(aid) as id FROM user"); $max=mysql_fetch_assoc($aid); $cid= $max['id']+1;
			//echo $cid;
			$pass=base64_encode($password);
			mysql_query("INSERT INTO `user`(`aid`, `username`, `email`, `password`, `other`,`health`,`status`) VALUES ('$aid','$name','$email','$pass','$jother','','active')") or die(mysql_error());
			$to=$email;
			$subject = 'Signup Successful';
			$headers = "From: Lunch Box <admin@shoplexy.com> \r\n";
			$headers .= "Reply-To: admin@shoplexy.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message .='<div class="movableContent">
                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height="55"></td></tr>
                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="center">
                                  <h2 >Hello ' .$name. ', Welcome to the new world health assessment?</h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="15"> </td></tr>

                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="center">
                                  <p  style="text-align:left;color:#999999;font-size:14px;font-weight:normal;line-height:19px;">
                                    Thanks again for signing up to LUNCH BOX! Your account has been created successfully. From your account, you can manage your HEALTH details. <br> Your password is : '.$password.'. Login to your account <a class="link1" class="color:#382F2E;" href="http://health.shoplexy.com/dashboard/login.php">Login</a>. 
                                    <br>
                                    <br>
                                    Have questions? Get in touch with us via email our support team or call us at 9916225399.
                                    <br>
                                    <br>
                                    Cheers,
                                    <br>
                                    <span style="color:#222222;">LUNCH BOX TEAM.</span>
                                  </p>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="55"></td></tr>

                          <tr>
                            <td align="center">
                              <table>
                                <tr>
                                  <td align="center" bgcolor="#DC2828" style="background:#DC2828; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align="center">
                                        <a href="http://health.shoplexy.com/dashboard/login.php" class="link2" style="color:#ffffff;">Login to your account</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height="20"></td></tr>
                        </table>
                      </div>';
			mail($to,$subject,$message,$headers);
			$_SESSION['customer']=$cid;
			$_SESSION['expire'] =time()+(60*60);
			$msg= '<div class="text-success wrapper text-center" ng-show="authError"><p>Success !! Registered successfully. <a href="login.php">Login Here</a></p></div>';
		}
		else { $msg= '<div class="text-danger wrapper text-center" ng-show="authError"><p>Error !! This email is already registered</p></div>';}
		return $msg;
	}
	public function customerUpdate($aid,$name,$address,$city,$email,$country,$pin,$state,$phone,$password)
	{ 
		if($name=="" || $address=="" || $city=="" || $email==""  || $country=="" || $pin=="" || $state=="" || $phone==""){
			$msg ='<span style="color:red">Error !! Please fill all fields</span>';
		}
		else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email))  //Be sure that username is properly formatted then proceed
		{
			$msg= '<span style="color:red">Error !! Please enter correct email id</span>';
		}
		else if(!preg_match("/^[a-zA-Z ]+$/i",$name)) {	$msg= '<span style="color:red">Error !! Check Name</span>'; }
		else if(!preg_match("/^[a-zA-Z ]+$/i",$city))	{  $msg= '<span style="color:red">Error !! Check City</span>'; }
		else if(!preg_match("/^[a-zA-Z0-9 \,\/]+$/i",$address))	{	$msg= '<span style="color:red">Error !! Check Address</span>';	}
		else if(!preg_match("/^[0-9]+$/i",$phone)) {	$msg= '<span style="color:red">Error !! Check Phone</span>'; }
		else if(!preg_match("/^[0-9]+$/i",$pin)) {	$msg= '<span style="color:red">Error !! Check Pincode</span>'; }
		else if($password!="" && !preg_match("/^[a-zA-Z0-9]+$/i",$password)) {	$msg= '<span style="color:red">Error !! Check Password</span>'; }
		else /*if($this->checkMail($email))*/
		{
			mysql_query("UPDATE customer SET address='$address',city='$city',country='$country',state='$state',postcode='$pin',mobile='$phone' WHERE aid='$aid'") or die(mysql_error());
			if($password!=""){
				$pass=base64_encode($password);
				mysql_query("UPDATE login SET email='$email',name='$name',password='$pass' WHERE aid='$aid'") or die(mysql_error());
			}
			else{ mysql_query("UPDATE login SET email='$email',name='$name' WHERE aid='$aid'") or die(mysql_error()); }
			$msg= '<span style="color:green">Success !! Details updated successfully</span>';
		}
		return $msg;
	}
	private function checkMail($mail) {
		$result = mysql_query("SELECT * FROM user WHERE email='$mail'") or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		$num_results = mysql_num_rows($result);
		if ($num_results > 0){
			return false;
		}
		return true; 
	}
	public function changePassword()
	{
		
	}
}
?>
