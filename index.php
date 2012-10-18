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
                    	<div id="face">
							<script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US"></script>
					<script type="text/javascript">FB.init("");</script>
                    <fb:fan profile_id="541734165841034" stream="0" connections="5" width="300px" height="160px" header="0" logobar="0"   css=http://talentodesign.com.br/stylesheets/fb_lpx.css?2"></fb:fan>
                      </div>
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
