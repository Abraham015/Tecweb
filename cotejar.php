<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if(isset($_SESSION['usuario'])) // Si la variable de control "$exibirAlerta" es igual a TRUE activa nuestra Alerta y será visible a nuestros usuarios. 
		header('location:inicioexitoso.php');
		else{
?>
   <script>
	swal("Good job!", "You clicked the button!","warning").then( () => {
    location.href = 'profesor.php'
	});
	</script>
<?php } ?>
	
