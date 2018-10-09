<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style type="text/css">

		#twisterWheel {
		  	height: 400px;
		  	width: 400px;
		  	border-radius: 50%;
		  	position: relative;
		}	

		#twisterWheel li {
			list-style: none;
			border-radius: 50%;
		  	height: 55px;
		  	width: 55px;
		  	position: absolute;
		  	top: 50%;
		  	left: 50%;
		  	word-wrap: break-word;
		}

		.yellowCircle {
			background-color: var(--yellow);
		}
		.redCircle {
			background-color: var(--red);
		}
		.greenCircle {
			background-color: var(--green);
		}
		.blueCircle {
			background-color: var(--blue);
		}
		.strike { 
			width: 2px;
			height: 150px;
			position: absolute;
			top:50%;
			left: 54%;
			background-color: black;
		}
		.strike:after {
		  content: "";
		  border-bottom: 11px solid #222;
		  border-left: 8px solid transparent;
		  border-right: 8px solid transparent;
		  position: relative;
		  right: 7px;
		  top: -25px
		}
	</style>
</head>
<body class="bg-dark bg-faded">
	 <audio id="audio" autoplay class="hidden">
	  <source src="back.mp3" type="audio/mpeg">
	  Your browser does not support the audio element.
	</audio> 
	<div class="container h-100">
		<button class="btn btn-danger m-1" onclick="test()">Çevir</button>
		<button class="btn btn-warning m-1" onclick="$('#exampleModal').modal()"> Nasıl Oynanır?</button>
		<button class="btn btn-info m-1" onclick="$('audio').remove()"> Sesi Kapat</button>
	    <div class="my-auto d-flex justify-content-center col-12">
	    	<ul id="twisterWheel" class="mt-5 text-center">
	    		<div class="strike"></div>
	    		<li class="redCircle"> Sol Ayak </li>
	    		<li class="blueCircle"> Sol Ayak </li>
	    		<li class="greenCircle"> Sol Ayak </li>
	    		<li class="yellowCircle"> Sol Ayak </li>
	    		<li class="redCircle"> Sol <br>El </li>
	    		<li class="blueCircle"> Sol <br>El </li>
	    		<li class="greenCircle"> Sol <br>El </li>
	    		<li class="yellowCircle"> Sol <br>El </li>
	    		<li class="redCircle"> Sag <br>El </li>
	    		<li class="blueCircle"> Sag <br>El </li>
	    		<li class="greenCircle"> Sag <br>El </li>
	    		<li class="yellowCircle"> Sag <br>El </li>
	    		<li class="redCircle"> Sag Ayak </li>
	    		<li class="blueCircle"> Sag Ayak </li>
	    		<li class="greenCircle"> Sag Ayak </li>
	    		<li class="yellowCircle"> Sag Ayak </li>
	    	</ul>
	    </div>
 	</div>

 	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Nası Oynanır?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<p>Twisterda öncelikle oyunu fiziksel olarak oynayacak oyuncular belirlenir. 1 kişi de hakem olarak seçilir. Hakem olan kişi çarkı çevirir. Oyunda sarı, kırmızı, yeşil ve mavi renkler mevcuttur. Twister oyununun halısı zemine serilir. Hakem çarkı çevirir. Gelen komutu sırası gelen oyuncuya söyler. Örneğin: Sağ el sarıya der. Bunun üzerine sırası gelen oyuncu sağ elini sarı zemine koyar. Sonra diğer oyuncu için çarkı çevirir ve bu oyuncu da gelen komutu uygular. Twister’da dayanmak, başka bir yerden destek almak yasaktır. Konumunu bozan oyuncu oyunu kaybeder.</p>
	      	<p>
	      		<img src="https://is2-ssl.mzstatic.com/image/thumb/Purple49/v4/56/ef/94/56ef94e9-46fe-b915-4876-daa024076b0f/pr_source.png/480x270bb.jpg" class="mx-auto img-thumbnail">
	      	</p>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Anladım !</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
			var test = function(){
				var strike = $(".strike");
				var randomRotate = Math.floor((Math.random() * 720) + 1);
				strike.css("transform", "rotate("+randomRotate+"deg)");
				strike.css("transition", "2s");
			}

			var list = $("#twisterWheel");
			
			var updateLayout = function(listItems) {
			  for (var i = 0; i < listItems.length; i++) {
			    var offsetAngle = 360 / listItems.length;
			    var rotateAngle = offsetAngle * i;
			    $(listItems[i]).css("transform", "rotate(" + rotateAngle + "deg) translate(0, -195px) rotate(-" + rotateAngle + "deg)")
			  };
			};
			updateLayout($("#twisterWheel li"));
			$("#exampleModal").modal();
	</script>
</body>
</html>