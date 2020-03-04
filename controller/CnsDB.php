<?php
	Class CnsDB{
		private $cn;
		public $msg;
		
		public function ConectaDB(){
			try {
				
				$res="";
				$conectar = 'localhost;dbname=id12668223_sansebastian';
				$user = 'user';
				$pwd = '1234';
				
				
				$enlace = mysqli_connect("localhost", "id12668223_ssansebastian", "hola123", "id12668223_sansebastian");
				//$this->cn = new PDO("mysql:localhost;dbname=sansebastian_db",$user,$pwd);
				/* $this->cn->setAttribute(PDO::ATR_ERRMODE,PDO::ERRMODE_EXCEPTION); */
				$this->msg= 'Conexion válida';
				$res=$this->msg;
			}catch(PDOException $e){
				$this->msg= 'Conexion inválida'.$e->getMessage();
				$res=$this->msg;
			}
			return $res;
		}
		 
		public function insert() 
		{
			
			$enlace = mysqli_connect("localhost", "id12668223_ssansebastian", "hola123", "id12668223_sansebastian");
			
			$Nombre=$_POST['first_name'];
			$Apellido=$_POST['last_name'];
			$DNI=$_POST['dni'];
			$Tele=$_POST['phone'];
			$Celu=$_POST['celular'];
			$FechaN=$_POST['fechaNac'];
			$Direccion=$_POST['direccion'];
			$Gener=$_POST['genero'];
			$TipoSa=$_POST['tipoS'];
				
			
			$rs= "";
			if(isset($_POST['first_name']) && !empty($_POST['first_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['last_name']) && !empty($_POST['last_name']) &&
				isset($_POST['dni']) && !empty($_POST['dni']) ){
					try{
						/* $test = $this->cn->prepare("INSERT INTO persona VALUES ($DNI,'$Nombre','$Apellido')");
						$test->execute();
						$test1 = $this->cn->prepare("INSERT INTO paciente VALUES($DNI, '$Tele')");
						$test1->execute(); */
						
						
						$query1 = ("INSERT INTO paciente VALUES($DNI, '$Nombre', '$Apellido', '$Direccion', '$FechaN', '$Tele', '$Celu', '$Gener', '$TipoSa')");
						$exe1 = mysqli_query($enlace,$query1);
						
						
						$this->msg= '<p><br>Usted está registrado Señor(a) '.$Nombre.' '.$Apellido.'</p><a href="../index.html">Regresar</a><br><a href="../cita.html">Continuar</a>';
						$rs=$this->msg;
						//echo 'Datos Registrados<br>Usted está registrado Señor(a) '.$Nombre.' '.$Apellido.'<a href="../index.html">Regresar<br></a>';
					}catch(PDOException $e){
						$this->msg= 'Datos NO Registrados<br><a href="../registro.html">Regresar</a>'.$e->getMessage();
						$rs=$this->msg;
						//$rs = "Error".$e->getMessage();
					}
			}else{
					$this->msg= '<br>Datos NO establecidos<br><a href="../index.html">Regresar</a>';
					$rs=$this->msg;
			}
			return $rs; 
		}
		
	
		/* public function CnsSubs(){
			try{
				$stnt = $this->cn->prepare('SELECT * from persona');
				$stnt-> execute();
				$rs= "";
				while($datos=$stnt->fetch()){
					$rs.= "<tr><td>".$datos[0]."</td><td> ".$datos[1]."</td><td> ".$datos[2]."</td></tr>";
				}
			}catch(PDOException $e){
				$rs = "Error".$e->getMessage();
			}
			return $rs;
		}		 */
	}			
?>