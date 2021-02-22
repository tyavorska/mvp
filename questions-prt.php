<?php
/* Template Name: Questions-page-prt */
get_header();


$current_user = wp_get_current_user();
if (have_posts()) : while (have_posts()) : the_post();
    $question = get_post_permalink();
endwhile;
endif;

$last_name = get_user_meta($current_user->ID, 'last_name', true);
$first_name = get_user_meta($current_user->ID, 'first_name', true);
$country = get_user_meta($current_user->ID, 'country', true);
$city = get_user_meta($current_user->ID, 'city', true);
$industry = get_user_meta($current_user->ID, 'industry', true);
$interest = get_user_meta($current_user->ID, 'cosoi', true);
$stars = get_user_meta($current_user->ID, 'stars', true);
?>

    <div class="inner_page_container">
        <div class="inner_page_left_side">
<!--            <img src="/wp-content/themes/mvp/img/USER-LEFT.jpg">-->
            <div class="user_info">
                <div class="user_info_1">
                    <div class="user_profile_photo">
                        <?php echo get_avatar( (int)$current_user->ID )?>
                    </div>
                    <div class="user_name">
                        <?= $first_name . ' ' . $last_name ?>
                    </div>
                    <div class="user_place">
                        <img src="/wp-content/themes/mvp/img/pin-2.svg"><?= $city . ', ' . $country ?>
                    </div>
                    <div class="user_industry">
                        <img src="/wp-content/themes/mvp/img/work.svg"><?= $industry ?>
                    </div>
                    <div class="user_interest">
                        <div class="user_interest_title">Situação de Interesse:</div>
                        <?= $interest ?>
                    </div>
                    <div class="user_stars">
                        <div class="user_stars">
                            <?php if($stars>0){?>
                                <div class="full_stars"></div>
                            <?php }else{?>
                                <div class="empty_stars"></div>
                            <?php }?>
                        </div>
                    </div>

                </div>
                <div class="user_info_2">
                    <div class="user_info_2_top">
                        Estatísticas do líder:
                    </div>
                    <div class="user_info_2_bottom">
                        <div class="user_info_2_bottom_left">
                            <div class="user_info_2_bottom_left_top">
                                0
                            </div>
                            <div class="user_info_2_bottom_left_bottom">
                                Seguidores
                            </div>
                        </div>
                        <div class="user_info_2_bottom_center">
                            <div class="user_info_2_bottom_left_top">
                                1
                            </div>
                            <div class="user_info_2_bottom_left_bottom">
                                Visões
                            </div>
                        </div>
                        <div class="user_info_2_bottom_right">
                            <div class="user_info_2_bottom_left_top">
                                10%
                            </div>
                            <div class="user_info_2_bottom_left_bottom">
                                Impacto
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user_info_3">
                    <a href="#">Follow this leader</a>
                </div>
            </div>
        </div>
        <div class="inner_page_right_side">
            <div class="inner_page_right_side_welcome">
                <div class="inner_page_right_side_welcome_medium">Olá, <?= $first_name ?>!</div>
                <div class="inner_page_right_side_welcome_light">Nós estamos ansiosos para ver a sua visão na sua prática de liderança no <?= $interest ?>.
                </div>
            </div>
            <section class="section-steps central-block">

                <div class="steps-inner-sections">
                    <div class="sections-steps-item-block">
                        <!--                        <a href="--><? //=$question?><!--">-->
                        <a href="#ex1" rel="modal:open">
                            <div class="steps-img">
                                Comece Agora<br>
                                Gratuitamente

                            </div>
                        </a>
                        <div class="steps-item-text-block">
                            <h4>Free Trial</h4>
                            <p class="steps-item-text-block_15">
                                Aprenda os fundamentos das fases do<br>
                                CLEARING PURPOSE <br>FRAMEWORK
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Nível 1<br>
                                Propósito Claro
                            </h4>
                            <p>
                                Aprofunde suas intenções e <br>
                                estruture seus pensamentos <br>
                                com um propósito claro
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Nível 2<br>
                                Visão Clara
                            </h4>
                            <p>Aprenda a desenvolver uma <br>
                                visão usando recursos para<br>
                                desenvolver potenciais
                                e gerar mudanças
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Nível 3<br>
                                Significado Claro
                            </h4>
                            <p>
                                Aprenda na prática como compartilhar <br>
                                a sua visão para engajar pessoas e <br>
                                partir para a ação.
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Nível 4<br>
                                Impacto Claro
                            </h4>
                            <p>
                                Projete o futuro da sua visão para<br>
                                gerar impacto e mudança.

                            </p>
                        </div>
                    </div>

                </div>
            </section>
            <div class="inner_page_index_form">
                <div class="inner_page_index_form_title">
                    Agende um nível do Clearing Purpose Framework com um facilitador da sua escolha:
                </div>
                <form>
                    <div class="inner_page_index_form_block_1">
                        <div class="inner_page_index_form_block_title">
                            EXPERIÊNCIA PROFISSIONAL
                        </div>
                        <div class="inner_page_index_form_block_content">
                            <div class="inner_page_index_form_block_content_left">
                                <label>
                                    <input type="checkbox">
                                    Artes
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Comunicação
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Consultoria
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Projetos
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Educação
                                </label>
                            </div>
                            <div class="inner_page_index_form_block_content_right">
                                <label>
                                    <input type="checkbox">
                                    Inovação
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Marketing
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Estratégia
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Desenvolvimento de equipes
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="inner_page_index_form_block_2">

                        <div class="inner_page_index_form_block_2_top">
                            <div class="inner_page_index_form_block_title">
                                SETORES
                            </div>
                            <select class="select">
                                <option>Selecione a indústria</option>
                                <option>Produtos e Serviços ao Consumidor</option>
