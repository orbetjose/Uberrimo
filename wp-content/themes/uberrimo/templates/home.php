<?php
/**
 * Template Name: Home
 * @package WordPress
 * @subpackage Uberrimo
 * @since Uberrimo 1.0
 */
?>

<?php get_header(); ?>

<section>
    <div class="flex flex-col justify-center items-center relative">
        <figure class="w-full">
            <img class="h-screen w-full object-cover" src="<?php echo content_url();?>/uploads/2025/02/banner-home.webp" alt="Banner Uberrimo Homes">
        </figure>
        <div class="absolute text-center">
            <h1 class="uppercase font-poppins-bold text-white text-2xl md:text-4xl">Calidad superior,</h1>
            <p class="text-white md:text-3xl text-2xl font-poppins-light uppercase tracking-wider">Acabados impecables.</p>
            <div class="border-b border-2 border-gainsboro w-32 mx-auto mt-2"></div>
        </div>
    </div>
</section>

<section>
    <div class="py-24 max-w-3xl mx-auto px-4 md:px-0">
        <h3 class="uppercase font-poppins-bold text-center md:text-3xl text-2xl text-philippine pb-10">Uberrimo Homes</h3>
        <p class="font-poppins-light text-center md:text-lg text-charleston pb-4">Nace de la experiencia de <span class="font-poppins-bold">más de 20 años en el sector inmobiliario</span> en la Florida dedicada a la creación de espacios habitables innovadores y sostenibles.</p>
        <p class="font-poppins-light text-center md:text-lg text-charleston">Con un enfoque en la artesanía de calidad y una atención meticulosa al detalle.</p>
    </div>
</section>

<section class="bg-black">
    <div class="pt-24 pb-10 max-w-3xl mx-auto px-4 md:px-0">
        <p class="uppercase font-poppins-semibold text-center md:text-3xl text-xl text-white pb-10 ">Razones para comprar <br><span class="font-poppins-black">en ocala marion county</span></p>
        <p class="font-poppins-light text-center md:text-lg pb-4 text-white">Nuestra oportunidad de inversión en casas te ofrece la oportunidad única de adquirir una propiedad que no solo cumple tus sueños de vivienda, sino que también te brinda una rentabilidad garantizada.</p>
    </div>
</section>

<section class="bg-black">
    <div class="pb-20 max-w-5xl mx-auto flex flex-col md:flex-row justify-center px-4 md:px-0">
        <div class="flex-1 py-6">
            <p class="font-poppins-semibold text-white text-lg text-center leading-5 ">Mercado Inmobiliario<br>Asequible</p>
        </div>
        <div class="flex-1 py-6 md:border-l md:border-r border-gainsboro">
            <p class="font-poppins-semibold text-white text-lg text-center leading-5">Crecimiento<br>Económico</p>
        </div>
        <div class="flex-1 py-6">
            <p class="font-poppins-semibold text-white text-lg text-center leading-5">Ubicación<br>Estrategica</p>
        </div>
    </div>
</section>

<section>
    <div class="py-20 max-w-5xl mx-auto px-4 md:px-0 text-center">
        <div class="pb-20 ">
            <h3 class="uppercase font-poppins-bold md:text-3xl text-2xl text-center">Nuestro portafolio</h3>
            <div class="border-b border-2 border-black w-44 mx-auto mt-2"></div>
        </div>
        <div class="flex gap-8 pb-20">
            <div class="flex-1 relative overflow-hidden portafolio-home cursor-pointer">
                <div class="overlay opacity-0"></div>
                <img class="h-full w-full object-cover" src="<?php echo content_url();?>/uploads/2025/02/utah.webp" alt="Utah">
                <span class="uppercase font-open-bold text-white text-xl absolute z-10 bottom-0 ml-4 mb-4 translate-y-20 location">Utah</span>
            </div>
            <div class="flex-1 relative overflow-hidden portafolio-home cursor-pointer">
                <div class="overlay opacity-0"></div>
                <img class="h-full w-full object-cover" src="<?php echo content_url();?>/uploads/2025/02/florida.webp" alt="Florida">
                <span class="uppercase font-open-bold text-white text-xl absolute z-10 bottom-0 ml-4 mb-4 translate-y-20 location">Florida</span>
            </div>
            <div class="flex-1 relative overflow-hidden portafolio-home cursor-pointer">
                <div class="overlay opacity-0"></div>
                <img class="h-full w-full object-cover" src="<?php echo content_url();?>/uploads/2025/02/okala.webp" alt="Okala">
                <span class="uppercase font-open-bold text-white text-xl absolute z-10 bottom-0 ml-4 mb-4 translate-y-20 location">Okala</span>
            </div>
        </div>
        <a href="#" class="font-poppins-semibold text-black underline underline-offset-2 text-lg uppercase">Ver más</a>
    </div>
    <div class="pb-20 max-w-4xl mx-auto px-4 md:px-0 text-center">
        <div class="flex justify-between items-center ">
            <div>
                <img class="h-22" src="<?php echo content_url();?>/uploads/2025/02/rbi-logo.webp" alt="RBI Private Landing">
            </div>
            <div>
                <img class="h-16" src="<?php echo content_url();?>/uploads/2025/02/first-step-logo.webp" alt="First step builders lc">
            </div>
            <div>
                <img class="h-16" src="<?php echo content_url();?>/uploads/2025/02/arod-logo.webp" alt="Arod partners realty">
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>