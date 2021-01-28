<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
if(isset($_SESSION['lamp_admin']))
{
   header("location:index.php");
}
 include 'common/object.php';

if(isset($_POST) && !empty($_POST) )//it can be $_GET doesn't matter
{
if(isset($_POST["username"])) {
	extract(array_map("test_input" , $_POST));
// print_r($_POST);
	$password=md5($password);

	// $q = $d->select("lamp_admin","email='$username' AND password='$password' AND active_flag=0");
	$q=$d->select("users_master,role_master","role_master.role_id=users_master.role_id AND users_master.email='$username' AND users_master.password='$password' AND users_master.status=0");
	$data = mysqli_fetch_array($q); 
	if ($data > 0) {
	$_SESSION['name'] = $data['first_name'];
	$_SESSION['lamp_admin'] = $data['email'];
	$_SESSION['user_id'] = $data['user_id'];
	$_SESSION['role_name'] = $data['role_name'];
	$_SESSION['profile'] = $data['profile'];
	$_SESSION['role_id'] = $data['role_id'];
	$_SESSION['msg']= "Welcome $data[first_name]";
	$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT']; # Save The User Agent
	$_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR']; # Save The IP Address
	$_SESSION['loginTime']=date("d M,Y h:i:sa");//Login Time
	
		// Session Data insert
		$user_id=$_SESSION['user_id'];
		$name=$_SESSION['name'];
		$role_name=$_SESSION['role_name'];
		$ip_address=$_SESSION['ip_address'];
		$browser=$_SESSION['user_agent'];
		$loginTime=$_SESSION['loginTime'];

		$m->set_data('user_id',$user_id);
		$m->set_data('name',$name);
		$m->set_data('role_name',$role_name);
        $m->set_data('ip_address',$ip_address);
        $m->set_data('browser',$browser);
        $m->set_data('loginTime',$loginTime);

        $a1= array ('user_id'=> $m->get_data('user_id'),
		        	'name'=> $m->get_data('name'),
                    'role_name'=> $m->get_data('role_name'),
                    'ip_address'=> $m->get_data('ip_address'),
                    'browser'=> $m->get_data('browser'),
                    'loginTime'=> $m->get_data('loginTime'),
                );
        $insert=$d->insert('session_log',$a1); 
        // Redirqt to homepage
        header("location:index.php");

	} 
	else {
	 $_SESSION['msg1']= "Wrong email or password.";
		header("location:login.php");
	}

}
} else  {
	header("location:login.php");
}

?>