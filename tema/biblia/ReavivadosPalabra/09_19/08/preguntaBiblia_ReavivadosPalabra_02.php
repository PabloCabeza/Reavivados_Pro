<?php
// session_start();//se inicia sesion para llamar las variables $_SESSION creadas en otros archivos, o para crear una.

	if(!isset($_SESSION["ID_Participante"])){//sino hay nada almacenado en la variable superglobal devuelve a la pagina de inicio con esto se garantiza que el usuario entro por login

  		header("location:../../index.php");			
	}
	else{  ?>
		<div>
			<p class="pregunta">¿Que rey atacó a Oseas, rey de Israel, lo hizo su vasallo y le impuso tributo?</p>
		</div>
		<div class="Quinto">
			<div class="Quinto_2">
				<p id="principiantes_01a" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Rezín, rey de Siria</p>
				<p id="principiantes_01b" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Jerjes I el grande, rey de Persia</p>
			</div>
			<div class="Quinto_2">
				<p id="principiantes_01c" class="efecto" onclick="sonidoCorrecto(); pauseAudioBiblia();llamar_sombrear(); setTimeout(llamar_puntaje,100)">Salmanasar, rey de Asiria</p>
				<p id="principiantes_01d" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Ciro, rey de los medos</p>
			</div>
		</div
		<?php
		$_SESSION["Versiculo"] = "2 reyes 18:19";
    }  
	//2 reyes 18:9
	//09 de septiembre de 2019

    ?>