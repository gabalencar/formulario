
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            margin: 0px;
            padding: 0px;
        }

        .general_container {
            width: 100vw;
            height: 100vh;
            display: block;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .content_container {
            width: 720px;
            display: flex;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-radius: 45px;
            padding: 40px;
            margin: 40px;
            
        }

        .title_container {
            display: flex;
            align-items: center;
        }

        .number_question {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            color: rgb(231, 54, 52);
            font-size: 14px;
            line-height: 20px;
            height: 100%;
            outline: none;
            width: 21px;
            height: 24px;
        }

        .number_question i {
            font-size: 12px;
            font-weight: 700;
        }

        .title_container{
            display: flex;
            align-items: flex-start;
        }

        .title_container h2 {
            font-weight: normal;

        }

        .title_container h2 strong {
            font-weight: 700;
        }

        .description_container{
            font-weight: unset;
            font-size: 20px;
            line-height: 28px;
            color: rgba(0, 0, 0, 0.7);
            color: rgba(0, 0, 0, 0.7);
        }
        .input_container{
            display: flex;
            align-items: center;
        }

        .input_container input{
            display: block;
            width: 100%;
            font-family: inherit;
            color: rgb(231, 54, 52);
            padding: 0px 0px 8px;
            border: none;
            outline: none;
            border-radius: 0px;
            appearance: none;
            background-image: none;
            background-position: initial;
            background-size: initial;
            background-repeat: initial;
            background-attachment: initial;
            background-origin: initial;
            background-clip: initial;
            transform: translateZ(0px);
            font-size: 30px;
            -webkit-font-smoothing: antialiased;
            line-height: unset;
            -webkit-text-fill-color: rgba(231, 54, 52, 0.3);
            animation: 1ms ease 0s 1 normal none running native-autofill-in;
            transition: background-color 1e+08s ease 0s, box-shadow 0.1s ease-out 0s;
            box-shadow: rgb(231 54 52 / 30%) 0px 1px;
            background-color: transparent !important;
                }
        
        .submit_container{
            white-space: nowrap;
            font-family: inherit;
            box-sizing: border-box;
            color: rgb(68, 68, 68);
            font-size: 12px;
            line-height: 24px;
            width: 720px;
            display: flex;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
           
            
        }
        .submit_container button{
            position: relative;
            width: 720px;
            font-family: inherit;
            line-height: inherit;
            font-weight: 700;
            cursor: pointer;
            transition-duration: 0.1s;
            transition-property: background-color, color, border-color, opacity, box-shadow;
            transition-timing-function: ease-out;
            outline: none;
            border: 1px solid transparent;
            margin: 0px;
            box-shadow: rgb(0 0 0 / 10%) 0px 3px 12px 0px;
            padding: 6px 14px;
            min-height: 40px;
            background-color: rgb(178, 33, 33);
            color: rgb(255, 255, 255);
            border-radius: 4px;
            
}  
    </style>
</head>

<body>
    <div class="general_container">
      <form action="index.php" method="POST">
        <div class="content_container">
            <div class="number_container">
                <span class="number_question">
                    1 <i class="material-icons">arrow_forward</i>
                </span>
            </div>
            <div class="rest_content">
                <div class="title_container">
                    <h2>
                        Qual é o seu <strong>NOME</strong>? *
                    </h2>
                </div>
                <div class="description_container">
                    <span>
                        Por favor informar o nome completo.
                    <span>
                </div>
                <div class="input_container">
                    <input  id="nome" name="nome" placeholder="Responda aqui...">
                </div>
            </div>
        </div>
        <div class="content_container">
            <div class="number_container">
                <span class="number_question">
                    2 <i class="material-icons">arrow_forward</i>
                </span>
            </div>
            <div class="rest_content">
                <div class="title_container">
                    <h2>
                        Qual é a sua <strong>DATA DE NASCIMENTO</strong>? *
                    </h2>
                </div>
                <div class="description_container">
                </div>
                <div class="input_container">
                    <input type='date' id='dtnasc' name='dtnasc'>
                </div>
               
            </div>
        </div>
        <div class="content_container">
            <div class="number_container">
                <span class="number_question">
                    3 <i class="material-icons">arrow_forward</i>
                </span>
            </div>
            <div class="rest_content">
                <div class="title_container">
                    <h2>
                        Qual é o seu <strong>E-MAIL</strong>? *
                    </h2>
                </div>
                <div class="description_container">
                    <span>
                        Certifique-se de que informou o e-mail correto.
                    <span>
                </div>
                <div class="input_container">
                    <input type="email"  id='email' name='email' placeholder="alguem@exemplo.com" />
                </div>
            </div>
        </div>
        <div class="content_container">
            <div class="number_container">
                <span class="number_question">
                    4 <i class="material-icons">arrow_forward</i>
                </span>
            </div>
            <div class="rest_content">
                <div class="title_container">
                    <h2>
                        Qual é o seu  número de <strong>CELULAR</strong>? *
                    </h2>
                </div>
                <div class="description_container">
                    <span>
                        Nosso primeiro contato sempre será por voz, caso contrário, enviamos um e-mail,uma mensagem por <strong>SMS</strong> ou <strong>WhatsApp</strong> .
                     <span>
                </div>
                <div class="input_container">
                    <input name='tel' placeholder="(11) 96123-4567" />
                  
                </div>
            </div>
        </div>   
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        5 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Qual <strong>CIDADE</strong> você mora? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box">
                        <input type="radio" id="cidade_1" name='cidade_mora' value="Crato">
                        <label for="cidade_1">Crato</label><br>
                        <input type="radio" id="cidade_2" name='cidade_mora' value="Juazeiro do Norte">
                        <label for="cidade_2">Juazeiro do Norte</label><br> 
                        <input type="radio" id="cidade_3" name='cidade_mora' value="Barbalha">
                        <label for= "cidade_3" >Barbalha</label><br>
                        <input type="radio" id="cidade_4" name='cidade_mora' value="Outro">
                        <label for="cidade_4">Outro</label>
                        <br> 
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        6 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você tem fácil acesso para trabalhar em <strong>JUAZEIRO DO NORTE - CE</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                        <span>
                            Nosso escritório fica próximo ao Cariri Garden Shopping.
                        <span>
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="acesso facil Juazeiro" name="acesso_facil_Juazeiro" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="acesso facil Juazeiro" name="acesso_facil_Juazeiro" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div> 
                </div>
            </div>    
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        7 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você aceita trabalhar presencialmente em nosso <strong>ESCRITÓRIO</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="trabalhar_escritório" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="trabalhar_escritório" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        8 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você aceita trabalhar no <strong>MODELO HÍBRIDO</strong>(home office / escritório)? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="trabalhar_modelo_hidrido" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="trabalhar_modelo_hidrido" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        9 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você aceita trabalhar <strong>MEIO PERÍODO</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="trabalhar_meio_periodo" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="trabalhar_meio_periodo" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                   
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        10 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você possui <strong>COMPUTADOR</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="possui_comp" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="possui_comp" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        11 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você possui <strong>SMARTPHONE</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="possui_smart" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="possui_smart" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        12 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você possui <strong>EXPERIÊNCIA PROFISSIONAL</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="possui_expe" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="possui_expe" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        13 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Qual <strong>ÁREA</strong> que deseja se candidatar? 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="area" name="area" value="produtos\tec">
                        <label for="area">Produtos e tecnologias</label><br>
                        <input type="radio" id="area" name="area" value="marketing\vendas">
                        <label for="Sim">Marketing e vendas</label><br>
                        <input type="radio" id="area" name="area" value="pessoas\operação">
                        <label for="não">Pessoas e Operação</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        14 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Qual área de <strong>PRODUTOS E TECNOLOGIA</strong> que deseja se candidatar?* 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="produtos\tec-area" name='produtos_tec_area' value="back-end">
                        <label for="produtos\tec-area">back-end</label><br>
                        <input type="radio" id="produtos\tec-area" name='produtos_tec_area' value="front-end">
                        <label for="produtos\tec-area">front-end</label><br>
                        <input type="radio" id="produtos\tec-area" name='produtos_tec_area' value="cloud">
                        <label for="produtos\tec-area">cloud</label><br>
                        <input type="radio" id="produtos\tec-area" name='produtos_tec_area' value="full stack">
                        <label for="produtos\tec-area">full stack</label><br>
                        <input type="radio" id="produtos\tec-area" name='produtos_tec_area' value="design">
                        <label for="produtos\tec-area">design</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        15 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Quais tecnologias<strong>BACK-END</strong>conhece?* 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box">
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="php">
                        <label for="back-end\tec">php</label><br>
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="python">
                        <label for="back-end\tec">python</label><br>
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="node.js">
                        <label for="back-end\tec">node.js</label><br>
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="sql">
                        <label for="back-end\tec">sql</label><br>
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="c#">
                        <label for="back-end\tec">c#</label><br>     
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="java">
                        <label for="back-end\tec">java</label><br>
                        <input type="checkbox" id="back-end\tec" name="back_end_tec" value="outros">
                        <label for="back-end\tec">outros</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        16 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você conhece<strong>WORDPRESS</strong>?* 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="conhece_wordpress" name="conhece_wordpress" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="conhece_wordpress" name="conhece_wordpress" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        17 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você conhece<strong>ELEMENTOR</strong>?* 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="conhece_elementor" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="conhece_elementor" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        18 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você conhece<strong>NOCODE/LOWCODE</strong>?* 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="conhece_n_code" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="conhece_n_code" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        19 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Quais <strong>TECNOLOGIAS NOCODE/LOWCODE</strong> você conhece?* 
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="input_container"> 
                        <input name='tec_noco_c'placeholder="Responda aqui..." />     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        20 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Qual <strong>NÍVEL PROFICIONAL</strong>você se considera? *
                        </h2>
                    </div>
                    <div class="description_container">
                        <span>
                            Quanto tempo trabalho em uma em uma empresa
                        <span>
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="nivel_proficional" name="nivel_proficional" value="aprendis">
                        <label for="nivel_proficional">aprendis</label><br>
                        <input type="radio" id="nivel_proficional" name="nivel_proficional" value="junior">
                        <label for="nivel_proficional">junior</label><br>
                        <input type="radio" id="nivel_proficional" name="nivel_proficional" value="pleno">
                        <label for="nivel_proficional">pleno</label><br>
                        <input type="radio" id="nivel_proficional" name="nivel_proficional" value="senior">
                        <label for="nivel_proficional">senior</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        21 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Quanto tempo<strong>trabalhou em uma empresa</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="tempo_trabalhou_em_enpresas" name="tempo_trabalhou_em_enpresas" value="menos_ano">
                        <label for="tempo_trabalhou_em_enpresas">menos de ano</label><br>
                        <input type="radio" id="tempo_trabalhou_em_enpresas" name="tempo_trabalhou_em_enpresas" value="ano">
                        <label for="tempo_trabalhou_em_enpresas">um ano</label><br>
                        <input type="radio" id="tempo_trabalhou_em_enpresas" name="tempo_trabalhou_em_enpresas" value="mais_ano">
                        <label for="tempo_trabalhou_em_enpresas">mais de uma ano</label><br>
                        <input type="radio" id="tempo_trabalhou_em_enpresas" name="tempo_trabalhou_em_enpresas" value="nunca trabalhei">
                        <label for="tempo_trabalhou_em_enpresas">nunca trabalhei em empresas</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        22 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Você aceita realizar <strong>EXAME</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                        <span>
                            Nosso processo seletivo possui algumas fases, em algum momento faremos um exame prático de conhecimento técnico.
                        <span>
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="aceita_exame" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="aceita_exame" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div> 
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        23 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Possui conhecimento de <strong>INGLÊS</strong>? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="conhecimento_ingles" value="Sim">
                        <label for="Sim">Sim</label><br>
                        <input type="radio" id="não" name="conhecimento_ingles" value="não">
                        <label for="não">Não</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        24 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Qual é o seu <strong>NÍVEL</strong>de inglês? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="nivel_ingles" name="nivel_ingles" value="basico">
                        <label for="nivel_ingles">basico</label><br>
                        <input type="radio" id="nivel_ingles" name="nivel_ingles" value="entermediario">
                        <label for="nivel_ingles">entermediario</label><br>
                        <input type="radio" id="nivel_ingles" name="nivel_ingles" value="avançado">
                        <label for="nivel_ingles">avançado</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="content_container">
                <div class="number_container">
                    <span class="number_question">
                        25 <i class="material-icons">arrow_forward</i>
                    </span>
                </div>
                <div class="rest_content">
                    <div class="title_container">
                        <h2>
                            Qual <strong>MODELO DE CONTRATAÇÃO</strong>você prefere ser contratado? *
                        </h2>
                    </div>
                    <div class="description_container">
                    </div>
                    <div class="check_box"> 
                        <input type="radio" id="Sim" name="modelo_contratação" value="PJ">
                        <label for="Sim">PJ</label><br>
                        <input type="radio" id="Sim" name="modelo_contratação" value="CLT">
                        <label for="Sim">CLT</label><br>
                        <input type="radio" id="não" name="modelo_contratação" value="Outro">
                        <label for="não">Outro</label>
                        <br>     
                    </div>
                </div>
            </div>
            <div class="submit_container">
                <button name="submit">
                    Avançar <i class="material-icons">check</i>
                </button>
            </div>

         </form>                                                                                                                                                                                               

    </div>
</body>

</html>




<?php
    //if(isset($_POST['submit']))
    //{
        //print_r($_POST['nome']);
        //print_r($_POST['dtnasc']);
        //print_r($_POST['email']);
        //print_r($_POST['tel']);
        //print_r($_POST['cidade_mora']);
        //print_r($_POST['acesso_facil_Juazeiro']);
        //print_r($_POST['trabalhar_escritório']);
        //print_r($_POST['trabalhar_modelo_hidrido']);
        //print_r($_POST['trabalhar_meio_periodo']);
        //print_r($_POST['possui_comp']);
        //print_r($_POST['possui_smart']);
        //print_r($_POST['possui_expe']);
        //print_r($_POST['area']);
        //print_r($_POST['produtos_tec_area']);
        //print_r($_POST['back_end_tec']);
        //print_r($_POST['conhece_wordpress']);
        //print_r($_POST['conhece_elementor']);
        //print_r($_POST['conhece_n_code']);
        //print_r($_POST['tec_noco_c']);
        //print_r($_POST['nivel_proficional']);
        //print_r($_POST['tempo_trabalhou_em_enpresas']);
        //print_r($_POST['aceita_exame']);
        //print_r($_POST['conhecimento_ingles']);
        //print_r($_POST['modelo_contratação']);



    //}

    include_once('config.php');

    $nome = $_POST['nome'];
    $data_nasci = $_POST['dtnasc'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cicade = $_POST['cidade_mora'];
    $ace_f_juaz = $_POST['acesso_facil_Juazeiro'];
    $trabalha_escritorio = $_POST['trabalhar_escritório'];
    $trabalha_hibrido = $_POST['trabalhar_modelo_hidrido'];
    $trabalha_meio_p = $_POST['trabalhar_meio_periodo'];
    $p_comp = $_POST['possui_comp'];
    $p_cell = $_POST['possui_smart'];
    $p_xp_proficional = $_POST['possui_expe'];
    $area_cand = $_POST['area'];
    $area_pt_cand = $_POST['produtos_tec_area'];
    $tec_beck_end = $_POST['back_end_tec'];
    $conhece_wp = $_POST['conhece_wordpress'];
    $conhece_elementor = $_POST['conhece_elementor'];
    $conhece_low_no_code = $_POST['conhece_n_code'];
    $tec_low_no_code = $_POST['tec_noco_c'];
    $nivel_prof = $_POST['nivel_proficional'];
    $tempo_trabalhado = $_POST['tempo_trabalhou_em_enpresas'];
    $aceita_exame = $_POST['aceita_exame'];
    $possui_ingles = $_POST['conhecimento_ingles'];
    $nv_ingles = $_POST['nivel_ingles'];
    $nod_contrat = $_POST['modelo_contratação'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,data_nascimento,email,tel,cidade,ace_f_juazeiro,trabalha_escritorio,trabalha_hibrido,trabalha_meio_p,p_comp,p_cell,p_xp_proficional,area_cand,area_pt_cand,tec_beck_end,conhece_wp,conhece_elementor,conhece_low_no_code,tec_low_no_code,nivel_prof,tempo_trabalhado,aceita_exame,possui_ingles,nv_ingles,nod_contrat) VALUES ('$nome','$data_nasci','$email','$tel,$cicade','$ace_f_juaz','$trabalha_escritorio', '$trabalha_hibrido','$trabalha_meio_p',' $p_comp','$p_cell','$p_xp_proficional','$area_cand' , '$area_pt_cand','$tec_beck_end','$conhece_wp','$conhece_elementor', '$conhece_low_no_code','$tec_low_no_code'',$nivel_prof','$tempo_trabalhado','$aceita_exame','$possui_ingles','$nv_ingles','$nod_contrat')");
      



?>