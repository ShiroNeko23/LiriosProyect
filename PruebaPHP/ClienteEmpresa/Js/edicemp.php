<?php
include('../../Conection/bd.php');
$idcl=$_POST['lbidcl'];
$iddg=$_POST['lbiddg'];
$nom=$_POST['txt1'];
$cor=$_POST['txt4'];
$tel=$_POST['txt5'];
$ident=$_POST['txt6'];
$query="call pc_editemp('$idcl','$iddg','$nom','$cor','$tel','$ident');";
try {
    $result=mysqli_query($conn,$query) or $r=mysqli_error($conn);
} catch (Exception $r) {
    
}
return header("Location:../Presentacion/empresa.php");
?>
