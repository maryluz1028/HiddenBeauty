<!-- Site footer markup goes here -->
</div>
</main>
<footer class="w-full bg-black01">
    <div class="w-full container py-16">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 ">
            <div class="about-footer w-full flex flex-col ">
                <div class="title w-full mb-8">
                    <h2 class="w-full border-l-4 border-solid border-pink px-8 text-white">¿Quienes somos?</h2>
                </div>
                <div class="description w-full mb-8 text-gray01">
                    <?php $aboutUsPostFooter=get_post(9); ?>
                    <?= $aboutUsPostFooter->post_content; ?>
                </div>
                <div class="btn-read-more w-full">
                    <?php get_template_part('templates/views/Button',null,[
                        'class'=>'button-w-full hover-bg-transparent button-icon-m',
                        'text'=>'Leer más',
                        'icon'=>'fas fa-angle-double-right',
                        'href'=>get_the_permalink($aboutUsPostFooter->ID)
                    ]); ?>
                </div>
            </div>
            <div class="contact-footer w-full ">
                <div class="w-full mb-8">
                    <h2 class="w-full px-8 border-l-4 border-solid border-pink text-white">Contáctenos</h2>
                </div>
                <div class="contact list w-full">
                    <ul class="flex flex-col w-full text-gray01">
                        <li class="w-full mb-6 flex flex-row">
                            <div class="icon mr-4 text-pink text-xl"><i class="fas fa-map-marker-alt"></i></div>
                            <span class="">123 6th St. Melbourne, FL 32904</span>
                        </li>
                        <li class="w-full mb-6 flex flex-row">
                            <div class="icon mr-4 text-pink text-xl"><i class="fas fa-phone-alt"></i></i></div>
                            <span class="">+659874123, +659874124</span>
                        </li>
                        <li class="w-full mb-6 flex flex-row">
                            <div class="icon mr-4 text-pink text-xl"><i class="fas fa-phone-square-alt"></i></div>
                            <span class="">+123789456, +1213987654</span>
                        </li>
                        <li class="w-full mb-6 flex flex-row">
                            <div class="icon mr-4 text-pink text-xl"><i class="fas fa-envelope"></i></div>
                            <span class="">hiddenbeauty@email.com</span>
                        </li>
                        <li class="w-full mb-6 flex flex-row">
                            <div class="icon mr-4 text-pink text-xl"><i class="fas fa-globe-americas"></i></div>
                            <span class="">www.hiddenbeauty.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="newsletter w-full ">
                    <div class="w-full mb-8">
                        <h2 class="w-full px-8 border-l-4 border-solid border-pink text-white">Suscripcion</h2>
                    </div>
                    <form class="form-newletter" action="">
                        <input class="mb-6 max-w-none" type="text" placeholder="Ingresar nombre">
                        <input class="mb-6 max-w-none" type="text" placeholder="Ingresar correo">
                        <br>
                    <?php
                    get_template_part('templates/views/Button',null,[
                        'class'=>'button-w-full button-border-none hover-bg-transparent button-border-pink button-w-full-md',
                        'text'=>'Suscribir'
                    ]);
                    ?>
                    </form>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-row justify-center bg-black p-4 text-white">
        <span>Copyright ©2022 — Mary P.</span>
    </div>
</footer>
<?php get_template_part( 'templates/partials/document-close' );
