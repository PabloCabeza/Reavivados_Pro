<?php
// session_start();//se inicia sesion para llamar las variables $_SESSION creadas en otros archivos, o para crear una.

	if(!isset($_SESSION["ID_Participante"])){//sino hay nada almacenado en la variable superglobal devuelve a la pagina de inicio con esto se garantiza que el usuario entro por login

  		header("location:../../index.php");			
	}
	else{  ?>
		<div>
			<p class="pregunta">¿Contra cuál pueblo iban a hacer guerra los reyes de Israel y Judá?</p>
		</div>
		<div class="Quinto">
			<div class="Quinto_2">
				<p id="principiantes_01a" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Gilgal</p>
				<p id="principiantes_01b" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Gad</p>
			</div>
			<div class="Quinto_2">
				<p id="principiantes_01c" class="efecto" onclick="sonidoCorrecto(); pauseAudioBiblia();llamar_sombrear(); setTimeout(llamar_puntaje,100)">Ramot de Galaad</p>
				<p id="principiantes_01d" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Asiria</p>
			</div>
		</div
		<?php
		$_SESSION["Versiculo"] = "2 Crónicas 18:3";
	}  
	//01 de noviembre de 2019
    ?>