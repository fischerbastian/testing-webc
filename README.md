# testing-webc
Testing Webcursos moodle with [Codeception](http://codeception.com//)


Ejecución
--------------------------------------

Para ejecutar los tests de aceptacion programados, ejecutar
la siguiente linea de comando: 

```bash
php codecept.phar run acceptance
```


Condiciones iniciales de testeo
--------------------------------------

Para ejecutar los tests de aceptación, es necesario que moodle
tenga cargado con anterioridad las siguientes caracteristicas:

- **Bloque UAI**
- **eMarking**
- **Reserva de salas**
- **Local facebook**


Proyectos a futuro
--------------------------------------

La siguiente lista corresponde a mejoras y proyectos a futuro
para mejorar el desempeño y orden de los testeos:

- **Automatizar matriculación de alumnos de prueba**
- **Habilitar revisión en modo debug**
