<?php include("header.php"); ?>
	<title><?php echo $core_nome;?>| Home</title>
	</head>
	<body>
		<div id="header">
			<div id="topo" class="centraliza">
				<?php include ("topo.php"); ?>        	
			</div>
		</div>
		<div id="content">
        	<div id="home" class="centraliza corpo">
            	<div id="slider_area">
            		<div id="slider">
                    	<img src="<?php servidor(); ?>images/slide_home/1.jpg" alt="">
                        <img src="<?php servidor(); ?>images/slide_home/2.jpg" alt="">
                    </div>
                    <div class="coluna">
                    	<div id="conheca">
                        	<a href=""><img src="<?php servidor(); ?>images/home/quemsomos_bt.png" alt=""></a>
                        </div>
                        <div id="servprod">
                        	<a href=""><img src="<?php servidor(); ?>images/home/servprod_bt.png" alt=""></a>
                        </div>
                    </div>
                    <div class="coluna">
                    	<div id="face"></div>
                    </div>
                    <div class="coluna"></div>
                    <div class="separator"></div>
            	</div>
            </div>
        
        </div>
		<div id="footer">
			<?php include ("footer.php"); ?>
		</div>
	</body>
</html>
