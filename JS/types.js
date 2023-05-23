const typed = new Typed('.typed',({
    strings: [
    '<i class="styletyped">Plazas limitadas,<br>reserva ahora<br>directamente<br>para unirte<br>a una clase!<br><br> <a href="PHP/indexLogin.php"><button style="margin-bottom: 200px; padding: 6px; width:250px; color:#000e31; font-size:2.4rem; font-weight: 700; background: linear-gradient(45deg, #3B70A2, #4D7DAA, #3B70A2); border: 4px white; box-shadow: 1px 3px 1px 4px #000e31;">Reservar</button></a><i>'
], 
    //stringsElement: '#typedvelocity', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 80, // Velocidad en mlisegundos para poner una letra,
	startDelay: false, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: false, // Velocidad en milisegundos para borrrar una letra,
	//smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1000, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: 1, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: false, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
}));



 