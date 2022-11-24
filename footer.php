    </main>


    <?php get_template_part('template-parts/clip', 'top', array(
        'top-color' => '#212121',
        'bottom-color' => '#000000',
        'orientation' => 100
    )); ?>
    <footer class="main-footer">
    </footer>
    <div class="footer-copyright">
        Copyrigth <?php echo date("Y"); ?> Derecho reservados
    </div>
    

    <!--
    <footer class="flex-0 bg-slate-100 px-4 py-2">
        <div class="container mx-auto text-center">
            <p class="text-xs">Currently in <strong><?php// echo (IS_VITE_DEVELOPMENT) ? "development" : "production" ?></strong> mode.</p>
        </div>
    </footer>
    -->
<?php wp_footer() ?>
</body>
</html>