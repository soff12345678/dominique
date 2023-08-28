<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssform2.css">
    <script src="javaform2.js"></script>
</head>
<body>
    
 <h1>DOCENTES</h1>
 <form action="docente.php" method="POST">
<section>
  <p>Información Personal</p>
  <input type="number" placeholder="Documento" name="documento" required/>
  <input type="password" placeholder="Password" name="password" required/>
  <input type="text" placeholder="Nombre" name="nombre" required/>
  <input type="text" placeholder="Apellidos" name="apellidos" required />
  <select name="sexo" placeholder="Sexo" name="sexo" required>
    <option disabled hidden selected value="sexo">Sexo</option>
    <option value="femenino">Femenino</option>
    <option value="masculino">Masculino</option>
    <option value="nobinario">No binario</option>
  </select>
  <input type="date" placeholder="Fecha de nacimiento" name="fecha" required/>
  <input type="text" placeholder="Lugar de nacimiento" name="lugar" required />
  <input type="text" placeholder="Direccion" name="direccion" required/>
  <input type="text" placeholder="Barrio" name="barrio" required/>
  <input type="text" placeholder="EPS" name="eps" required/>
  <select name="rh" placeholder="Tipo de sangre" name="rh" required>
    <option disabled hidden selected value="rh">Tipo de sangre</option>
    <option value="AP">A+</option>
    <option value="AN">A-</option>
    <option value="BP">B+</option>
    <option value="BN">B-</option>
    <option value="ABN">AB-</option>
    <option value="ABP">AB+</option>
    <option value="ON">O-</option>
    <option value="OP">O+</option>
  </select>
</section>

<input type="submit" class="button" value="Enviar"></input>
</form>
</body>
</html>
