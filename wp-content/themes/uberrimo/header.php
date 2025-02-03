
<!DOCTYPE html>
<head>
<title><?php echo esc_html(get_bloginfo('name')); ?> | <?php echo the_title(); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo esc_html(get_bloginfo('name')) . ' - ' . esc_html(get_the_title()); ?>">
<meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
<meta property="og:image" content="<?php echo content_url();?>/uploads/2024/10/thumbnial.png">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="es_ES">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
<meta name="twitter:image" content="<?php echo content_url();?>/uploads/2024/10/thumbnial.png">
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php wp_head(); 
    $parent_id = wp_get_post_parent_id( get_the_ID() );
    
?>
</head>

<header class="<?php echo ($parent_id) ? 'md:absolute w-full z-50' : ''; ?>">
    <div class="mx-auto max-w-7xl 2xl:max-w-8xl relative " >
        <nav class="flex justify-between p-4 ">

            <div class="hidden md:flex flex-1">
                <?php wp_nav_menu(
                array(
                    'menu'            => 'main_menu',
                    'theme_location'  => 'main_menu',
                    'container'       => false,
                    'container_id'    => false,
                    'container_class' => false,
                    'menu_id'         => 'desktop-menu',
                    'menu_class'      => 'items-center justify-center hidden text-sm 2xl:text-base md:flex gap-4',
                    'item_class'      => false,
                    'link_class'      => 'font-poppins-regular pb-1 relative',
                )
                ); ?>
            </div>
            <div class="navbar md:hidden absolute left-0 ">
                <div class="container nav-container">
                    <input class="checkbox" type="checkbox" name="" id="" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>  
                    <div class="menu-items">
                    <?php wp_nav_menu(
                    array(
                        'menu'            => 'main_menu',
                        'theme_location'  => 'main_menu',
                        'container'       => false,
                        'container_id'    => false,
                        'container_class' => false,
                        'menu_id'         => 'mobile-menu',
                        'menu_class'      => 'text-base',
                        'item_class'      => false,
                        'link_class'      => 'font-OpenRegular text-dimGray',
                    )
                    ); ?>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <a href="/home" class=" z-50">
                    <figure>
                        <img class="h-8 2xl:h-9 md:ml-[16rem]" src="<?php echo content_url();?>/uploads/2025/02/logo-header.webp" alt="Logo uberrimo home">
                    </figure>
                </a>
            </div>
            <div class="flex items-center justify-end gap-4 flex-1">
                <a href="#">
                    <img class="h-7" src="<?php echo content_url();?>/uploads/2025/02/instagram.svg" alt="Icono instagram">
                </a>
                <a href="#">
                    <img class="h-7" src="<?php echo content_url();?>/uploads/2025/02/whatsapp.svg" alt="Icono whatsapp">
                </a>
            </div>
        </nav>
    </div>
</header>