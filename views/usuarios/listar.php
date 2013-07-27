<style>
    table{
        border: solid 1px #d8d8d8;
        margin:auto;
    }   
	h1
	{
	text-align: center;
	display: block;
}
	 
    
</style>

<h1>Listado de usuarios</h1>

<table class="datos">
<tr>
    
    <th>Apellidos</th>
    <th>Nombre</th>
    <th>Usuario</th>

</tr>

    
    <?PHP
/*
 * array[clavex]=Valor
 */

foreach($filas as $k =>$v):
?>

<tr> 
    <td><?PHP echo $v['lastname'];?></td>
    <td><?PHP echo $v['firstname'];?></td>
    <td><?PHP echo $v['username'];?></td>
</tr>

<?PHP endforeach; ?>
</table>