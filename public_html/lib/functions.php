<?php

  function getServices($Lang){
    return(mysql_query("SELECT Titulo AS Title, Descripcion AS Description, Imagen AS Icon FROM Servicios WHERE idIdioma = $Lang"));
  }

  function getPortfolio($Lang){
    return(mysql_query("SELECT Empresa AS Company, Categoria AS Category, Proyecto AS Project, Fecha AS Project_Date, Imagen_Portafolio AS Portfolio_Image, Descripcion AS Description, Imagen_Descripcion AS Description_Image, URL FROM Portafolio WHERE idIdioma = $Lang"));
  }
   function getTeam(){
     return(mysql_query("SELECT Nombre AS Name, Area, Foto FROM Equipo"));
   }
 ?>
