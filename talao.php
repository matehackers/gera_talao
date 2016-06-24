<!DOCTYPE html>
<html>
<head>
	<title>Talões MateHackers</title>
	 <meta charset="UTF-8">
	 <style type="text/css">
	 	.bilhete {
	 		width: 100%;
			float: left;
	 	}	

		.canhoto {
			line-height: 30px;
			display:block;
			float: left; 
			min-height: 100px; 
			text-align: center; 
			width: 20%;  
    		background-repeat: no-repeat; 
    		background-position: center;	
    		margin-top: 15px;
    		border: 1px solid #888;
    		padding: 15px;
    		z-index: 1;
			position:relative;
		}

		.canhoto .span-canhoto-titu{
			font-weight: bold;
			font-size: 120%;
		}

		.canhoto .span-canhoto-num{
			font-weight: bold;
			font-size: 120%;
		}

		.talao {
			line-height: 30px;
			display:block;
			float: left; 
			min-height: 100px; 
			text-align: center; 
			width: 30%; 
    		background-repeat: no-repeat; 
    		background-position: center;	
    		margin-top: 15px;
    		border: 1px solid #101010;
    		padding: 15px;
    		z-index: 1;
			position:relative;		
		}

		.talao .span-talao-titu{
			font-weight: bold;
			font-size: 120%;
		}

		.talao .span-talao-num{
			font-weight: bold;
			font-size: 120%;
		}

		.watermark {
			z-index: -1;
			position:absolute;
			margin-left: -115px;
		}


		@media print {

			.bilhete{
				width: 100%;
				float: left;
				page-break-inside:avoid !important;
			}

			.canhoto {
				line-height: 30px !important;
				display: block !important;
				float: left; 
				height: 100px; 
				text-align: center; 
				width: 200px; 
	    		background-repeat: no-repeat; 
	    		background-position: center;	
	    		margin-top: 15px;
	    		border: 1px solid #888;
	    		padding: 15px;
	    		z-index: 1;
				position:relative;
			}

			.canhoto .span-canhoto-titu{
				font-weight: bold;
				font-size: 120%;
			}

			.canhoto .span-canhoto-num{
				font-weight: bold;
				font-size: 120%;
			}

			.talao {
				line-height: 30px !important;
				display: block !important;
				float: left; 
				height: 100px;
				text-align: center; 
				width:350px; 
	    		background-repeat: no-repeat; 
	    		background-position: center;	
	    		margin-top: 15px;
	    		border: 1px solid #888;
	    		padding: 15px;
	    		z-index: 1;
				position:relative;	
			}

			.talao .span-talao-titu{
				font-weight: bold;
				font-size: 120%;
			}

			.talao .span-talao-num{
				font-weight: bold;
				font-size: 120%;
			}

			/* Marca d'água */
			.watermark {
				z-index: -1;
				position:absolute;
				margin-left: -115px;
			}

		}
	 </style>


</head>
	<body>
		<?php for ($i = 1; $i <= 10; $i++): ?>
		<div class="bilhete">
			<div class="canhoto">
				<img src="watermark.jpg" class="watermark">
				<div class="span-canhoto-titu">Lorem ipsum dolor sit amet</div>
				<div class="span-canhoto-data">25/06/2016</div>
				<div class="span-canhoto-num">Nº <?php echo  str_pad($i, 4, '0', STR_PAD_LEFT); ?> </div>
			</div>
			<div class="talao">
				<img src="watermark.jpg" class="watermark">
				<div class="span-talao-titu">Lorem ipsum dolor sit amet</div>
				<div class="span-talao-data">25/06/2016</div>
				<div class="span-talao-num">Nº <?php echo str_pad($i, 4, '0', STR_PAD_LEFT); ?></div>		
			</div>
		</div>
		<?php endfor; ?>
	</body>
</html>