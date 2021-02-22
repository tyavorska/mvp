<?php
///**
// * Template Name: homepage-prt
// */

get_header();
?>
    <section class="section-first">
        <div class="home-img-slick">
            <img src="/wp-content/uploads/2020/04/banner-1-of-4-PT-1.jpg" alt="">
            <img src="/wp-content/uploads/2020/04/banner-3-of-4-PT-1.jpg" alt="">
            <img src="/wp-content/uploads/2020/04/banner-2-of-4-PT-1.jpg" alt="">
        </div>
    </section>
    <section class="section-start">
        <p class="section-start-txt">
            APRENDA A ESTRUTURAR SEUS PENSAMENTOS COM UM PROPÓSITO CLARO.
        </p>

    </section>
    <section class="section-video">
        <div class="back-img">
            <iframe src="https://www.youtube.com/embed/wx08-586ifM" frameborder="0" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php if(is_user_logged_in()){
            $url = '/dashboard/';
        }else{
            $url = '/registration/';
        }?>

        <a href="<?= $url?>?lang=pt-pt" class="start-btn">Comece aqui</a>
        <div class="play-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="">
        </div>
    </section>
    <section class="section-steps central-block">
        <div class="sections-steps-txt-block">
            <h3>
                UM PROCESSO DE 4 ETAPAS PARA CLAREAR O SEU PROPÓSITO E GERAR IMPACTO
            </h3>
        </div>

        <div class="steps-inner-sections">
            <div class="sections-steps-item-block">
                <div class="steps-img">
                    <img src="/wp-content/uploads/2020/04/purpose.png" alt="">
                </div>
                <div class="steps-item-text-block">
                    <h4>PROPÓSITO</h4>
                    <p> A visualização do que você pode trazer de impacto para o contexto.
                    </p>
                </div>
            </div>
            <div class="sections-steps-item-block">
                <div class="steps-img">
                    <img src="/wp-content/uploads/2020/04/vision.png" alt="">
                </div>
                <div class="steps-item-text-block">
                    <h4>VISÃO</h4>
                    <p> Reorganize recursos para desenvolver potenciais e gerar mudanças.</p>
                </div>
            </div>
            <div class="sections-steps-item-block">
                <div class="steps-img">
                    <img src="/wp-content/uploads/2020/04/meaning.png" alt="">
                </div>
                <div class="steps-item-text-block">
                    <h4>SIGNIFICADO</h4>
                    <p>Compartilhe o valor de uma visão para iniciar a mudança.</p>
                </div>
            </div>
            <div class="sections-steps-item-block">
                <div class="steps-img">
                    <img src="/wp-content/uploads/2020/04/impact.png" alt="">
                </div>
                <div class="steps-item-text-block">
                    <h4>IMPACTO</h4>
                    <p>Projete o futuro da sua visão.</p>
                </div>
            </div>

        </div>
    </section>
    <section class="section-levels central-block ">
        <div class="testimonials-wrapper ">
            <h2>A Experiência dos Nossos Clientes</h2>
            <p>Desde 2018, mais de 90 profissionais de 12 nacionalidades e em mais de 20 setores do mercado, receberam facilitação do processo do CLEARING PURPOSE FRAMEWORK.</p>
            <div class="section-home-testimonials">
                <div class="testimonials-block">
                    <div class="testimon-text-block">
                        <p>O Framework de Clareamento de Propósito transformou completamente meu estilo de liderança, minha empresa e meus resultados. O processo me deu muita clareza sobre o impacto do nosso trabalho no contexto em que operamos. A clareza tornou possível compartilhar uma visão maior com a minha equipe, A Liderança com foco no cuidado traz muita felicidade, satisfação e resultados que nunca imaginei! Sou profundamente grata a essa ferramenta e acredito que o mundo será um lugar incrível quando muitos líderes tiverem a oportunidade de desfrutá-la! .
                        </p>
                    </div>
                    <h4>PAULINHA OLIVEIRA</h4>
                    <p>Frequência do Amor, Brasil</p>
                </div>
                <div class="testimonials-block">
                    <div class="testimon-text-block">
                        <p>O framework nos leva a ter contato com quem realmente somos, e somente aí encontramos nosso
                            verdadeiro propósito. De maneira leve e muito amorosa me mostrou que é possível ver, ouvir e
                            me relacionar verdadeiramente em todas as situações.</p>

                    </div>
                    <h4>PATRICIA ANDRADE</h4>
                    <p>Gestora de Atendimento da V7 brasil Estratégia Imobiliária, Brasil
                    </p>
                </div>
                <div class="testimonials-block">
                    <div class="testimon-text-block">
                        <p>A ferramenta me ajudou a refletir. Ajudou a destilar um amplo desafio em objetivos e ações
                            simples. Me ajudou a descobrir o que é realmente importante no centro dos meus
                            objetivos.</p>

                    </div>
                    <h4>LUKE BYWATERS</h4>
                    <p>Gerente comercial de reciclagem & regeneração da Co-op, Grã-Bretanha</p>
                </div>
                <div class="testimonials-block">
                    <div class="testimon-text-block">
                        <p>A ferramenta foi uma jornada incrível, eu aprofundei e me relacionei com as coisas que mais me importam, e o resultado foi uma afirmação do que eu assumi.</p>

                    </div>
                    <h4>ADITHYA VARADARAJAN</h4>
                    <p> Co-Fundador e Estrategista de Design do Nordic Rebels, Finlândia</p>
                </div>

            </div>
        </div>
        <div class="sections-steps-txt-block">
            <h3>
                UM PROCESSO DE 4 ETAPAS
            </h3>
            <p>O CLEARING PURPOSE FRAMEWORK usa uma ordem específica de perguntas e exercícios de reflexão, para simplificar o desenvolvimento de uma visão e da sua implementação. Cada etapa leva 4 horas distribuídas em 2 semanas. Faça uma etapa de cada vez.            </p>
        </div>
        <div class="section-levels-inner">
            <div class="img-desktop">
                <img src="<?php echo get_template_directory_uri() ?>/img/level-prt.png" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/level-mob.png" alt="">
            <div class="img-ipad">
                <img src="<?php echo get_template_directory_uri() ?>/img/level-ipad-prt.jpg" alt="">
            </div>
            <a href="/dashboard/?lang=pt-pt" class="start-btn">Comece aqui</a>
        </div>

    </section>
    <section class="section-home-about">

        <div class="section-last-posts central-block">
            <h2>Publique sua visão</h2>
            <div class="blog_bottom home-page">
                <?php
                if (have_posts()) :
                    query_posts(array('posts_per_page' => 4, 'cat' => 6, 'offset' => 0,));
                    while (have_posts()) : the_post();
                        $id = get_the_ID();
                        ?>
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                            <div class="blog-item">
                                <div class="blog-item-post-thumb"><?php the_post_thumbnail('full'); ?></div>
                                <div class="post-title"><?php the_title(); ?></div>
                                <div class="post-text"><?php echo get_the_excerpt(); ?></div>
                                <div class="post-attr"><?php echo get_the_author(); ?> - <?php echo get_the_date('d.m.Y', $post); ?></div>
                            </div>
                        </a>
                    <?php endwhile; endif;
                wp_reset_query();
                ?>
            </div>
        </div>

    </section>
    <section class="section-last-posts">

    </section>
<?php
get_footer();
