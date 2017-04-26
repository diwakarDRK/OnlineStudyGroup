<?php
<?php
	if (isset($_POST['edit']))
	{
		session_start();	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile']
		$AOI=$_POST['AOI']
		$edu=$_POST['edu']

		$connection = mysqli_connect("localhost", "root","","adequate");
		$sql="INSERT INTO edit (uname, pass, name, email, mobile, AOI, edu)" ."VALUES('$username','$password','$name','$email','$DOB','$gender','$mobile','AOI','edu') ";
		$query = mysqli_query($connection ,$sql);
		if(!$query)
		{
			die("query failed".mysqli_error($connection));
		}
		else
		{
			header('location:home22.php');
		}
	}
?>

CREATE TABLE edit (
        id INT, 
        parent_id INT,
        INDEX par_ind (parent_id),
        FOREIGN KEY (parent_id) 
            REFERENCES parent(id)
            ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE=INNODB;
?>