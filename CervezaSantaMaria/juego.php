<DOCTYPE HTML>
	<head>	
	</head>
	
	<body>
		Guess: <input type="text" id="myText" value="">
		<button onclick="submit()">Submit</button>
		<p id="mensaje"> </p>
		
	
		
		<div class="vasolleno">
			<img src="../Santamaria_LivePoll/vasolleno.png">
		</div>
		
		<div id="bar" style="display: none;">
			<img src="../Santamaria_LivePoll/bar.png">
		</div>
		<div id="barril"  style="display: none;">
			<img src="../Santamaria_LivePoll/barril.png">
		</div>
		<div id="botella"  style="display: none;">
			<img src="../Santamaria_LivePoll/botella.png">
		</div>
		<div id="casco"  style="display: none;">
			<img src="../Santamaria_LivePoll/casco.png">
		</div>
		<div id="co2"  style="display: none;">
			<img src="../Santamaria_LivePoll/co2.png">
		</div>
		<div id="corcholata"  style="display: none;">
			<img src="../Santamaria_LivePoll/corcholata.png">
		</div>
		<div id="destapador"  style="display: none;">
			<img src="../Santamaria_LivePoll/destapador.png">
		</div>
		<div id="dispensador"  style="display: none;">
			<img src="../Santamaria_LivePoll/dispensador.png">
		</div>
		<div id="lupulo"  style="display: none;">
			<img src="../Santamaria_LivePoll/lupulo.png">
		</div>
		<div id="tarro"  style="display: none;">
			<img src="../Santamaria_LivePoll/tarro.png">
		</div>
		<div id="trigo"  style="display: none;">
			<img src="../Santamaria_LivePoll/trigo.png">
		</div>
		
	
		
		
		
		<div class="fondo">
			<img src="../Santamaria_LivePoll/capaprincipal.png">
				<div class="blanco" id="blanco">
				
				</div>
		</div>
		
		<p id="demo"></p>
	</body>
	
	
	
	<script>
	
		var count = 0;
		
		function submit() {
			var guess = document.getElementById("myText").value.toLowerCase();
			if (guess == "bar") {
				var x = document.getElementById("bar");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}	
			} else if (guess == "botella") {
				var x = document.getElementById("botella");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "barril") {
				var x = document.getElementById("barril");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "casco") {
				var x = document.getElementById("casco");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "co2") {
				var x = document.getElementById("co2");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "corcholata") {
				var x = document.getElementById("corcholata");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "destapador") {
				var x = document.getElementById("destapador");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "dispensador") {
				var x = document.getElementById("dispensador");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "lupulo") {
				var x = document.getElementById("lupulo");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "tarro") {
				var x = document.getElementById("tarro");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			} else if (guess == "trigo") {
				var x = document.getElementById("trigo");
				if (x.style.display === "none") {
					x.style.display = "block";
					count++;
					fill();
				}
			}
		}
		
		
		function fill() {
			
			if (count == "1") {
				 document.getElementById("blanco").style.height="400px";
			}
			if (count == "2") {
				 document.getElementById("blanco").style.height="385px";
			}
			if (count == "3") {
				 document.getElementById("blanco").style.height="360px";
			}
			if (count == "4") {
				 document.getElementById("blanco").style.height="345px";
			}
			if (count == "5") {
				 document.getElementById("blanco").style.height="330px";
			}
			if (count == "6") {
				 document.getElementById("blanco").style.height="315px";
			}
			if (count == "7") {
				 document.getElementById("blanco").style.height="300px";
			}
			if (count == "8") {
				 document.getElementById("blanco").style.height="285px";
			}
			if (count == "9") {
				 document.getElementById("blanco").style.height="270px";
			}
			if (count == "10") {
				 document.getElementById("blanco").style.height="255px";
			}
			if (count == "11") {
				 document.getElementById("blanco").style.height="240px";
				 document.getElementById("mensaje").innerHTML = "Completo";
				 
			}
		}
		
	</script>
	
	
</html>

<style>

body{
  margin:0;
}

img{
	position: fixed;
	width: 1000px;
	z-index: 3;
	margin: 0 auto;
	left: 50%;
	margin-left: -500px;
	
}

.vasolleno {
	position: relative;
	z-index: -3;
}

.blanco {
	position: relative;
	z-index: 1;
	Background-color: white;
	margin: 0 auto;
	width: 40%;
	height: 450px;

}

</style>