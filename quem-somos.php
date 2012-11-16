<?php 
include("header.php"); 
$guia[2]="current"; 
$pg = $_GET["pg"];
 if($pg ==""){
	 $pg="historia";
	 }

?>
	<title><?php echo $core_nome;?>| Quem Somos</title>
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
                	<img src="<?php servidor(); ?>images/quem-somos/quem-somos-top.png" alt="" class="title">
                    <img src="<?php servidor(); ?>images/local/nav.png" alt="" class="nav">
                </div>
            </div>
        	<div id="quem-somos" class="centraliza corpo">
            	<div id="coluna_texto">
                  	<img src="<?php servidor(); ?>images/quem-somos/quem-somos.png" alt="">
                    <?php if($pg == "historia"){  ?>
                	<img src="<?php servidor(); ?>images/quem-somos/uma-historia.png" style="margin-left:20px" alt="">
                    <div id="texto_quemsomos">
		                <p>A LPX Engenharia é uma sólida empresa que atua no setor de obras civis em geral, desde a restauração de prédios até a construção ferrovias, rodovias e edifícios. Estamos no mercado há mais de 20 anos e estivemos a frente de importantes obras da capital e do interior do estado, como a restauração do Campus Universitário do IFPA, da Fundação Tancredo Neves (CENTUR), na construção da Cadeia Pública de Parauapebas e das Quadras Poliesportivas de Mocajuba.</p>
		                <br>
		                <p>Somos 30 profissionais, entre engenheiros, técnicos e administradores que estão empenhados em preparar e oferecer os melhores projetos civis, sempre primando pela qualidade e eficiência que nossos clientes merecem. Presente em Belém e em mais sete municípios do interior, e agora caminhando em direção a Cametá, a LPX Engenharia é certificada como Nível A, segundo o Programa Brasileiro de Qualidade e Produtividade de Habitat, e isso somente foi possível graças ao nosso empenho e ao apoio de nossas parceiras Casa dos Tubos, Centro Elétrico, IT Center, Amazônia Ferro e Aço, Aço Belém, Oplima e Tubo e Telha, que tem nos ajudado a trilhar este caminho de sucesso.</p>
		                <br>
		                <p>A história da LPX Engenharia ao longo dos seus mais de 20 anos foi construída com base nos valores que permitem a evolução de nossa empresa. Nosso maior compromisso é prestar o melhor serviço de engenharia possível, valorizando nossas equipes e, principalmente, preservando o espaço ambiental em que desenvolvemos nossos projetos. A LPX não está ligada apenas à construção e à edificação de prédios e reformas, mas está principalmente dedicada à qualidade dos serviços prestados. E foi graças a esta importância que conquistamos a certificação da SAS Certificadora, confirmando nosso profissionalismo e responsabilidade social.</p>   
		                <br>
		                <p>Nós, da LPX Engenharia, trabalhamos em prol da excelência. E essa excelência permitirá a confiança e transparência em nossos projetos, o cuidado com nossos funcionários, respeito ao meio ambiente e qualidade em todos os nossos empreendimentos.</p> 
                        <br>		                
                	</div>
                    <?php } ?>	
                    
                    <?php if($pg == "missao"){  ?>  
                    <div id="texto_quemsomos">
                    <p> Nossa Missão</p>
                    <br>
                    	<p>Alcançar uma posição cada vez mais destacada no mercado de engenharia civil do estado do Pará, atendendo as necessidades dos clientes, desenvolvendo fidelidade, agregando valores como qualidade e confiabilidade aos nossos empreendimentos.</p>
                   			<br>
                    </div>             
                    
					<?php }  ?>                    
					<?php if($pg == "visao") {  ?>
                    <div id="texto_quemsomos">
                    <p> Nossa Visão</p>
                    <br>
	                    <p>Ser a empresa líder no ramo da engenharia civil no estado do Pará, ser reconhecida pela qualidade dos empreendimentos e de seus funcionários, comprometida com a ética, a segurança e o meio ambiente.</p>
	                   		<br>
	                    <p>Valores</p>
	                    	<br>
	                    <p>Nossos principais valores são: responsabilidade, agilidade, eficácia, comprometimento, integridade, crescimento, rentabilidade e satisfação.</p>
                    </div>
                    
                    <?php } ?>
                    
                    
                    </div>
                <div id="coluna_info">
	            	<div id="quemsomos_menu">
	                    <ul>
			                <li><a href="<?php servidor(); ?>quem-somos/pg/historia/"><img src="<?php servidor(); ?>images/quem-somos/menu/nossa_historia_off.jpg" alt="" class="botao"></a></li>
			                <li><a href="<?php servidor(); ?>quem-somos/pg/missao/"><img src="<?php servidor(); ?>images/quem-somos/menu/nossa_missao_off.jpg" alt="" class="botao"></a></li>
			                <li><a href="<?php servidor(); ?>quem-somos/pg/visao/"><img src="<?php servidor(); ?>images/quem-somos/menu/visao_e_valores_off.jpg" alt="" class="botao"></a></li>
		                </ul>
                    </div>
                    
                    <div id="quemsomos_servicos">
                    <a href="<?php servidor(); ?>servicos/"><img src="<?php servidor(); ?>images/quem-somos/clique.png" alt="" id="image_quem_somos"></a>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
		<div id="footer">
			<?php include ("footer.php"); ?>
		</div>
	</body>
</html>
