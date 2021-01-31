<!DOCTYPE html>
<html lang="es">
    <head>

        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Título | Flexilog</title>

    </head>

    <body>

        <?php include APPPATH . "views/shared/navbar.php"; ?>
        <main>

            <article class="pt-24 px-4 lg:px-0 text-center ">
                <h2 class="titulo-noticia lg:w-6/12 lg:pr-2 lg:hidden">Lorem ipsum dolor sit amet consectetur adipiscing
                </h2>
                <div class="relative flex flex-col items-center lg:py-16 lg:flex-row-reverse">

                    <div class=" bg-no-repeat bg-auto bg-center w-screen h-88 bg-indigo-700 md:bg-cover md:bg-scroll md:bg-center lg:w-1/2 lg:h-128" style="background-image: url('/assets/img/tecnologia.png');"></div>
                    <div class="px-0 w-100 container  lg:mx-auto lg:right-0 lg:left-0 lg:absolute lg:top-1/2 lg:max-w-5xl" style="transform:translateY(-50%)">
                        <h2 class="hidden titulo-noticia lg:block lg:w-6/12 lg:pr-2  lg:ml-16 xl:ml-0">Lorem ipsum dolor sit amet consectetur adipiscing
                        </h2>
                        <div class=" mx-auto bg-white right-0 shadow md:w-10/12  lg:w-7/12 lg:mt-32 lg:ml-16 lg:shadow-md p-4 xl:w-8/12 xl:ml-0">
                            <p class="text-indigo-700 leading-tight text-base">Inversión permanente y líderes en tecnología aplicada. Know How en operaciones y gestión de nuevos proyectos. Alianzas estratégicas con proveedores para lograr eficiencia y performance con alto nivel de servicio.</p>

                        </div>
                    </div>

                </div>

                <div class="mt-8 mx-auto lg:max-w-5xl">
                    <p class="text-base leading-normal text-indigo-600 text-left ">
                        Magnis libero urna dictum vitae nec dignissim ultricies maecenas, sem justo tristique ac id et augue litora, lacus nulla dis hendrerit morbi aliquam fames. Montes nec justo orci cum ante nascetur praesent, luctus vulputate habitasse urna himenaeos dapibus posuere ultrices, iaculis nibh netus non nostra neque. Iaculis integer sociis tellus faucibus congue a diam ut morbi tortor, natoque eu eleifend ullamcorper mattis potenti ac sed tempor, ligula nullam pulvinar phasellus dui erat risus penatibus vehicula.
                    </p>
                </div>

                <div class="container mx-auto max-w-5xl">
                    <div id="gallery-note" class="mt-8 mx-auto lg:max-w-5xl">
                        <a data-fslightbox="gallery1" href="/assets/img/img_01.jpg" data-srcset="img/img_01.jpg">
                            <div class="h-40 bg-no-repeat bg-center bg-cover mx-2" style="background-image:url('/assets/img/img_01.jpg')"></div>
                            <!-- <img src="img/img_01_thumb.jpg" /> -->
                        </a>

                        <a data-fslightbox="gallery1" href="/assets/img/img_02.jpg" data-srcset="img/img_02.jpg">
                            <div class="h-40 bg-no-repeat bg-center bg-cover mx-2" style="background-image:url('/assets/img/img_02.jpg')"></div>
                            <!-- <img src="img/img_01_thumb.jpg" /> -->
                        </a>

                        <a data-fslightbox="gallery1" href="/assets/img/img_03.jpg" data-srcset="img/img_01.jpg">
                            <div class="h-40 bg-no-repeat bg-center bg-cover mx-2" style="background-image:url('/assets/img/img_03.jpg')"></div>
                            <!-- <img src="img/img_01_thumb.jpg" /> -->
                        </a>
                        <a data-fslightbox="gallery1" href="/assets/img/img_03.jpg" data-srcset="img/img_01.jpg">
                            <div class="h-40 bg-no-repeat bg-center bg-cover mx-2" style="background-image:url('/assets/img/img_03.jpg')"></div>
                            <!-- <img src="img/img_01_thumb.jpg" /> -->
                        </a>
                        <a data-fslightbox="gallery1" href="/assets/img/img_03.jpg" data-srcset="img/img_01.jpg">
                            <div class="h-40 bg-no-repeat bg-center bg-cover mx-2" style="background-image:url('/assets/img/img_03.jpg')"></div>
                            <!-- <img src="img/img_01_thumb.jpg" /> -->
                        </a>

                    </div>
                    <div class="pb-6">
                        <ul id="siema_nav" class="flex justify-center items-center mt-4 md:justify-end">
                            <li class="bg-white p-2 mx-2 text-indigo-600 hover:bg-indigo-200 hover:cursor-pointer prev">
                                <svg class="fill-current" width="8" height="13" viewbox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.828 6.364L7.778 11.314L6.364 12.728L0 6.364L6.364 0L7.778 1.414L2.828 6.364Z"/>
                                </svg>
                            </li>
                            <li class="bg-white p-2 mx-2 text-indigo-600 hover:bg-indigo-200 hover:cursor-pointer next">
                                <svg class="fill-current" width="8" height="13" viewbox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.95 6.364L0 1.414L1.414 0L7.778 6.364L1.414 12.728L0 11.314L4.95 6.364Z"/>
                                </svg>
                            </li>

                        </ul>
                    </div>
                </div>

            </article>

        </main>


        <?php include APPPATH . "views/shared/footer.php"; ?>

        <!-- Libraries -->
        <script src="/assets/js/siema.min.js" type=""></script>
        <script src="/assets/js/index.js" type=""></script>
        <script src="/assets/js/wow.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="/assets/js/events.js"></script>


        <script>
            const nota = new Siema({
                selector: '#gallery-note',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    0: 1,
                    768: 3,
                    // 1024: 3,
                },
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: false,
                rtl: false
            });

            document
                .querySelector('#siema_nav > .prev')
                .addEventListener('click', () => nota.prev());
            document
                .querySelector('#siema_nav > .next')
                .addEventListener('click', () => nota.next());
        </script>


    </body>
</html>