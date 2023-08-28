<!DOCTYPE html>
<html lang="es">
<head><link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td{
            border: 2px solid;
        }

        table {
            width: 80%;
            border-collapse: collapse;
        }
    </style>

</head>

<body>
    
    <center> <h1> Estudiantes </h1> </center>
    

    <form action="" method="post">     
      <center>  <label for="campo">Buscar:  </label>          
      <input type="text" name="campo" id="campo" style="width : 200px" maxlength="30">  <br> <br>
        </center>
    </input>
    </form>

    

    <p></p>
    
    

    <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

        <thead>
            <th>Documento</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Lugar de expedicion</th>
            <th>Lugar</th>
            <th>Direccion</th>
            <th>Barrio</th>
            <th>EPS</th>
            <th>RH</th>
            <th>Acudiente</th>
            <th></th>
            <th></th>
        </thead>

          <tbody id="content">


          </tbody>

    </table>

    <script>
        getData()

        document.getElementById("campo").addEventListener("keyup", getData)

        function getData(){
            let input = document.getElementById("campo").value
            let content =document.getElementById("content")
            let url = "loadestudiantes.php";
            let formaData = new FormData()
            formaData.append('campo', input)

            fetch(url, {
                method: "POST",
                body: formaData
            }).then(response => response.json())
            .then(data => {
                content.innerHTML = data
            }).catch(err => console.log(err))
        }
    </script>


    




    
</body>
</html>




