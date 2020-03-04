<?php
	Class CnsDB{
		private $cn;
		public $msg;
		
		public function ConectaDB(){
			try {
				
				$res="";
				$conectar = 'mysql:host=127.0.0.2;dbname=ezTrabel';
				$user = 'user';
				$pwd = '1234';
				$this->cn= new PDO("mysql:host=127.0.0.2;dbname=sansebastian_db",$user,$pwd);
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
			$Especialidad=$_POST['especialidad'];
			$Hora=$_POST['timepicker'];
			$DNI=$_POST['pdni'];
			$Fecha=$_POST['datepicker1'];
			
			$enlace = mysqli_connect("localhost", "user", "1234", "sansebastian_db");
			$query=("SELECT Persona_ID_DNI FROM `paciente` "
        			 . "WHERE `Persona_ID_DNI`='".$DNI."'"); 

			$ex= mysqli_query($enlace,$query); 
			$row=mysqli_fetch_object($ex); 
			$nr = mysqli_num_rows($ex);

			$rs= "";	
			/*if($nr == 1){ 
				echo 'BIEN HECHO'; 
			} 
			else */if($nr == 0) {    
				$this->msg= '<br>USTED NO ESTÁ ASEGURADO :(';
				$rs=$this->msg;
			}   
	
			else if(isset($_POST['especialidad']) && !empty($_POST['especialidad']) &&
				isset($_POST['pdni']) && !empty($_POST['pdni']) &&
				isset($_POST['datepicker1']) && !empty($_POST['datepicker1']) ){
					try{
                        $test = $this->cn->prepare("INSERT INTO citas (Paciente_ID_DNI, Doctor_especialidad, fecha, hora) VALUES ('$DNI', '$Especialidad', '$Fecha', '$Hora')");
						$test->execute();
						
						
						$this->msg= '<p><br>Su cita está registrada para: '.$Fecha.' a las '.$Hora.' horas</p><a href="../index.html">Regresar</a>';
						$rs=$this->msg;
						//echo 'Datos Registrados<br>Usted está registrado Señor(a) '.$Nombre.' '.$Apellido.'<a href="../index.html">Regresar<br></a>';
					}catch(PDOException $e){
						$this->msg= 'Datos NO Registrados<br><a href="../index.html">Regresar</a>'.$e->getMessage();
						$rs=$this->msg;
						//$rs = "Error".$e->getMessage();
					}
			}else{
					echo "Datos no enviados";
			}
			return $rs; 
		}
		
		public function valida(){
			$User=$_POST['user'];
			$Pass=$_POST['pass'];
			
			$enlace = mysqli_connect("localhost", "user", "1234", "sansebastian_db");
			if (!$enlace) {
				echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
				echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
				echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
				exit;
			}
			$query=("SELECT UsuarioLog,PassLog FROM `Login` "
					."WHERE `UsuarioLog`='".$User."' and "
					."`PassLog`='".$Pass."'"); 

			$ex= mysqli_query($enlace,$query); 
			$row=mysqli_fetch_object($ex); 
			$nr = mysqli_num_rows($ex);

			$rs= "";	
			/*if($nr == 1){ 
				echo 'BIEN HECHO'; 
			} 
			else */if($nr == 0) {    
				header('Location: ../loginError.html');
				
				
				// $this->msg= '<br>¡Datos incorrectos!';
				// $rs=$this->msg;
			}   
	
			else if(isset($_POST['user']) && !empty($_POST['user']) &&
				isset($_POST['pass']) && !empty($_POST['pass']) ){
					header('Location: ../index2.html');
					
			}
			//return $rs; 
		}
		
	
		public function CnsSubs(){
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
		}		
	}			
?>