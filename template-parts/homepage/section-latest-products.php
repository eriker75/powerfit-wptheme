<?php get_template_part('template-parts/clip', 'top', array(
    'top-color' => '#222222',
    'bottom-color' => '#E0F594',
    'orientation' => 100
)); ?>
<div class="latest-products">
    <div class="mx-auto container text-center max-w-5xl">
        <h1 class="latest-products__title">EXPLORA LOS ÚLTIMOS PRODUCTOS</h1>
        <p class="py-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis unde vel aut natus. Itaque asperiores unde, inventore culpa nostrum omnis ab modi amet, cumque laborum quisquam, adipisci vero. Quis, distinctio!</p>
        <section class="max-auto text-center flex justify-between mx-auto">
            <?php get_template_part('template-parts/carousel', 'card');?>
            <?php get_template_part('template-parts/carousel', 'card');?>
            <?php get_template_part('template-parts/carousel', 'card');?>
        </section>
    </div>
</div>