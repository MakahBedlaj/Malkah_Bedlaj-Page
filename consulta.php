<?php
	session_start();
	class consulta

	{
		public function __construct()
			{
				//Es el acceso al desarrollo local...
				$cn = mysqli_connect("localhost","root","");
				mysql_select_db("malkah_bedlaj");
				mysql_query("SET NAMES 'UTF8'");
			}	

		public function backup_tables()
			{      			      		
      			$tables = '*';   			
   				//get all of the tables
   				if($tables == '*')
   				{
      				$tables = array('compras');
      				
   				}
   			}			

		public function agregarcompras($clavec, $fcompra, $lista, $carrito, $totcompra)	
			{				
              

             $buscar = mysqli_query("SELECT * FROM compras WHERE compras_clave LIKE '%$clavec%'");
                

                if ($reg = mysql_fetch_array($buscar)){
                	echo "2";
                }


                else{
                			            
               $sql_1 = "INSERT INTO compras (compras_id, compras_clave, compras_fecha, compras_listaDeseos, compras_carrito, compras_total) VALUES (NULL, '$clavec', $fcompra', '$lista', '$carrito', '$totcompra')";	                
	                if (mysql_query($sql_1)){
	                	echo "1";
	                }
	                else{
	                	echo "0";
	                }	                
                }				
			}		

	
	
			}

			$xml = new domxml_new_doc(1.0)
/****************************************************************************************/			

$obconsulta = new consulta();

	switch ($_GET['accion']) {
		case 'agregar_compras':	
			$obconsulta->agregarcompras($_GET['clavec'],$_GET['fcompra'], $_GET['lista'], $_GET['carrito'], $_GET['totcompra']);		
		break;								
}

?>