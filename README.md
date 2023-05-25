# Proyecto_FIT_Center
<h1><a href="indice">Índice</a></h1>

  <h2><a href="introduccion">Introducción</a></h2>

  <h2><a href="proyecto">Proyecto</a></h2>
      <h5><a href="#descripcion">Descripción</a></h5>
      <h5><a href="#requisitos-funcionales">Requisitos funcionales</a></h5>
      <h5><a href="#analisis">Analísis y diseño web</a></h5>
      <h5><a href="#base-de-datos">Base de datos</a></h5>
      <h5><a href="#pruebas">Pruebas</a></h5>
      <h5><a href="#despliegue">Despliegue</a></h5>
      <h5><a href="#herramientas">Herramientas</a></h5>
      <h5><a href="#lenguajes">Lenguajes</a></h5>
      <h5><a href="#sistema-base-de-datos">Sistema Base de datos</a></h5>
      <h5><a href="#frameworks">Frameworks</a></h5>
      <h5><a href="#tecnologias">Tecnologías</a></h5>
      <h5><a href="#librerias">Librerías</a></h5>
      <h5><a href="#pluggins">Pluggins</a></h5>
      <h5><a href="#bibliotecas">Bibliotecas</a></h5>
      <h5><a href="#otros">Otros</a></h5>

  <h2><a href="producto">Producto</a></h2>
      <h5><a href="#panel-del-administrador">Panel del administrador</a></h5>
      <h5><a href="#parte-publica">Parte pública de la aplicación</a></h5>
      <h5><a href="#parte-privada">Parte privada de la aplicación</a></h5>
      <h5><a href="#formularios">Formularios</a></h5>
      <h5><a href="#disenio-responsive">Diseño Responsive</a></h5>

  <h2><a href="#bibliografia">Bibliografía</a></h2>
  
<!--  finalizan los titulos -->
<br><br><br>

  <h2><a href="introduccion">Introducción</a></h2>
  
  <h2><a href="proyecto">Proyecto</a></h2>
     
<h5><a href="#descripcion">Descripción</a></h5>
<p id="descripcion">
<h3>a-Titulo: FIT_Center</h3>
<h3>b-Logo: </h3>
<img src="Product-images/logo.png">
<h3>c-Descripción: </h3>
Este proyecto muestra todos los pasos seguidos para construir una Aplicación Web para la reserva de clases de deporte a distancia (Online), facilitando el acceso a todas las informaciones necesarias y empezando desde cero. 

Este proyecto ha sido construido puramente con: 

Lenguajes de marcas: HTML, CSS3. 

Lenguajes de programación: JAVASCRIPT, PHP. 

Tecnologías como AJAX, JSON, jQuery. 

Frameworks: Bootstrap, fontawesome. 
</p>
<h5><a href="#requisitos-funcionales">Requisitos funcionales</a></h5>
<p id="requisitos-funcionales">
R1: Diseño Responsive: Las páginas web de la aplicación son todas (responsives) y adaptables con diferentes tamaños de dispositivos, desde la página de inicio (a landing page). 

R2: Control de los errores de los formularios. 

R3: Registro del usuario. 

            -Nombre Completo. 

            -Correo Electrónico. 

            -Contraseña. 

            -Usuario. 

            -Teléfono. 

R4: Código de verificación del usuario, para que le autorice desde el administrador de la aplicación el inicio de su nueva sesión, requerimientos para implementar este sistema: 

            -Se enviará al usuario un correo que contiene el código de verificación, cual debe introducirlo en el campo que le aparezca de forma automática al registrarse en el sistema, para ello se utilizará la librería PHPMmailer, es una clase de PHP, que incluye un servidor de envío de correos SMTP, la función PHPMailer(), y otras clases de PHP para controlar errores y otras funcionalidades. 

R5: Iniciar sesión: una vez se confirma el registro de la cuenta mediante la introducción del código enviado al correo electrónico del usuario, se le autoriza mediante un mensajeque contiene un enlace para el inicio de sesión. 