<!--                                <option>Consumer Products and Services</option>-->
                                <option>Educação</option>
                                <option>Energia</option>
                                <option>Entretenimento</option>
                                <option>Serviços financeiros</option>
                                <option>Serviços Públicos e Governamentais</option>
                                <option>Assistência médica e farmacêutica/option>
                                <option>Fabricação</option>
                                <option>Mídia e Telecomunicações</option>
                                <option>Militares</option>
                                <option>Imobiliário e construção</option>
                                <option>Varejo</option>
                                <option>Tecnologia</option>
                                <option>Viagem, Lazer e Hotelaria</option>
                            </select>
                        </div>
                        <div class="inner_page_index_form_block_2_bottom">
                            <div class="inner_page_index_form_block_title">
                                PESQUISA DE PALAVRAS-CHAVE
                            </div>
                            <input type="text" placeholder="Pesquise por palavras-chave">
                        </div>
                    </div>
                    <div class="inner_page_index_form_block_3">
                        <div class="inner_page_index_form_block_title">
                            OPÇÕES DE PROGRAMAÇÃO
                        </div>
                        <div class="inner_page_index_form_block_3_top">

                            <select>
                                <option>ver tudo</option>
                                <option>Horário</option>
                                <option>FUSO HORÁRIO</option>
                                <option>Data</option>
                            </select>
                        </div>
                        <div class="inner_page_index_form_block_3_midle">
                            <select>
                                <option>IDIOMA</option>
                                <option>Português</option>
                                <optionInglês</option>
                            </select>
                        </div>
                        <div class="inner_page_index_form_block_3_bottom">
                            <a href="#">AGENDAMENTO</a>
                        </div>
                    </div>
                </form>
            </div>


        </div>


    </div>
    </div>


    <div id="ex1" class="modal">
        <div class="popup_title">Ótima escolha,  <?= $first_name ?>!</div>


        <p>Uma ideia clara pode inspirar a sua vida e seu trabalho.</p>

        <p>O CLEARING PURPOSE FRAMEWORK versão trial vai rapidamente te guiar para organizar seus pensamentos em apenas 1 hora. Você terá ideias mais claras sobre uma situação específica em que você queira contribuir para uma mudança.
        </p>

        <p>Será uma breve experiência com 2 exercícios e 12 perguntas para reflexão.</p>

        <p>Para aproveitar ao máximo essa experiência, encontre um momento e um lugar para você se dedicar a esse framework com toda a sua atenção. Essa versão trial do CLEARING PURPOSE FRAMEWORK pode ser um passo importante para você clarear qual contribuição você gostaria de trazer para o mundo.
        </p>

        <p>Em breve você poderá passar pelos outros níveis do CLEARING PURPOSE FRAMEWORK e usar o processo completo para desenvolver com clareza e profundidade um projeto de impacto.
        </p>

        <p>Agora, isso é o que você precisa saber para começar:
        </p>

        <p>1.Antes de começar, faça o download e leia o <a class="modal_url" href="https://drive.google.com/file/d/19JBjqIZGiqGbHSrTrdyP4FVJgDz-zUXZ/view?usp=sharing">guia preparatório</a>.</p>
        <p>2. Reserve 1 hora para ficar em um lugar tranquilo para trabalhar no framework online.
        </p>
        <p>3. Para te ajudar a priorizar suas respostas, use o tempo de 2 a 3 minutos por pergunta.
        </p>
        <p>4. Não há resposta certa. É um processo de reflexão. Responda como achar melhor, mas escreva todos os seus pensamentos.
        </p>
        <p>5. Você pode pausar a experiência a qualquer momento, principalmente se você precisar confirmar alguma informação antes de dar uma resposta.</p>
        <p>6. Aproveite e divirta-se!</p>
        <a class="modal_start" href="/questions/questions-1/?lang=pt-pt">Comece aqui</a>
    </div>
<?php
get_footer();
?>