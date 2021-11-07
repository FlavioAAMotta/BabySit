<?php
    include_once("viewHeadPrincipal.php");
    include_once("../Model/modelBancoDeDados.php");
    include_once("../Model/modelServicos.php");
?>
    
    <!--div que contem a barra de pesquisa-->
    <div class="d-flex justify-content-center" id="divPartePesquisa">

        <form class="d-flex justify-content-center" id="formPesquisa">
            <input class="p-2 inputPesquisa" type="text" placeholder="Digite a localidade que deseja procurar">

            <button class="btn" id="botaoPesquisar">
                <img id="imgLupa" src="../../images/lupa 2.png">
            </button>
        </form>
    </div>

    <!--área de resultados que contem os Cards-->
    <div style="padding-top: 20px;" id="divCards">

        <?php 
            for($i = 0; $i < count($totalFamilia); $i++){
                if(($totalFamilia[$i]['servico_ativo_familia'] == '1') && ($totalFamilia[$i]['servico_andamento_familia'] != '1')){
                    $idUsuario = $totalFamilia[$i]['id_usuario'];
        ?>

        <!--CARD 1-->
        <a href="viewPerfilPublicoPais.php?idServico=<?php echo $idUsuario?>">
            <div class="Card" style="">

                <div class="foto">
                    <?php 
                        include("../Model/modelVerificaUsuarios.php");
                    ?>
                    <img src="../../images/gps.png" alt="" height="18px" style="margin: 3px; position: absolute;">
                    <p style="margin-left: 22px; position: absolute;">Cidade</p>                    
                    <img src="<?php echo $totalUsuarios[0]['foto_usuario']?>" alt="" width="125px">
                </div>

                <div class="dados">
                    <div> 
                        <div class="estrelasPesquisa">  
                            <h4><?php echo $totalUsuarios[0]['nome_usuario']?></h4>
                            <div>
                                <div class="styleEstrelas">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>

                                    <span class="classificaçãoCardPesquisa">100 </span>
                                </div>
                            </div>
                        </div>
                        <h6><b>Descrição:</b> <?php echo $totalFamilia[0]['descricao_familia']?></h6>
                        <div class="disponibilidade">
                            <h6><b>Disponibilidade:</b> </h6>
                            <div>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
        <?php }}?>
        
        <!--CARD 2-->
        <!--
        <a href="viewPerfilPublicoPais.php">
            <div class="Card" style="">

                <div class="foto">
                    <img src="../../images/gps.png" alt="" height="18px" style="margin: 3px; position: absolute;">
                    <p style="margin-left: 22px; position: absolute;">Cidade</p>                  
                    <img src="../../images/Foto 2.png" alt="" width="125px">
                </div>

                <div class="dados">
                <div> 
                        <div class="estrelasPesquisa">  
                            <h4>Nome, idade</h4>
                            <div>
                                <div class="styleEstrelas">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>

                                    <span class="classificaçãoCardPesquisa">100 </span>
                                </div>
                            </div>
                        </div>
                        <h6><b>Experiência:</b> X ano </h6>
                        <h6><b>Descrição:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h6>
                        <div class="disponibilidade">
                            <h6><b>Disponibilidade:</b> </h6>
                            <div>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>

       
        <a href="viewPerfilPublicoPais.php">
            <div class="Card" style="">

                <div class="foto">
                    <img src="../../images/gps.png" alt="" height="18px" style="margin: 3px; position: absolute;">
                    <p style="margin-left: 22px; position: absolute;">Cidade</p>  
                    <img src="../../images/Foto 3.png" alt="" width="125px">
                </div>

                <div class="dados">
                <div> 
                        <div class="estrelasPesquisa">  
                            <h4>Nome, idade</h4>
                            <div>
                                <div class="styleEstrelas">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>

                                    <span class="classificaçãoCardPesquisa">100 </span>
                                </div>
                            </div>
                        </div>
                        <h6><b>Experiência:</b> X ano </h6>
                        <h6><b>Descrição:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h6>
                        <div class="disponibilidade">
                            <h6><b>Disponibilidade:</b> </h6>
                            <div>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
        </a>    

        
        <a href="viewPerfilPublicoPais.php">
            <div class="Card" style="">

                <div class="foto">
                    <img src="../../images/gps.png" alt="" height="18px" style="margin: 3px; position: absolute;">
                    <p style="margin-left: 22px; position: absolute;">Cidade</p>                  
                    <img src="../../images/Foto 4.png" alt="" width="125px">
                </div>

                <div class="dados">
                <div> 
                        <div class="estrelasPesquisa">  
                            <h4>Nome, idade</h4>
                            <div>
                                <div class="styleEstrelas">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>

                                    <span class="classificaçãoCardPesquisa">100 </span>
                                </div>
                            </div>
                        </div>
                        <h6><b>Experiência:</b> X ano </h6>
                        <h6><b>Descrição:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h6>
                        <div class="disponibilidade">
                            <h6><b>Disponibilidade:</b> </h6>
                            <div>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>    
        </a>   
        
        <a href="viewPerfilPublicoPais.php">
            <div class="Card" style="">

                <div class="foto">
                    <img src="../../images/gps.png" alt="" height="18px" style="margin: 3px; position: absolute;">
                    <p style="margin-left: 22px; position: absolute;">Cidade</p>                  
                    <img src="../../images/Foto 5.png" alt="" width="125px">
                </div>

                <div class="dados">
                <div> 
                        <div class="estrelasPesquisa">  
                            <h4>Nome, idade</h4>
                            <div>
                                <div class="styleEstrelas">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>

                                    <span class="classificaçãoCardPesquisa">100 </span>
                                </div>
                            </div>
                        </div>
                        <h6><b>Experiência:</b> X ano </h6>
                        <h6><b>Descrição:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h6>
                        <div class="disponibilidade">
                            <h6><b>Disponibilidade:</b> </h6>
                            <div>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
        </a>    

        <a href="viewPerfilPublicoPais.php">
            <div class="Card" style="">

                <div class="foto">
                    <img src="../../images/gps.png" alt="" height="18px" style="margin: 3px; position: absolute;">
                    <p style="margin-left: 22px; position: absolute;">Cidade</p>  
                    <img src="../../images/Foto 6.png" alt="" width="125px">
                </div>

                <div class="dados">
                    <div> 
                        <div class="estrelasPesquisa">  
                            <h4>Nome, idade</h4>
                            <div>
                                <div class="styleEstrelas">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>

                                    <span class="classificaçãoCardPesquisa">100 </span>
                                </div>
                            </div>
                        </div>
                        <h6><b>Experiência:</b> X ano </h6>
                        <h6><b>Descrição:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h6>
                        <div class="disponibilidade">
                            <h6><b>Disponibilidade:</b> </h6>
                            <div>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>-->
        
    </div>
    
</body>
</html>