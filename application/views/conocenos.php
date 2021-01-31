<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Conocenos | Flexilog</title>
    </head>

    <body>
        <?php include APPPATH . "views/shared/navbar.php"; ?>
        <main>

            <section class="lg:flex flex-wrap">
                <div class="hidden lg:inline-block lg:w-1/2 lg:h-128"></div>
                <div class="h-64 lg:inline-block lg:w-1/2 lg:h-128" style="background-color:#cad3f33b">
                    <img class="w-auto h-48 md:h-72 ml-auto opacity-75 absolute right-0 lg:h-88" src="/assets/img/misc_03_big.png" style="z-index: -1;" alt="">
                    <!-- list -->

                </div>
                <div class="w-80 -mt-40 mx-auto z-10 md:w-10/12 z-10 pb-20 lg:-mt-96">
                    <h2 class="encabezados lg:-mt-12 lg:ml-16">Conocenos</h2>
                    <h3 class="text-indigo-500 text-xl lg:-mt-4 lg:ml-16">Valores Core</h3>
                </div>

                <div class="-mt-12 lg:w-10/12 lg:ml-40 lg:p-4 lg:-mt-56">
                    <div id="valores" class="pb-4">
                        <!-- core -->
                        <div class="bg-white h-48 p-4 shadow-md mx-2">
                            <p class="text-gray-400 leading-normal text-base md:leading-tight">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis torquent, viverra enim lacinia mauris sollicitudin Hendrerit cum facilisi dapibus ad mus duis auctor.</p>
                        </div>
                        <!-- fin core -->
                        <!-- core -->
                        <div class="bg-white h-48 p-4 shadow-md mx-2">
                            <p class="text-gray-400 leading-normal text-base md:leading-tight">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis torquent, viverra enim lacinia mauris sollicitudin Hendrerit cum facilisi dapibus ad mus duis auctor.</p>
                        </div>
                        <!-- fin core -->
                        <!-- core -->
                        <div class="bg-white h-48 p-4 shadow-md mx-2">
                            <p class="text-gray-400 leading-normal text-base md:leading-tight">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis torquent, viverra enim lacinia mauris sollicitudin Hendrerit cum facilisi dapibus ad mus duis auctor.</p>
                        </div>
                        <!-- fin core -->
                        <!-- core -->
                        <div class="bg-white h-48 p-4 shadow-md mx-2">
                            <p class="text-gray-400 leading-normal text-base md:leading-tight">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis torquent, viverra enim lacinia mauris sollicitudin Hendrerit cum facilisi dapibus ad mus duis auctor.</p>
                        </div>
                        <!-- fin core -->
                        <!-- core -->
                        <div class="bg-white h-48 p-4 shadow-md mx-2">
                            <p class="text-gray-400 leading-normal text-base md:leading-tight">Lorem ipsum dolor sit amet consectetur adipiscing elit mollis torquent, viverra enim lacinia mauris sollicitudin Hendrerit cum facilisi dapibus ad mus duis auctor.</p>
                        </div>
                        <!-- fin core -->
                    </div>
                    <div class="pb-6">
                        <ul id="siema_nav" class="flex justify-center items-center mt-4 md:justify-end md:mr-32">
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


        <script>

            const valores = new Siema({
                selector: '#valores',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    0: 1,
                    768: 3,
                    1024: 4
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
                .addEventListener('click', () => valores.prev());
            document
                .querySelector('#siema_nav > .next')
                .addEventListener('click', () => valores.next());
        </script>


    </body>
</html>