R6: Requisitos funcionales dentro del Perfil del usuario: cuando la sesión ha sido iniciada exitosamente, y el usuario ya se encuentra en el área privada de la aplicación puede gestionar sus datos personales como: 

             R6-1: Editar su perfil (cambiar nombre, apellidos, correo ...etc.) 

             R6-2: Cambiar Contraseña. 

             R6-3: Explorar las clases con detalles, obtener informaciones sobre las clases           reservadas y disponibles. 

             R6-4:Efectuar reservas:  cuando el usuario selecciona una clase, los datos de esta clase se recopilan de forma automática, y se le imprime al usuario un formulario que contiene los datos de esta clase seleccionada, lo cual el usuario solo tiene que insertar su teléfono y correo para inscribirse en la clase seleccionada, o dispondrá de la opción de cancelar para volver a la consulta de otras clases(un usuario puede inscribirse en varias clases, siempre cuando haya plazas disponibles), este requisito contiene dos opciones principales: 

                   R-6-4-1: Si el usuario no especifica una fecha determinada, le saldrán todas las clases según la fecha del sistema (día actual) 

                   R-6-4-2: Si el usuario pulsa el botón filtrar por clases (este botón estará disponible en la página principal del perfil del usuario, contiene un desplegable de clases y sesiones implementadas en la base de datos de la aplicación), entonces puede filtrar por la clase que quiera, y le saldrá por pantalla los detalles de la clase seleccionada disponible en ese día para cambiar la fecha y obtener datos (fecha, horario, plazas disponibles, plazas reservadas, Sala, Precio) según la fecha requerida.                        

                   R-6-4-3: Si el usuario desea buscar clases según una fecha determinada, para eso se implementó un calendario en la página web para obtener detalles de las clases según la fecha seleccionada  

R7: Cancelar reserva. 

R8: Traducción: la página de inicio está disponible en tres idiomas: francés, inglés y español, la funcionalidad de este requisito será realizado mediante JavaScript (la tecnología Json), y la utilización de la herramienta (API) Online: flagsapi 

R9: Darse de baja de la aplicación, se le solicita al usuario pulsar un botón que le parecerá en seguida para confirmar baja y se deriva a la página de inicio.   

R10: Funciones del Panel de la administración de la aplicación. 
</p>
<h5><a href="#analisis">Analísis y diseño web</a></h5>
<p id="analisis">
</p>

<h5><a href="#base-de-datos">Base de datos</a></h5>
<p id="base-de-datos">
<h3>Modelo relacional</h3>
<img src="Product-images/modelo-relacional.png">
<h3>Modelo entidad-relación</h3>
<img src="Product-images/Modelo-entidad-relacion.png">

</p>

 <h5><a href="#pruebas">Pruebas</a></h5>
<p id="pruebas">

CASO PRUEBA 1: Registrar el usuario con código de verificación. 

CASO PRUEBA 2: Iniciar sesión. 

CASO PRUEBA 3: Reservar clase. 

CASO PRUEBA 4: Actualizar plazas disponibles y reservadas tras confirmar la reserva. 

CASO PRUEBA 5: En cuanto al perfil, modificar datos personales: nombre, usuario...etc. 

CASO PRUEBA 6: En cuanto a las reservas, borrar una reserva o todas las reservas. 

CASO PRUEBA 7: Verificar que el usuario puede darse de baja el mismo desde su sesión. 

CASO PRUEBA 8: Configuración del panel de administración </p>


<h5><a href="#despliegue">Despliegue</a></h5>
<p id="despliegue"></p>

<h5><a href="#herramientas">Herramientas</a></h5>
<p id="herramientas">
 Para la realización del proyecto se han empleado las siguientes herramientas: 
  Visual Studio Code:  ofrece varias extensiones y funcionalidades. 

GitHub y Git: Entre las ventajas de usar GitHub, tener acceso a nuestros repositorios desde cualquier equipo, porque están almacenados en la nube. Su interfaz permite tener acceso rápido a nuestros repositorios. Se integra con Git. Facilita el manejo y la integración de los cambios que hace cada programador del equipo. 

Linux Server: Debian. 

WAMP Server: Para hacer pruebas y testing. 

Perpecute: Email Server Simulated, se utilizó al inicio para la prueba del envío de correos, para verificar el funcionamiento del código fuente </p>

<h5><a href="#lenguajes">Lenguajes</a></h5>
<p id="lenguajes">
HTML: lenguaje de marcas. 

CSS3: es la última versión disponible del lenguaje de marcas, que nos permite crear estilos específicos para nuestras páginas, y que combinando con lenguajes como JavaScript podremos aplicar efectos especiales para interactuar con los usuarios. 

PHP: lenguaje de programación a lado del servidor. 

JavaScript: lenguaje de programación alado del cliente. </p>   
<h5><a href="#sistema-base-de-datos">Sistema Base de datos</a></h5>
<p id="sistema-base-de-datos">
<h3>Sistema Base de datos</h3>
MySQL:  es muy utilizado para proyectos y aplicaciones PHP.  En MySQL hay múltiples motores de almacenamiento, lo cual es de mayor flexibilidad a los desarrolladores en cuanto al uso de las tablas. </p>

<h5><a href="#frameworks">Frameworks</a></h5>
<p id="frameworks">
<p>Bootstrap: utilizar los formularios de modales de Bootstrap, que permiten alternar el foco entre dos formularios sin necesidad de cerrar el formulario inicial. El usuario puede continuar trabajando en otro lugar, en cualquier aplicación, mientras se muestra el formulario. Utilizar otras utilidades ofrecidas por esta maravillosa herramienta. 

