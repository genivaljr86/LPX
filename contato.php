<?php include("header.php"); $guia[4]="current";?>
	<title><?php echo $core_nome;?>| Engenharia</title>
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
                	<img src="<?php servidor(); ?>images/eng/title.png" alt="" class="title">
                    <img src="<?php servidor(); ?>images/eng/nav.png" alt="" class="nav">
                </div>
            </div>
        	<div id="eng" class="centraliza corpo">
            	<div id="texto">
                	Quer tirar alguma dúvida, enviar uma sugestão, critíca ou saber mais de nossos serviços? Preencha o formulário abaixo que em breve entraremos em contato com você.
                </div>
                <div id="formulario">
                	<form action="">
                    	<label for=""><img src="<?php servidor(); ?>images/contato/nome_f.png" alt=""></label><br>
                		<input type="text" name="nome" id="nome"><br>
                    	<label for=""><img src="<?php servidor(); ?>images/contato/email_f.png" alt=""></label><br>
                		<input type="text" name="email" id="email"><br>
                    	<label for=""><img src="<?php servidor(); ?>images/contato/tel_f.png" alt=""></label><br>
                		<input type="text" name="tel" id="tel"><br>
                    	<label for=""><img src="images/contato/mens_f.png" alt=""></label><br>
                        <textarea name="mens" id="mens" cols="30" rows="10"></textarea>
                	</form>
                </div>
            </div>
        
        </div>
		<div id="footer">
			<?php include ("footer.php"); ?>
		</div>
	</body>
</html>
