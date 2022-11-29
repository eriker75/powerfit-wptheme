<div class="p-5 flex" 
     style="background: linear-gradient(110deg, 
            <?php echo $args['color_one'];?> 60%, 
            <?php echo $args['color_two'];?> 60%);
">
    <div class="grow flex flex-col justify-between" 
         style="color:<?php echo $args['text_color'];?>;max-width: 50%;
    ">
        <div class="grow" style="font-weight: 900;font-size: clamp(16px,1.6vw,24px);">
          <?php echo $args['title']?>
          </div>
          <div class="grow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In tempore nemo nulla dolores distinction.</div>
          <div class="grow" 
               style="color:<?php echo $args['btn_color'];?>; font-weight: 900;
          ">
               VER MAS
          </div>
    </div>
    <div class="grow flex items-center justify-center">
        <img
        src="<?php echo get_template_directory_uri() . '/assets/img/shoes.png';?>"
        alt="#"
        >
    </div>
</div>