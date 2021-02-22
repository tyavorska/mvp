<?php
/* Template Name: About Us Page prt */

get_header();
?>

    <section class="first-wrapper-connect">
        <div class="section-connect-inner central-block">
            <div class="left-block-img">
                <iframe width="41vw" height="23vw" src="https://www.youtube.com/embed/-RF4Iww4lUc" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="right-block-text">
                <p>Somos um aceleradora de líderes.</p>
                <p>
                    Acreditamos que o poder deve ser distribuído e que liderança é inevitável. Acreditamos que a direção da mudança é a unidade e o futuro da economia é circular.
                </p>
                <p>Toda receita da Clear Purpose, da facilitação e venda de dados dessa plataforma, retornam à comunidade através de investimentos que fazemos juntos na implementação da visão das lideranças. Esses investimentos são feitos com base na sua confiança, suporte e interação com a nossa rede de líderes.
                </p>
                <p>Líderes, agentes de mudanças e empreendedores compartilham suas visões durante o desenvolvimento, porque só há liderança onde há engajamento. Desde o começo do processo, ajudamos líderes a aumentar a transparência, a participação e o suporte da comunidade por meio do canal Visions. </p>
                <p>As pessoas se envolvem interagindo e mostrando apoio aos líderes, espalhando a mensagem e fazendo mais conexões. Quanto mais você apoia, mais dados você gera, e isso retorna em investimento à sua comunidade, porque estamos juntos nas visões que mais importam para você.
                </p>
                <p>Os critérios e resultados do investimento são divulgados publicamente em relatórios claros.
                </p>
                <p>Nossa visão é um mundo em que LÍDERES E PESSOAS COMPARTILHAM UM PROPÓSITO CLARO.
                </p>
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
