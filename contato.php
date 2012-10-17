<?php include("header.php"); ?>
	<title><?php echo $core_nome;?>| Home</title>
	</head>
    <body>
		<div id="header">
			<div id="topo" class="centraliza">
				<img src="<?php servidor();?>images/logo.png" id="logo">
                <div id="redes">
                	<img src="images/contato.png" id="cont">
					<img src="images/face.png" id="rede-fac">
					<img src="images/twiter.png" id="rede-twit">
				</div>
                <div id="navigation">
                </div>
			</div>
		</div>
		<div id="content"></div>
		<div id="footer">
        	<?php $data=date("Y"); echo $data; ?><!-- Data Atual --> 
		</div>
        <?php include("contato_msg.php"); ?>
	</body>
</html>
