<?php
// * Template Name: Connect To Page prt
get_header();
?>

    <section class="first-wrapper-connect">
        <div class="section-connect-inner central-block">
            <div class="left-block-img">
                <img src="/wp-content/uploads/2020/05/CONECTE.jpg" alt="">
            </div>
            <div class="right-block-text">
                <p>Sua conexão com líderes, aqui.</p>
                <p>No canal Visions, você pode ver e interagir com as visões que os líderes no processo do Framework de Clareamento de Propósito estão desenvolvendo para a sua comunidade e o mundo.</p>
                <p>A Clear Purpose promove engajamento na visão dos líderes através de aumento de transparência, de participação e de suporte da comunidade.</p>
                <p>Isso significa estar nesse processo juntos. Mais do que isso, siginifica liderar isso juntos.</p>
                <p>Por que?</p>
                <p>Líderes compartilham abertamente suas visões durante o processo para entender com as pessoas o que elas pensam e engajá-las nas decisões desde o primeiro momento. Esse tipo de liderança corajosa é extremamente necessária atualmente.</p>
                <p>A rede da Visions gera fundos para implementação de visões. Toda a receita dos dados retorna para as comunidades dos líderes. Os critérios de investimentos são baseados na confiança, apoio e interação da rede.</p>
                <p>Comece a se conectar com líderes. Conheça-os e apoie suas visões fazendo login.</p>
                <p>Você é um líder pronto para clarear seu propósito, impulsionar uma visão e obter apoio da sua comunidade? Inscreva-se aqui para acessar seu perfil de liderança.</p>
                <p>Saiba como os investimentos funcionam <a href="/how-might-we-redistribute-power/?lang=pt-pt">aqui</a>.</p>
            </div>
        </div>
    </section>
    <section class="section-home-about">
        <div class="section-last-posts central-block">
            <div class="block-more-blog">
                <h2>ÚLTIMAS VISÕES</h2>
                <a href="/visions-network/?lang=pt-pt">
                    <span>Veja mais</span>
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
                </a>
            </div>
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
                                <div class="post-attr"><?php echo get_the_author(); ?>
                                    - <?php echo get_the_date('d.m.Y', $post); ?></div>
                            </div>
                        </a>
                    <?php endwhile; endif;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>
<?php
get_footer();