Awesome: es un framework de iconos vectoriales y estilos CSS3.  Este framework es utilizado para sustituir imágenes de iconos comunes por gráficos vectoriales convertidos en fuentes. Ha sido utilizado en varias ocasiones en este proyecto, para la integración de los iconos en HTML utiliza la etiqueta <i></i>. </p>

<h5><a href="#tecnologias">Tecnologías</a></h5>
<p id="tecnologias">
AJAX:  es una tecnología que permite a una página web actualizarse de forma dinámica sin recargarse completamente, Ajax permite que un usuario de la aplicación web interactúe con una página web sin la interrupción que implica volver a cargar la página web. La interacción del sitio web ocurre rápidamente sólo con partes de la página de recarga. 
<br>
JSON: es un formato de intercambio de datos que resulta muy fácil de leer y escribir. Ha sido utilizado en la traducción de las páginas, en la mayoría de las pruebas de los ficheros con consultas de base de datos para el testing  mediante la utilización de (json_encode), para imprimir con el formato de Json, nos permite el intercambio de los datos. </p>


<h5><a href="#librerias">Librerías</a></h5>    
<p id="librerias">
JQuery: es una librería perteneciente al lenguaje de programación JavaScript creada para simplificar las operaciones de JavaScript.  

Popper: librería de JavaScript, para añadir tooltips y popovers en elementos HTML. Ofrece un montón de opciones de personalización y es totalmente modular, con diferentes plugins para cada característica.). 

Moment: la librería JavaScript para el manejo de fechas y del tiempo. 

PHPMailer: es una clase desarrollada en PHP que trata de facilitar las funcionalidades asociadas a los envíos y manejos de correos electrónicos. </p>

<h5><a href="#pluggins">Pluggins</a></h5>
<p id="pluggins">
Datatable de JavaScript: DataTables es un plugin para jQuery que permite agregar en las tablas de la página Web un aspecto liviano y las funciones para buscar, ordenar y paginar los resultados de forma rápida. 
FullCalendar plugin de jQuery: El plugin Fullcalendar es un plugin que se usa para mostrar calendario de eventos, citas o cualquier otro proyecto que requiera un calendario visual, que se pueda manipular y sea fácil de usar. </p>

<h5><a href="#bibliotecas">Bibliotecas</a></h5>
<p id="bibliotecas">
Typed.js: Una biblioteca de JavaScript que ayuda a crear animación de escritura para la página web. por ejemplo, un mensaje de bienvenida para el visitante de un sitio web. </p>

<h5><a href="#otros">Otros</a></h5>
<p id="otros">
GoogleFonts : es la plataforma de tipografías gratuitas más conocida entre diseñadores gráficos. 

AdobeColor: para extraer y crear los colores utilizados en el diseño y desarrollo de las páginas web. </p>
       
  <h2><a href="">Producto</a></h2>
      <h5><a href="#panel-del-administrador">Panel del administrador</a></h5>
      <h5><a href="#parte-publica">Parte pública de la aplicación</a></h5>
      <h5><a href="#parte-privada">Parte privada de la aplicación</a></h5>
      <h5><a href="#formularios">Formularios</a></h5>
      <h5><a href="#disenio-responsive">Diseño Responsive</a></h5>
  
  <h2><a href="#bibliografia">Bibliografía</a></h2>
<p id="bibliografia">

https://www.w3schools.com 

http://www.php.net 

CDN: https://cdnjs.com/ 

Ajustes de fullcalendar:   https://fullcalendar.io/    Documentation | FullCalendar 

GIFS:  https://giphy.com 

Software dia para los diagramas de base de datos:  http://dia-installer.de/ 

GanttPro para el diagrama de planificación de tareas:  https://blog.ganttpro.com/ 

Simulador de servidor para la prueba del email de verificación (test email server), licenciado de  Apache License, Version 2.0:           Papercut-SMTP | Papercut SMTP – The Simple Desktop Email Server,   para hacer la prueba de verificación de correos:    Instalación de este simulador de servidor. La prueba se efectúa en Windows, utilizando WAMP server. 

La clase PHPMailer  es descargada mediante este enlace: https://github.com/PHPMailer/PHPMailer 

Traducción: Las imágenes de las banderas se cargan de forma dinámica (online), funciona mediante la utilización de las clases asignada para cada lenguaje, por ejemplo: español (clase: es), inglés (clase: us), Francés (clase: fr), etc.   https://flagsapi.com 

Portada Trabajo, Presentación: https://www.canva.com  </p>
