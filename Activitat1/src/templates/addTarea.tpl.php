<html>
   
   <head>
      <title>Añadir tarea</title>
      <link href="/src/templates/estilo.css" type="text/css" rel="stylesheet">
   </head>
   
   <body>
      <h1><?=$nom;?></h1>
        <form action="?url=addTareaAction" method="post">
        <p>Nombre de tarea:<input type="text" name="nomTarea" ></p>
        <input type="submit" value="Añadir" class="button">
       </form>
       <p class="fondoNormal"><a href="?url=tareas">VOLVER A TAREAS</a></p>
   </body>

</html>