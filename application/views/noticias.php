<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Noticias | Flexilog</title>
    </head>

    <body>
        <?php include APPPATH . "views/shared/navbar.php"; ?>
        <main>

            <section class="pt-0 text-center">

                <div class="container pt-20 px-4 lg:mx-auto lg:max-w-5xl lg:pt-10">
                    <h2 class="encabezados lg:pt-16 text-left">Noticias</h2>
                </div>

                <div id="news" class="container mb-6 md:flex flex-wrap lg:mb-12 lg:mx-auto lg:max-w-5xl">
                    <!-- item -->
                    <article class="py-6 md:w-1/2 md:px-3 md:py-4 lg:w-1/3">
                        <div class="bg-white border rounded-3 overflow-hidden shadow hover:shadow-lg">
                            <div class="h-48 bg-cover bg-center bg-gray-500" style="background-image:url('/assets/img/galeria_1.png')"></div>
                            <div class="p-6 flex flex-col justify-center">
                                <div class="flex flex-col items-baseline mb-4 text-left ">
                                    <h4 class="mt-1 mb-3 font-medium text-xl leading-tight text-indigo-600">Lorem ipsum dolor sit amet.</h4>
                                    <p class="mt-1 text-indigo-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet sapiente ab reprehenderit dolorem modi voluptates reiciendis aperiam eveniet quam officiis?</p>
                                </div>
                                <a href="articulo.html" class="button">Leer más</a>
                            </div>
                        </div>

                    </article>
                    <!-- fin item -->
                    <!-- item -->
                    <article class="py-6 md:w-1/2 md:px-3 md:py-4 lg:w-1/3">
                        <div class="bg-white border rounded-3 overflow-hidden shadow hover:shadow-lg">
                            <div class="h-48 bg-cover bg-center bg-gray-500" style="background-image:url('/assets/img/galeria_2.png')"></div>
                            <div class="p-6 flex flex-col justify-center">
                                <div class="flex flex-col items-baseline mb-4 text-left ">
                                    <h4 class="mt-1 mb-3 font-medium text-xl leading-tight text-indigo-600">Lorem ipsum dolor sit amet.</h4>
                                    <p class="mt-1 text-indigo-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet sapiente ab reprehenderit dolorem modi voluptates reiciendis aperiam eveniet quam officiis?</p>
                                </div>
                                <a href="articulo.html" class="button">Leer más</a>
                            </div>
                        </div>

                    </article>
                    <!-- fin item -->
                    <!-- item -->
                    <article class="py-6 md:w-1/2 md:px-3 md:py-4 lg:w-1/3">
                        <div class="bg-white border rounded-3 overflow-hidden shadow hover:shadow-lg">
                            <div class="h-48 bg-cover bg-center bg-gray-500" style="background-image:url('/assets/img/galeria_3.png')"></div>
                            <div class="p-6 flex flex-col justify-center">
                                <div class="flex flex-col items-baseline mb-4 text-left ">
                                    <h4 class="mt-1 mb-3 font-medium text-xl leading-tight text-indigo-600">Lorem ipsum dolor sit amet.</h4>
                                    <p class="mt-1 text-indigo-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet sapiente ab reprehenderit dolorem modi voluptates reiciendis aperiam eveniet quam officiis?</p>
                                </div>
                                <a href="articulo.html" class="button">Leer más</a>
                            </div>
                        </div>

                    </article>
                    <!-- fin item -->

                </div>
                <a href="#" class="button">Cargar más</a>
            </section>

        </main>


        <?php include APPPATH . "views/shared/footer.php"; ?>

        <!-- Libraries -->
        <script src="/assets/js/siema.min.js" type=""></script>
        <script src="/assets/js/index.js" type=""></script>
        <script src="/assets/js/wow.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="/assets/js/events.js"></script>


    </body>
</html>