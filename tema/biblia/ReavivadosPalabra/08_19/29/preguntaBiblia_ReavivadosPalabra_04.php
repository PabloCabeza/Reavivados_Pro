<?php
// session_start();//se inicia sesion para llamar las variables $_SESSION creadas en otros archivos, o para crear una.

	if(!isset($_SESSION["ID_Participante"])){//sino hay nada almacenado en la variable superglobal devuelve a la pagina de inicio
    	//con esto se garantiza que el usuario entro por login

  		header("location:../../index.php");			
	}
	else{  ?>
		<div>
			<p class="pregunta">La mujer sunamita fue a ver al rey para rogarle por:</p>
		</div>
		<div class="Quinto">
			<div class="Quinto_2">
				<p id="principiantes_01a" class="efecto" onclick="sonidoInCorrecto();pauseAudioBiblia(); llamar_bloqueo()">Le diera dinero y comida</p>
				<p id="principiantes_01b" class="efecto" onclick="sonidoInCorrecto();pauseAudioBiblia(); llamar_bloqueo()">Consiguiera liberar a su esposo</p>
			</div>
			<div class="Quinto_2">
				<p id="principiantes_01c" class="efecto" onclick="sonidoCorrecto();pauseAudioBiblia(); llamar_sombrear(); setTimeout(llamar_puntaje,100)">Le devolviera su casa y sus tierras</p>
				<p id="principiantes_01d" class="efecto" onclick="sonidoInCorrecto();pauseAudioBiblia(); llamar_bloqueo()">Le comprara sus tierras</p>
			</div>
		</div
		<?php
    }  
   
	// 2 reyes 8:3
	// 29 de agosto de 2019 
    ?>