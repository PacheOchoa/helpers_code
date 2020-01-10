<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h2>formulario basico </h2>
   <form method="POST" id="frm">
   	 <label>Nombre : </label>
   	 <input type="text" name="nombre" id="nombre">
   	 <input type="button" name="enviar" id="env" value="enviar">
   </form>

   <script>
   	   document.getElementById("env").addEventListener("click",manda);

   	   function manda(){
         const data = new FormData(document.getElementById('frm'));

      
   	 fetch('procesa.php',{
   	 	method:'POST',
   	 	body:data
   	 })

   	 .then(function(response){
   	 	if(response.ok){
   	 		return response.text();
   	 	}else{
   	 		throw 'Error';
   	 	}
   	 })

   	 .then(function(texto){
   	 	const respuesta = JSON.parse(texto);
   	 	console.log(respuesta);
   	 })

   	 .catch(function(err){
   	 	console.log(err);
   	 })

   	}

   </script>
</body>
</html>