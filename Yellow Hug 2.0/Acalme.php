<!DOCTYPE html>
<html>
<head>
	<title>Yellow Hug</title>
	<link rel="stylesheet" href="assets/css/style.css?<?= filectime('assets/css/style.css'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/YgCE9d6.png" />
	<meta charset="utf-8">
	<script src="assets/js/default.js?<?= filectime('assets/js/default.js'); ?>"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div id="all">
		<header>
			<div id="center">
				<div class="logo">
					<img src="https://i.imgur.com/YgCE9d6.png" alt="" style="width:73px;margin-top: 21px;float: left;margin-right:7px;filter: drop-shadow(0px 2px 3px #F6FE74);">
					<span>Yellow Hug</span>
				</div>
				<div class="right">
					
					
					<div class="button"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Sair</div>

				</div>
				<ul>
					<a href="Videos.php">
						<li style="margin-left: 0;">
							<img src="assets/img/icon-videos.png" alt="">
							<span>Vídeos</span>
						</li>
					</a>
					<a href="Artigos.php">
						<li>
							<img src="assets/img/icon-artigo.png" alt="">
							<span>Artigos</span>
						</li>
					</a>
					<a href="Acalme.php">
						<li>
							<img src="assets/img/icon-acalme.png" alt="">
							<span>Acalme</span>
						</li>
					</a>
					<a href="https://www.mundodasmensagens.com/frases-motivacionais/" target="_blank">
						<li>
							<img src="assets/img/icon-love.png" alt="">
							<span>Motivacionais</span>
						</li>
					</a>
					<a href="http://www.naoentreaki.com.br/users/Depressivo/posts/destaques/" target="_blank">
						<li>
							<img src="assets/img/icon-like.png" alt="">
							<span>Humor</span>
						</li>
					</a>
				</ul>
			</div>
		</header>
		
		<div class="bg">
			<div id="center">
				<div class="content">
					<canvas id="canvas" style="margin-left: calc(50% - 200px);background: rgba(254, 207, 10, 1);" width="400" height="400"></canvas>

<script>
    window.onload = function(){
        canvas = document.getElementById("canvas");
        ctx = canvas.getContext("2d");

        document.addEventListener("keydown", function(e){
            console.log(e.keyCode);
            switch(e.keyCode){
                case 37:
                    velX = -1;
                    velY = 0;
                    break;
                case 38:
                    velY = -1;
                    velX = 0;
                    break;
                case 39:
                    velX = 1;
                    velY =0;
                    break;
                case 40:
                    velY = 1;
                    velX = 0
                    break;
            }
        });

        setInterval(jogo, 100);
    }

    positionX = 10;
    positionY = 10;
    foodX = 15;
    foodY = 15;
    velX = 0;
    velY = 0;
    grid = 20;
    snake = [];
    tam = 5;

    function jogo(){
        positionX += velX;
        positionY +=velY;

        console.log(positionX);
        if(positionX < 0){
            positionX = grid;
        }
        if(positionX > grid){
            positionX = 0; 
        }
        if(positionY < 0){
            positionY = grid;
        }
        if(positionY > grid){
            positionY = 0; 
        }
        

        ctx.fillStyle = "rgba(254, 207, 10, 1)";
        ctx.fillRect(0,0, canvas.width, canvas.height);

        
        
        ctx.fillStyle = "black";
        for(var i=0; i < snake.length; i ++){
            ctx.fillRect(snake[i].x * grid, snake[i].y * grid, grid - 1 , grid - 1);
            if(snake[i].x == positionX && snake[i].y == positionY){
                tam = 5;
            }
        }  

        snake.push({x: positionX, y: positionY});
        while(snake.length > tam){
            snake.shift();
        }

        ctx.fillStyle = "red";
        ctx.fillRect(foodX* grid, foodY * grid, grid - 1, grid - 1);

        if(positionX == foodX && positionY == foodY){
            tam++;
            foodX = Math.floor(Math.random() * grid);
            foodY = Math.floor(Math.random() * grid);
        }
        
    }

    
</script>   
				</div>
			</div>
		</div>
		<div id="center">
			<a href="https://www.cvv.org.br/" target="_blank">
				<div class="sos"><span>Preciso de ajuda agora!</span></div>
			</a>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/default.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>