<?php 
	
	class database{
		private $connection;

		public function openConnection(){
			$this->connection=mysqli_connect('localhost','root','016019himel','bsr');

			if (!$this->connection) {

				die("Database Connection Failed ". mysqli_connect_errno());
			}

			else{

				$select_db=mysqli_select_db($this->connection, 'bsr');

				if (!$select_db) {

					die("Database Selection Failed ".mysqli_error());
				}
			}

		}

		public function query($quer){
			$result=mysqli_query($this->connection, $quer);

			if (!$result) {
				die("There was an error With The Result ".mysqli_connect_error());
			}

			return $result;
		}

		public function fetch_result($result){
			
			return mysqli_fetch_assoc($result);
		}

		public function showUser(){
			$sql = "SELECT * FROM user_registration ORDER BY user_id";

			$result = $this->query($sql);
			$arr = array();
			$i = 0;

			while($row=mysqli_fetch_assoc($result)){
				$arr["username"][$i]=$row["username"];
				$arr["user_id"][$i]=$row["user_id"];
				$arr["email"][$i]=$row["email"];
				$arr["na_id"][$i]=$row["na_id"];
				$arr["address"][$i]=$row["address"];
				$i++;
			}
			return $arr;

		}

		public function del_user($user_id){
			$sql1 = "DELETE from user where user_id=($user_id)";

			$ret = $this->query($sql1);

		}

		public function add_car($v_id, $v_company, $v_myr, $price, $L_no, $v_model, $e_cap, $image){
			$sql2 = "INSERT INTO car VALUES ('{$v_id}', '{$v_company}', '{$v_myr}', '{$v_model}', '{$e_cap}', '{$image}')";

			$ret = $this->query($sql2);
			return $ret;
		}

		public function del_car($v_id){
			$sql3 = "DELETE from car where v_id = ($v_id)";

			$ret = $this->query($sql3);
		}

		public function showCar(){
			$sql4 = "SELECT * FROM car";

			$retrival = $this->query($sql4);
			$arr = array();
			$i = 0;

			while($row= mysqli_fetch_assoc($retrival)){
				$arr["v_id"][$i]= $row["v_id"];
				$arr["v_company"][$i]= $row["v_company"];
				$arr["v_model"][$i]= $row["v_model"];
				$arr["v_myr"][$i]= $row["v_myr"];
				$arr["e_cap"][$i]= $row["e_cap"];
				$arr["L_no"][$i]= $row["L_no"];
				$arr["price"][$i]= $row["price"];
				$i++;
			}
			return $arr;
		}

		public function rentCar(){
			$sql = "SELECT * from rented_car";

			$rent = $this->query($sql);
			$arr = array();
			$i = 0;

			while($row= mysqli_fetch_assoc($rent)){
				$arr["v_id"][$i]= $row["v_id"];
				$arr["user_id"][$i]= $row["user_id"];
				$arr["date_rent"][$i]= $row["date_rent"];
				$arr["duration"][$i]= $row["duration"];
				$arr["bill"][$i]= $row["bill"];
				$i++;
			}
			return $arr;
		}

		public function rentCara(){
			$sql = "SELECT * from rented_car ORDER by sl_no asc";

			$rent = $this->query($sql);
			$arr = array();
			$i = 0;

			while($row= mysqli_fetch_assoc($rent)){
				for($i=0; $i<6;i++){
					$arr["v_id"][$i]= $row["v_id"];
					$arr["user_id"][$i]= $row["user_id"];
					$arr["date_rent"][$i]= $row["date_rent"];
					$arr["duration"][$i]= $row["duration"];
					$arr["bill"][$i]= $row["bill"];

				}
				
				
			}
			return $arr;
		}

		

		public function soldCar(){
			$sql = "SELECT * from sold_car";

			$sold = $this->query($sql);
			$arr = array();
			$i = 0;l8

			while($row= mysqli_fetch_assoc($sold)){
				$arr["v_id"][$i] = $row["v_id"];
				$arr["price"][$i] = $row["price"];
				$arr["user_id"][$i] = $row["user_id"];			
				$arr["date"][$i] = $row["date"];
				$i++;
			}
			return $arr;
		}

		public function soldCara(){
			$sql = "SELECT * from sold_car order by sl_no asc";

			$sold = $this->query($sql);
			$arr = array();
			$i = 0;

			while($row= mysqli_fetch_assoc($sold)){
				for($i=0; $i<6;i++){

					$arr["v_id"][$i] = $row["v_id"];
					$arr["price"][$i] = $row["price"];
					$arr["user_id"][$i] = $row["user_id"];			
					$arr["date"][$i] = $row["date"];
				
				}
				
			}
			return $arr;
		}

		public function showbill(){

			$sql = "SELECT * from bill";

			$bill = $this->query($sql);
			$arr = array();
			$i = 0;
		}

		public function login($username, $password){

			$username = mysqli_real_escape_string($this->connection, $username);
			$sql = "SELECT * from user_registration where username = ($username) AND password = ($password)";

			$result=$this->query($sql);
			$result=$this->fetch_result($result);
			//$access = $this->performQuery($sql0);
			//$i = 0;

			if ($result == null) {
				die("invalid username/password");
			}
			else{
				$_SESSION['name'] = $username;

				if($username == "admin") {

					//$this->redirect_to("teacher.php");
					header('Location: adminpage.php');
					
				}
				else{
					//$this->redirect_to("admin.php");
					header('Location: userpage.php');
					
				}
			}
		}

		public function logOut(){
			if (isset($_SESSION['name'])) {
				session_start();
				unset($_SESSION['name']);
				session_destroy($_SESSION['name']);
				$this->redirect_to("login.php");
			}
		}



	}


		$databasecall = new database();
		$databasecall->openConnection();
 ?>