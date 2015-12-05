<?php
//conexion con la Base de datos(Servidor,usuario,password)
@$link = mysql_connect("localhost","root","");
//nombre de la base de datos,$enlace
@mysql_select_db("university",$link);

@$id=$_REQUEST['ID'];
@$name=$_REQUEST['Name'];
@$name_depart=$_REQUEST['Name_depart'];
@$total_credi=$_REQUEST['Total_credi'];
@$name_edificio=$_REQUEST['name_edificio'];
@$presupuesto=$_REQUEST['presupuesto'];


@$sql1="INSERT INTO department (dept_name,building,budget)VALUES
('$name_depart','name_edificio',$presupuesto)";

@$sql2 ="INSERT INTO student(ID,name,dept_name,tot_cred) 
VALUES('$id','$name','$name_depart',$total_credi)";

mysql_query($sql1);
mysql_query($sql2);


$result = mysql_query("SELECT * FROM student", $link);

?>
<table border="1" >
<tr>
<th>ID</th> 
<th>NOMBRE</th>
<th>NOMBRE_DEPARTAMENTO</th>
<th>TOTAL_CREDITOS</th>
<?php
while(($row = mysql_fetch_array($result))!=NULL) {
// $row es un array con todos los campos existentes en la tabla
echo "<tr>";
echo "<th>";
echo $row['ID']."<th>";
echo $row['name']."<th>";
echo $row['dept_name']."<th>";
echo $row['tot_cred'];
echo "</tr>";
} // fin del bucle de instrucciones
mysql_free_result($result); // Liberamos los registros
mysql_close($link); // Cerramos la conexion con la base de datos
echo "<hr>";
?>
</table>





