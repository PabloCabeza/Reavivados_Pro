<?php
// session_start();//se inicia sesion para llamar las variables $_SESSION creadas en otros archivos, o para crear una.

	if(!isset($_SESSION["ID_Participante"])){//sino hay nada almacenado en la variable superglobal devuelve a la pagina de inicio con esto se garantiza que el usuario entro por login

  		header("location:../../index.php");			
	}
	else{  ?>
		<div>
			<p class="pregunta">La ofrenda de la leña para el templo del Señor, le tocaba llevarla a los sacerdotes, los levitas y a: </p>
		</div>
		<div class="Quinto">
			<div class="Quinto_2">    
				<p id="principiantes_01a" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Los ancianos</p>
				<p id="principiantes_01b" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Los diáconos</p>
			</div>
			<div class="Quinto_2">
				<p id="principiantes_01c" class="efecto" onclick="sonidoCorrecto(); pauseAudioBiblia();llamar_sombrear(); setTimeout(llamar_puntaje,100)">El pueblo en general</p>
				<p id="principiantes_01d" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">El gobernador</p>
			</div>
	</div>
		<?php
		$_SESSION["Versiculo"] = "Nehemías 10:34";
	}  
	//09 de diciembre de 2019
    ?>