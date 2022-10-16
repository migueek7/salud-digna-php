# salud-digna-php

Sitio web salud digna usando php puro en su version 7.4

Instrucciones de configuracion:

//CONSTRUIR UNA IMAGEN DESDE dockerfile
docker build -t salud-digna-php .

//CREAR CONTENEDOR A PARTIR DE UNA IMAGEN Y DETECTAR LOS CAMBIOS
docker run -d -v ${PWD}/src:/var/www/html/ -p 4000:80 --name salud-digna salud-digna-php
