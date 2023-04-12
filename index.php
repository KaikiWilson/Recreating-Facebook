<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="recreating facebook">
    <meta name="Keywords" content="recreating, facebook, CSS3, HTML5">
    <meta name="Author" content="Kaiki">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <title>Facebook Project - Kaiki Wilson</title>

</head>

<body>

    <header>

        <div class="center">

            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->

           <form action="" method="post" class="form-login">

                <div class="form-element">

                    <p>Email ou telefone:</p>
                    <input type="email" name="email" id="email">

                </div><!--form-element-->

                <div class="form-element">

                    <p>Senha:</p>
                    <input type="password" name="senha" id="senha">

                </div><!--form-element-->

                <div class="form-element">

                    <input type="submit" name="acao" value="Entrar">

                </div><!--form-element-->
                
            </form><!--form-login-->

            <div class="clear"></div>

        </div><!--center-->

    </header><!--header-->

    <section class="main">

        <div class="center">

            <div class="img-pessoas">
                <img src="facebookimg.png" alt="">
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form action="" class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text" name="" id="">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text" name="" id="">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email" name="" id="">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password" name="" id="">
                    </div><!--w100-->

                    <div class="w100">

                        <div class="input-radio">
                            <input type="radio" value="masculino" name="sexo" id="">
                            <h2>Masculino</h2>
                        </div><!--radio-->

                        <div class="input-radio">
                            <input type="radio" value="feminino" name="sexo" id="">
                            <h2>Feminino</h2>
                        </div><!--radio-->

                        <div class="clear"></div>

                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div><!--w100-->

                    <div class="w100">
                        
                        <h2>Data de Nascimento:</h2>
                        
                        <select name="nascimento-dia" id="" class="nascimento">
                            
                            <?php
                                for($i = 1 ; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-->

                        <select name="nascimento-mes" id="" class="nascimento">
                            
                            <option value="0">Janeiro</option>
                            <option value="1">Fevereiro</option>
                            <option value="2">Março</option>
                            <option value="3">Abril</option>
                            <option value="4">Maio</option>
                            <option value="5">Junho</option>
                            <option value="6">Julho</option>
                            <option value="7">Agosto</option>
                            <option value="8">Setembro</option>
                            <option value="9">Outubro</option>
                            <option value="10">Novembro</option>
                            <option value="11">Dezembro</option>
                        
                        </select><!--nascimento-->

                        <select name="nascimento-ano" id="" class="nascimento">
                            
                            <?php
                                for($i = 1960 ; $i <= 2023; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        
                        </select><!--nascimento-->

                        <div class="clear"></div>

                    </div><!--w100-->
                    
                    <div class="clear"></div>
                
                </form><!--criar-conta-->
            
            </div><!--abrir-conta-->

            <div class="clear"></div>

        </div><!--center-->

    </section><!--main-->

    <section class="linguas">

            <div class="center">

                    <a href="#" class="selected-lingua">Português (BR)</a>
                    <a href="#" >English (US)</a>
                    <a href="#" >Español</a>
                    <a href="#" >Français</a>
                    <a href="#" >Italiano</a>
                    <a href="#" >Chinês</a>
                    <a href="#" >Japonês</a>
                    <a href="#" >Coreano</a>

            </div>

            <div style="border:0; padding-top:10px;" class="center">

                    <a href="#" class="selected-lingua">Cadastre-se</a>
                    <a href="#" >Entrar</a>
                    <a href="#" >Messenger</a>
                    <a href="#" >Facebook Lite</a>
                    <a href="#" >Celular</a>
                    <a href="#" >Encontrar amigos</a>
                    <a href="#" >Pessoas</a>
                    <a href="#" >Páginas</a>
                    <a href="#" >Locais</a>
                    <a href="#" >Jogos</a>
                    <a href="#" >Locais</a>
                    <a href="#" >Marketplace</a>
                    <a href="#" >Videos</a>
                    <a href="#" >Grupos</a>
                    <a href="#" >Receitas</a>
                    <a href="#" >Esportes</a>
                    <a href="#" >Look</a>
                    <a href="#" >Moments</a>
                    <a href="#" >Instagram</a>
                    <a href="#" >Local</a>
                    <a href="#" >Sobre</a>
                    <a href="#" >Criar anúncio</a>
                    <a href="#" >Criar página</a>
                    <a href="#" >Desenvolvedores</a>
                    <a href="#" >Carreiras</a>
                    <a href="#" >Privacidade</a>
                    <a href="#" >Cookies</a>
                    <a href="#" >Opções de anúncio</a>
                    <a href="#" >Termos</a>
                    <a href="#" >Ajuda</a>

            </div>

    </section>

</body>
</html>