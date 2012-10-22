<?php include("header.php"); $guia[6]="current";?>
	<title><?php echo $core_nome;?> | Contato</title>
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
                	<img src="<?php servidor(); ?>images/contato/title.png" alt="" class="title">
                    <img src="<?php servidor(); ?>images/contato/nav.png" alt="" class="nav">
                </div>
            </div>
        	<div id="contato" class="centraliza corpo">
            	<div id="texto">
                	Quer tirar alguma dúvida, enviar uma sugestão, critíca ou saber mais de nossos serviços? Preencha o formulário abaixo que em breve entraremos em contato com você.
                </div>
                <div class="separator"></div>
                <div id="formulario">
                	<form action="">
                    	<label for="nome"><img src="<?php servidor(); ?>images/contato/nome_f.png" alt=""></label><br>
                		<input type="text" name="nome" id="nome"><br>
                    	<label for="email"><img src="<?php servidor(); ?>images/contato/email_f.png" alt=""></label><br>
                		<input type="text" name="email" id="email"><br>
                    	<label for="tel"><img src="<?php servidor(); ?>images/contato/tel_f.png" alt=""></label><br>
                		<input type="text" name="tel" id="tel"><br>
                    	<label for="mens"><img src="<?php servidor(); ?>images/contato/mens_f.png" alt=""></label><br>
                        <textarea name="mens" id="mens" cols="30" rows="10"></textarea><br>
                        <center><input type="image" src="<?php servidor(); ?>images/contato/bt_off.png" alt="" id="cont_bt"  class="botao"></center>
                	</form>
                </div>
                <img src="<?php servidor(); ?>images/contato/banner.png" alt="" id="banner">
                <div class="separator"></div>
            </div>
        
        </div>
		<div id="footer">
			<?php include ("footer.php"); ?>
		</div>
    <?php include("contato_msg.php"); ?>
	</body>
</html>
