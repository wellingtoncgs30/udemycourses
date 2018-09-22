<?php include_once("header.php");?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

	<section>

		<div id="call-to-action"><!-- Chamada para ação, ou seja, ativa uma ação ao botão no bootstrap -->

			<div class="container">

				<div class="row text-center">
					<h2>Videos</h2>
					<hr>
				</div>
				<div class="row">
					
					<div class="player">
						<video src="mp4/highlights.mp4" controls poster="img/highlights.jpg">
							<track kind="captions" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default><!-- tag para colocar legenda em um vídeo -->
						</video><!-- criação da tag de vídeo para exibir vídeos na página -->
					</div>
					<!-- o atributo autoplay executa o vídeo automaticamente quando a página é carregada -->
					<!-- o atributo controls exibe os controles do vídeo como: executar, pausar, aumentar ou diminuir volume, colocar o vídeo em tela inteira e avançar ou retroceder o vídeo -->
					<!-- o atributo poster coloca uma foto para exibição (por padrão, ele permanece na tela enquanto o vídeo não é executado) antes de executar um vídeo -->
					<!--<audio src="" style="display: none;"></audio>--><!-- criação da tag audio que serve para colocar áudios em um página html5 -->
						
					<input type="range" id="volume" min="0" max="1" step="0.01" value="0.5"><!-- criação de um botão de volume -->
						
					<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
				</div>
						
			</div>

		</div>
			
		<div id="news" class="container" style="top: 0"><!-- alinha no meio o conteúdo das notícias -->
			<div class="row text-center"><!-- classe do bootstrap que centraliza o texto -->
				<h2>Latest News</h2>
				<hr><!-- cria uma linha horizontal -->
			</div>
			<div class="row thumbnails owl-carousel owl-theme"><!-- acrescentando classe CSS do owl carousel na div -->
			<!-- divide em 4 colunas com peso 3 o que dá 12 colunas no total (padrão bootstrap) -->
				<div class="item" data-video="highlights"><!-- O plug-in do JQuery faz o ajuste em colunas automaticamente -->
					<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>Highlights</h3>
					</div>
				</div>
				<div class="item" data-video="Orlando_City_Foundation_2015">
					<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City Foundation 2015</h3>
					</div>
				</div>
				<div class="item" data-video="highlights"><!-- O plug-in do JQuery faz o ajuste em colunas automaticamente -->
					<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>Highlights</h3>
					</div>
				</div>
				<div class="item" data-video="Orlando_City_Foundation_2015">
					<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City Foundation 2015</h3>
					</div>
				</div>
				<div class="item" data-video="highlights"><!-- O plug-in do JQuery faz o ajuste em colunas automaticamente -->
					<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>Highlights</h3>
					</div>
				</div>
				<div class="item" data-video="Orlando_City_Foundation_2015">
					<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City Foundation 2015</h3>
					</div>

				</div>
					
			</div>
				
		</div>
			
	</section>

<?php

	include_once("footer.php");

?>

<script src="lib/plyr/dist/plyr.js"></script><!-- chama o arquivo do plyr em formato javascript -->
<script>
	(function(d, p){
		var a= new XMLHttpRequest(),
		b = d.body;
		a.open("GET", p, true);
		a.send();
		a.onload = function(){
			var c=d.createElement("div");
			c.style.display = "none";
			c.innerHTML = a.responseText;
			b.insertBefore(c, b.childNodes[0]);
		}
	})(document, "lib/plyr/dist/sprite.svg");
</script>

<script>//abertura da tag script para utilizar o JQuery
		//execução do código JQuery
		/*$(document).ready(function()estrutura básica de execução de um código JQuery{ ou a declaração abaixo que é a forma resumida*/
				
	$(function(){
		$(".thumbnails .item").on("click", function(){
			$("video").attr({
				"src":"mp4/"+$(this).data('video')+".mp4",
				"poster":"img/"+$(this).data('video')+".jpg"
					
			});//criação de uma playlist no site do Orlando City
				//comando attr altera atributos de uma tag
		});
				
	$("#volume").on("mousemove", function(){
		jQuery("video")[0].volume=parseFloat($(this).val());//exibe no console do navegador os valores definidos na tag input com a propriedade range quando o usuário mexe no botão de volume
	});
				
	$("#btn-play-pause").on("click", function(){
										
		var video=$("video")[0];
					
		if($(this).hasClass("btn-success")){
			$(this).text("STOP");
			video.play();//método que vai executar o vídeo
			} else {
				$(this).text("PLAY");
				video.pause();//método que vai pausar o vídeo
			}
					
			$(this).toggleClass("btn-success btn-danger");//toggleClass serve para alterar uma classe
		});
		plyr.setup();//método que dispara o player plyr	
	});//código do JQuery que executa alguma ação quando o documento estiver pronto
</script><!-- fechamento da tag script -->