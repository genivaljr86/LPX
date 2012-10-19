<?php include("header.php"); $guia[5]="current";?>
	<title><?php echo $core_nome;?>| Localização</title>
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
                	<img src="<?php servidor(); ?>images/local/title.png" alt="" class="title">
                    <img src="<?php servidor(); ?>images/local/nav.png" alt="" class="nav">
                </div>
            </div>
        	<div id="local" class="centraliza corpo">
            	<div id="conteudo">
                	<div id="texto1" class="centraliza">
                    	A LPX Engenharia está pronta para atender você. Veja no mapa abaixo aonde localizar a nossa empresa e fazer uma visita para conheçer nossos serviços. 
                    </div>
                	<iframe width="788" height="403" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=-1.458943,-48.482516+(LPX+Engenharia)&amp;aq=&amp;sll=-1.458943,-48.482516&amp;sspn=0.011862,0.021136&amp;ie=UTF8&amp;t=m&amp;ll=-1.454116,-48.482623&amp;spn=0.017289,0.033774&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                    <div class="separator"></div>
                    <div id="endereco">
                    	Av. Generalissimo Deodoro, 2044 CEP 66045-190 <br>
						Cremação Belém PA Brasil contato@lpxengenharia.net
                    </div>
                </div>
                
            </div>
        
        </div>
		<div id="footer">
			<?php include ("footer.php"); ?>
		</div>
	</body>
</html>
