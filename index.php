<?php
/**
 * Template Name: Главная страница *
 */

 get_header();
?>
    <main>
        <h1 class="title"><?php the_field('title') ?></h1>
        <h2><?php the_field('subtitle') ?></h2>
        <div class="cards-box">
            <div class="card">
                <p class="term"><?php the_field('term_1') ?></p>
                <div class="items-img"></div>
            </div>
            <div class="card">
                <p class="pink buyer-type"><?php the_field('type_of_customer_2') ?></p>
                <p class="term"><?php the_field('term_2_before') ?> <span class="tooltip-box"><a class="promo pink"><?php the_field('promocode') ?></a>
                    <span class="tooltip">Промокод скопирован</span></span>
                    <svg width="21" height="27" viewBox="0 0 21 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.91712 1.99348C6.61816 2.5802 6.61816 3.34828 6.61816 4.88442V6.14261H10.968C11.5496 6.14257 12.0837 6.14252 12.5302 6.18306C13.0116 6.22676 13.5383 6.3268 14.0585 6.62131C14.8022 7.04237 15.4069 7.71425 15.7859 8.54064C16.0509 9.11864 16.141 9.70382 16.1803 10.2387C16.2168 10.7348 16.2168 11.3283 16.2167 11.9745V19.3181C17.4685 19.3154 18.1442 19.2887 18.6727 19.0194C19.1888 18.7564 19.6084 18.3368 19.8714 17.8207C20.1704 17.234 20.1704 16.4659 20.1704 14.9298V4.88442C20.1704 3.34828 20.1704 2.5802 19.8714 1.99348C19.6084 1.47737 19.1888 1.05777 18.6727 0.794803C18.086 0.49585 17.3179 0.49585 15.7818 0.49585H11.0067C9.47059 0.49585 8.70252 0.49585 8.11579 0.794803C7.59969 1.05777 7.18008 1.47737 6.91712 1.99348Z"
                              fill="#FF005C"/>
                        <rect x="0.970703" y="8.02478" width="13.5522" height="18.8225" rx="2.74286" fill="#FF005C"/>
                    </svg>
                    <?php the_field('term_2_after') ?></p>
                <strong class="price pink"><?php the_field('discount_2') ?></strong>
            </div>
            <div class="card">
                <p class="pink buyer-type"><?php the_field('type_of_customer_3') ?></p>
                <p class="term third"><?php the_field('term_3') ?></p>
                <div class="discount">
                    <strong class="percent pink"><?php the_field('discount_3') ?></strong>
                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="12.6474" cy="12.2866" rx="12.2446" ry="12.2585" fill="#FF005C"/>
                        <ellipse cx="44.1342" cy="43.8084" rx="12.2446" ry="12.2585" fill="#FF005C"/>
                        <path d="M49.3813 7.03271L7.3999 49.0619" stroke="#FF005C" stroke-width="2.90622"
                              stroke-linecap="round"/>
                    </svg>
                </div>
                <p class="correction"><?php the_field('correction_3') ?></p>
            </div>
        </div>
        <a class="order-btn"><?php the_field('text_button') ?></a>
        <img class="qr" src="<?php bloginfo('template_url') ?>/assets/images/Rectangle380.png" alt="qr">
    </main>
    <?php
       get_footer();
    ?>