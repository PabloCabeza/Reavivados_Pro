<?php
// session_start();//se inicia sesion para llamar las variables $_SESSION creadas en otros archivos, o para crear una.

	if(!isset($_SESSION["ID_Participante"])){//sino hay nada almacenado en la variable superglobal devuelve a la pagina de inicio
    	//con esto se garantiza que el usuario entro por login

  		header("location:../../index.php");			
	}
	else{  ?>
		<div>
			<p class="pregunta">Los que fueron apartados para el servicio de canto con sus hijos y hermanos sumaban un total de:</p>
		</div>
		<div class="Quinto">
			<div class="Quinto_2"> 
				<p id="principiantes_01a" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Ciento cincueta persona</p>
				<p id="principiantes_01b" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Veinte persona</p>
			</div>
			<div class="Quinto_2">
				<p id="principiantes_01c" class="efecto" onclick="sonidoCorrecto(); pauseAudioBiblia();llamar_sombrear(); setTimeout(llamar_puntaje,100)">Doscientos ochenta y ocho personas</p>
				<p id="principiantes_01d" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Trescientas personas</p>
			</div>
		</div
		<?php
		$_SESSION["Versiculo"] = "1 Crónicas 25:7";
	}  
	// 10 de octubre de 2019
    ?>