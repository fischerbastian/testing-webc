# testing-webcursos
Testing Webcursos moodle with [Codeception](http://codeception.com//)


Instalación
--------------------------------------

Para instalar Codeception es necesario descargar el archivo
codecept.phar desde la web de [Codeception](http://codeception.com//).

Luego ejecutar el siguiente comando:


```bash
php codecept.phar bootstrap
```

Ejecución
--------------------------------------

Para ejecutar los tests de aceptacion programados, ejecutar
la siguiente linea de comando: 

```bash
php codecept.phar run acceptance
```


Condiciones iniciales de testeo
--------------------------------------

Para ejecutar los tests de aceptaci�n, es necesario que moodle
tenga cargado con anterioridad las siguientes caracteristicas:

- **Essential Theme**
- **Bloque UAI**

Proyectos a futuro
--------------------------------------

La siguiente lista corresponde a mejoras y proyectos a futuro
para mejorar el desempeño y orden de los testeos:

- **