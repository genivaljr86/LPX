<?php include("header.php"); $guia[3]="current";?>
	<title><?php echo $core_nome;?>| Serviços</title>
	</head>
	<body>
		<div id="header">
			<div id="topo" class="centraliza">
				<?php include ("topo.php"); ?>        	
			</div>
		</div>
		<div id="content">
        	<div id="indice">
            	<div class="centraliza">
                	<img src="<?php servidor(); ?>images/serv/title.png" alt="" class="title">
                    <img src="<?php servidor(); ?>images/serv/nav.png" alt="" class="nav">
                </div>
            </div>
        	<div id="serv" class="centraliza corpo">
            	<div id="conteudo" class="centraliza">
                	<div id="texto">
                    	Conheça as áreas de atuação da LPX Engenharia
                    </div>
                    <div id="itens">
                    	<a href=""><img src="<?php servidor(); ?>images/serv/rodfer.jpg" alt=""></a>
                    	<a href=""><img src="<?php servidor(); ?>images/serv/obraesp.jpg" alt=""></a>
                    	<a href=""><img src="<?php servidor(); ?>images/serv/obciv.jpg" alt=""></a>
                    </div>
                	
                </div>
            </div>
        
        </div>
		<div id="footer">
			<?php include ("footer.php"); ?>
		</div>
	</body>
</html>
