<!DOCTYPE html>
<html lang="es">

<head>
   <?php include  APPPATH . "views/shared/head.php"; ?>
   <title>Nosotros | Flexilog</title>
</head>

<body>
   <?php include APPPATH . "views/shared/navbar.php"; ?>
   <main>

      <!-- Top  -->
      <section id="home_top" class="pt-0 border-rounded-lg">
         <div class="container h-80 w-auto flex items-end md:items-center bg-center bg-cover bg-no-repeat md:h-128 lg:rounded-lg" style="background-image: url('<?= site_url('/assets/img/banner_nosotros.jpg')?>');">
            <div class="w-full md:max-w-5xl md:mx-auto pb-10">
                <h1 class="text-white px-3 pb-4 md:pb-0 text-xl font-bold leading-tight md:text-4xl wow fadeInRight xl:w-11/12 xl:text-5xl" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s">
                    Somos una empresa nacional dedicada a satisfacer las necesidades del mercado local a través de Soluciones Logísticas Integrales a medida.
                </h1>
                <img src="<?= site_url('/asstes/img/miscelanea.svg')?>" class="pl-3 pt-8 w-12 md:w-16" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s" alt="">
            </div>

        </div>

        <!-- Cards -->
        <div class="px-2 bg-white lg:pt-16 container">
            <div class="flex flex-col py-8 px-1 md:mx-auto">
                <div class="text-center mx-auto mb-4 flex flex-col justify-center items-center w-full mb-2 md:flex-row md:w-10/12 xl:w-6/12">
                    <img class="h-16 md:mr-8" src="<?= site_url('/assets/img/ico_vehiculos.png')?>" alt="">
                    <div>
                    <h4 class="font-bold text-center text-pink-500 text-3xl md:text-left md:text-5xl">Con 70 años</h4>
                    <p class="leading-tight font-medium text-indigo-500 text-center text-lg md:text-base md:text-left lg:text-lg">de experiencia, somos líderes en Logística y Distribución en el mercado Farmacéutico.</p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-around">
                    <div class="items-center justify-start rounded-lg py-8 px-4 item bg-white border-1 border-indigo-400 my-2 w-full md:w-5/12 md:h-56 md:flex-col md:items-center lg:w-3/12 lg:m-8 lg:h-64 flex flex-row ">
                        <img class="w-16 mb-1 md:h-16 md:w-auto md:mb-2 mr-4" src="<?= site_url('/assets/img/nosotros_01.png')?>" alt="">
                        <div>
                            <h4 class="leading-none text-pink-500 text-left mb-2 text-xl font-bold md:mb-2 md:text-center">
                                + de 1.300
                            </h4>
                            <p class="leading-tight font-medium text-indigo-500 text-left text-lg md:text-center">
                                colaboradores</p>
                        </div>
                    </div>
                    <div class="items-center justify-start rounded-lg py-8 px-4 item bg-white border-1 border-indigo-400 my-2 w-full md:w-5/12 md:h-56 md:flex-col md:items-center lg:w-3/12 lg:m-8 lg:h-64 flex flex-row ">
                        <img class="w-16 mb-1 md:h-16 md:w-auto md:mb-2 mr-4" src="<?= site_url('/assets/img/nosotros_02.png')?>" alt="">
                        <div>
                            <h4 class="leading-none text-pink-500 text-left mb-2 text-xl font-bold md:mb-2 md:text-center">
                                + de 8.000
                            </h4>
                            <p class="leading-tight font-medium text-indigo-500 text-left text-lg md:text-center">
                                Puntos de entrega con cobertura nacional</p>
                        </div>
                    </div>
                    <div class="items-center justify-start rounded-lg py-8 px-4 item bg-white border-1 border-indigo-400 my-2 w-full md:w-5/12 md:h-56 md:flex-col md:items-center lg:w-3/12 lg:m-8 lg:h-64 flex flex-row ">
                        <img class="w-16 mb-1 md:h-16 md:w-auto md:mb-2 mr-4" src="<?= site_url('/assets/img/nosotros_03.png')?>" alt="">
                        <div>
                            <h4 class="leading-none text-pink-500 text-left mb-2 text-xl font-bold md:mb-2 md:text-center">Capacidad de entrega Multicana
                            </h4>
                            <p class="leading-tight font-medium text-indigo-500 text-left text-lg md:text-center">Droguerías, Distribuidores, Retails, Farmacias, APMs, Domicilios.</p>
                        </div>
                    </div>
                    <div class="items-center justify-start rounded-lg py-8 px-4 item bg-white border-1 border-indigo-400 my-2 w-full md:w-5/12 md:h-56 md:flex-col md:items-center lg:w-3/12 lg:m-8 lg:h-64 flex flex-row ">
                        <img class="w-16 mb-1 md:h-16 md:w-auto md:mb-2 mr-4" src="<?= site_url('/assets/img/nosotros_04.png')?>" alt="">
                        <div>
                            <h4 class="leading-none text-pink-500 text-left mb-2 text-xl font-bold md:mb-2 md:text-center">
                                + de 16.000
                            </h4>
                            <p class="leading-tight font-medium text-indigo-500 text-left text-lg md:text-center">
                                Entregas diarias
                            </p>
                        </div>
                    </div>
                    <div class="items-center justify-start rounded-lg py-8 px-4 item bg-white border-1 border-indigo-400 my-2 w-full md:w-5/12 md:h-56 md:flex-col md:items-center lg:w-3/12 lg:m-8 lg:h-64 flex flex-row ">
                        <img class="w-16 mb-1 md:h-16 md:w-auto md:mb-2 mr-4" src="<?= site_url('/assets/img/nosotros_05.png')?>" alt="">
                        <div>
                            <h4 class="leading-none text-pink-500 text-left mb-2 text-xl font-bold md:mb-2 md:text-center">
                                + de 20.000
                            </h4>
                            <p class="leading-tight font-medium text-indigo-500 text-left text-lg md:text-center">
                                SKUs diferentes manipulados en nuestros depósitos
                            </p>
                        </div>
                    </div>
                    <div class="items-center justify-start rounded-lg py-8 px-4 item bg-white border-1 border-indigo-400 my-2 w-full md:w-5/12 md:h-56 md:flex-col md:items-center lg:w-3/12 lg:m-8 lg:h-64 flex flex-row ">
                        <img class="w-16 mb-1 md:h-16 md:w-auto md:mb-2 mr-4" src="<?= site_url('/assets/img/nosotros_06.png')?>" alt="">
                        <div>
                            <h4 class="leading-none text-pink-500 text-left mb-2 text-xl font-bold md:mb-2 md:text-center">
                                + de 18 millones
                            </h4>
                            <p class="leading-tight font-medium text-indigo-500 text-left text-lg md:text-center">De unidades mensuales distribuidas en todo el país.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Fin Cards -->
        <div class="container text-center lg:py-8">
            <img src="<?= site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
        </div>

      </section>
      <!-- Fin Top  -->
      <div class="container h-64 w-auto flex items-center bg-center bg-cover bg-no-repeat lg:rounded-lg lg:h-88" style="background-image: url('<?= site_url('/assets/img/banner_nosotros_02.jpg')?>');">
        <div class="w-full md:max-w-5xl md:mx-auto pb-10 md:py-8">
            <h1 class="text-white px-3 pb-4 md:pb-0 text-xl font-bold leading-tight md:text-4xl wow fadeInRight lg:w-4/6 xl:text-5xl" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s">
                Brindamos servicios de warehousing y distribución.
            </h1>
            <img src="<?= site_url('/assets/img/miscelanea.svg')?>" class="pl-3 pt-8 w-12 md:w-16" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s" alt="">
        </div>

    </div>
     <!-- Certificaciones -->
     <section class="mt-8 lg:pb-12">
        <div class="lg:max-w-5xl lg:mx-auto">
            <h4 class="text-pink-500 font-bold mb-4 text-left text-2xl pl-2 text-center md:text-4xl">CERTIFICACIONES</h4 >
            <div class="flex flex-wrap justify-center lg:flex-no-wrap mt-4 certificaciones px-8">
                <div class="w-1/2 my-3 lg:w-3/12  flex flex-col justify-end items-center md:w-1/4"><img class="mb-4" src="<?= site_url('/assets/img/logo_anmat.png')?>" alt="">
                    <p class="text-lg text-center text-indigo-500">
                        Certificado de
                        <br>ANMAT</p>
                </div>
                <div class="w-1/2 my-3 lg:w-3/12  flex flex-col justify-end items-center md:w-1/4"><img class="mb-4" src="<?= site_url('/assets/img/logo_buenaspracticas.png')?>" alt="">
                    <p class="text-lg text-center text-indigo-500">
                        Certificado de
                        <br>Buenas Prácticas</p>
                </div>
            </div>
        </div>

    </section>
      <!-- Fin Certificaciones -->


   </main>


   <?php include APPPATH . "views/shared/footer.php"; ?>
   <?php include APPPATH . "views/shared/scripts.php" ?>


</body>

</html>