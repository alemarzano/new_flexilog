<!DOCTYPE html>
<html lang="es">

<head>
   <?php include APPPATH . "views/shared/head.php"; ?>
   <title>Home | Flexilog</title>
</head>

<body>

   <?php include APPPATH . "views/shared/navbar.php" ?>

   <main>

		<!-- TOP & CARDS -->
		<section id="home_top" class="pt-0">
      <div
         class="container h-80 w-auto flex items-end md:items-center bg-center bg-cover bg-no-repeat md:h-128 lg:rounded-lg"
         style="background-image: url('<?= site_url('/assets/img/banner_home.jpg')?>');">
         <div class="w-full md:max-w-5xl md:mx-auto pb-10">
            <h1 class="text-white w-2/3 md:w-3/4 px-3 pb-4 md:pb-0 text-3xl font-bold leading-tight md:text-5xl wow fadeInRight "
               data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s">
               Brindamos servicios de warehousing y distribución
            </h1>
            <img src="<?= site_url('/assets/img/miscelanea.svg')?>" class="pl-3 pt-8 w-12 md:w-16 lg:w-24"
               data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s" alt="">
         </div>

      </div>

      <div
         class="flex flex-wrap pt-8 md:pt-16  justify-around px-1 lg:flex-no-wrap md:max-w-6xl md:mx-auto  md:justify-center">
         <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <img class="h-12 w-auto mb-4 md:h-16 md:w-auto md:mb-2 lg:h-24 lg:mb-8"
               src="<?= site_url('/assets/img/ico_lideres.png')?>" alt="">
            <div>
               <h4
                  class="font-bold leading-none text-pink-500 text-center mb-2 uppercase font-medium text-base md:text-lg md:mb-2 lg:text-2xl">
                  Líderes en distribución</h4>
               <p class="leading-tight font-body text-indigo-600 text-center text-xs md:text-base xl:text-lg xl:mt-4">
                  con capilaridad diaria hacia puntos de entrega en todo el país.</p>
            </div>
         </div>

         <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".8s">
            <img class="h-12 w-auto mb-4 md:h-16 md:w-auto md:mb-2 lg:h-24 lg:mb-8"
               src="<?= site_url('/assets/img/ico_experiencia.png')?>" alt="">
            <div>
               <h4
                  class="font-bold leading-none text-pink-500 text-center mb-2 uppercase font-medium text-base md:text-lg md:mb-2 lg:text-2xl">
                  Experiencia</h4>
               <p class="leading-tight font-body text-indigo-600 text-center text-xs md:text-base xl:text-lg xl:mt-4">
                  en gestión de inventarios y surtidos.</p>
            </div>
         </div>
         <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="1.1s">
            <img class="h-12 w-auto mb-4 md:h-16 md:w-auto md:mb-2 lg:h-24 lg:mb-8"
               src="<?= site_url('/assets/img/ico_flota.png')?>" alt="">
            <div>
               <h4
                  class="font-bold leading-none text-pink-500 text-center mb-2 uppercase font-medium text-base md:text-lg md:mb-2 lg:text-2xl">
                  Gestión de la flota</h4>
               <p class="leading-tight font-body text-indigo-600 text-center text-xs md:text-base xl:text-lg xl:mt-4">
                  de distribución con sistema de seguimiento y visibilidad de los pedidos.</p>
            </div>
         </div>
         <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="1.4s">
            <img class="h-12 w-auto mb-4 md:h-16 md:w-auto md:mb-2 lg:h-24 lg:mb-8"
               src="<?= site_url('/assets/img/ico_vehiculos.png')?>" alt="">
            <div>
               <h4
                  class="font-bold leading-none text-pink-500 text-center mb-2 uppercase font-medium text-base md:text-lg md:mb-2 lg:text-2xl">
                  + de 500 vehículos</h4>
               <p class="leading-tight font-body text-indigo-600 text-center text-xs md:text-base xl:text-lg xl:mt-4">
                  para la distribución con alcance nacional.</p>
            </div>
         </div>

      </div>
      </section>

      <!-- TABS -->
      <section class="flex flex-col items-center md:py-8 lg:flex-row">

         <div class="container lg:mx-auto ">
            <div
               class="bg-indigo-500 lg:hidden  w-80 h-100 bg-white mx-auto left-0 right-0 shadow md:w-10/12 lg:mr-0  lg:mt-0 lg:shadow-md wow fadeInRight"
               data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="0.2s">
               <div class="tabs p-2 md:p-8">

                  <input type="radio" id="tab1" name="tab-control" checked="checked">
                  <input type="radio" id="tab2" name="tab-control">
                  <input type="radio" id="tab3" name="tab-control">
                  <ul class="md:mb-4">
                     <li class="text-indigo-200 text-sm md:text-lg font-bold" title="Warehousing">
                        <label for="tab1" role="button">
                           <span>Warehousing</span></label>
                     </li>
                     <li class="text-indigo-200 text-sm md:text-lg font-bold" title="Distribución">
                        <label for="tab2" role="button">
                           <span>Distribución</span></label>
                     </li>
                     <li class="text-indigo-200 text-sm md:text-lg font-bold" title="Logística">
                        <label for="tab3" role="button">
                           <span>Logística</span></label>
                     </li>

                  </ul>

                  <div class="slider">
                     <div class="indicator"></div>
                  </div>
                  <div class="content mt-6">
                     <article class="flex flex-col justify-center">
                        <p class="text-white text-base leading-tight mb-8">
                           Contamos con 11 centros de distribución de última generación ubicados estratégicamente a lo
                           largo del país. Los mismos cuentan con temperatura controlada, cámaras de frío y poseen un
                           sistema continuo de monitoreo y registro de temperatura online.
                        </p>
                        <p class="text-white text-base leading-tight mb-8">
                           Disponemos de las habilitaciones necesarias para almacenar y realizar acondicionamiento
                           secundario de especialidades medicinales y productos médicos.
                        </p>
                        <p class="text-white text-base leading-tight mb-8">
                           Realizamos gestión de stock por número de lote y fecha de vencimiento, adaptado a los
                           requerimientos de distintos productos y clientes.
                        </p>

                     </article>
                     <article class="flex flex-col justify-center">
                        <p class="text-white text-base leading-tight mb-8">
                           Brindamos distribución multicanal en todo el país. Atendemos el canal retail, Droguerías,
                           Distribuidores, APMs, entre otros. Realizamos más de 16.000 entregas diarias en todas las
                           provincias, gracias a nuestra flota con más de 500 vehículos de diferentes portes.
                        </p>
                        <p class="text-white text-base leading-tight mb-8">
                           Realizamos entregas en 24hs. en AMBA y entre 24 y 96hs. en el interior. Trabajamos tanto
                           carga seca como cadena de frío.
                        </p>
                        <p class="text-white text-base leading-tight mb-8">
                           Todos nuestros vehículos son monitoreados de manera continua para saber su ubicación exacta
                           en tiempo real.
                        </p>

                     </article>
                     <article class="flex flex-col justify-center">
                        <p class="text-white text-base leading-tight mb-4">
                           Realizamos diariamente recepción de mercadería de cientos de proveedores, almacenaje,
                           preparación de pedidos, manejo de lote y fecha de vencimiento entre otros.
                        </p>
                        <p class="text-white text-base leading-tight mb-4">
                           Brindamos servicios de valor agregado como etiquetado, estampillado, picking y packing.
                        </p>
                        <p class="text-white text-base leading-tight mb-4">
                           Contamos con tecnología de radio frecuencia para todas las operaciones dentro del proceso
                           logístico.
                        </p>
                        <p class="text-white text-base leading-tight mb-4">
                           Ofrecemos proyectos “Llave en Mano”, adaptamos nuestros procesos al requerimiento del
                           cliente.
                        </p>

                     </article>

                  </div>

               </div>

            </div>

            <div class="services justify-center align-center">
               <div class="bg-indigo-500 p-4 text-left text-white w-1/3 mx-4 rounded-l-lg">
                  <h3 class="mb-4 text-2xl text-center font-bold">Warehousing</h3>
                  <p class="text-white text-base leading-tight mb-8">
                     Contamos con 11 centros de distribución de última generación ubicados estratégicamente a lo largo
                     del país. Los mismos cuentan con temperatura controlada, cámaras de frío y poseen un sistema
                     continuo de monitoreo y registro de temperatura online.
                  </p>
                  <p class="text-white text-base leading-tight mb-8">
                     Disponemos de las habilitaciones necesarias para almacenar y realizar acondicionamiento secundario
                     de especialidades medicinales y productos médicos.
                  </p>
                  <p class="text-white text-base leading-tight mb-8">
                     Realizamos gestión de stock por número de lote y fecha de vencimiento, adaptado a los
                     requerimientos de distintos productos y clientes.
                  </p>
               </div>
               <div class="bg-indigo-500 p-4 text-left text-white w-1/3 mx-4">
                  <h3 class="mb-4 text-2xl text-center font-bold">Distribución</h3>
                  <p class="text-white text-base leading-tight mb-8">
                     Brindamos distribución multicanal en todo el país. Atendemos el canal retail, Droguerías,
                     Distribuidores, APMs, entre otros. Realizamos más de 16.000 entregas diarias en todas las
                     provincias, gracias a nuestra flota con más de 500 vehículos de diferentes portes.
                  </p>
                  <p class="text-white text-base leading-tight mb-8">
                     Realizamos entregas en 24hs. en AMBA y entre 24 y 96hs. en el interior. Trabajamos tanto carga seca
                     como cadena de frío.
                  </p>
                  <p class="text-white text-base leading-tight mb-8">
                     Todos nuestros vehículos son monitoreados de manera continua para saber su ubicación exacta en
                     tiempo real.
                  </p>
               </div>
               <div class="bg-indigo-500 p-4 text-left text-white w-1/3 mx-4 rounded-r-lg">
                  <h3 class="mb-4 text-2xl text-center font-bold">Logística</h3>
                  <p class="text-white text-base leading-tight mb-4">
                     Realizamos diariamente recepción de mercadería de cientos de proveedores, almacenaje, preparación
                     de pedidos, manejo de lote y fecha de vencimiento entre otros.
                  </p>
                  <p class="text-white text-base leading-tight mb-4">
                     Brindamos servicios de valor agregado como etiquetado, estampillado, picking y packing.
                  </p>
                  <p class="text-white text-base leading-tight mb-4">
                     Contamos con tecnología de radio frecuencia para todas las operaciones dentro del proceso
                     logístico.
                  </p>
                  <p class="text-white text-base leading-tight mb-4">
                     Ofrecemos proyectos “Llave en Mano”, adaptamos nuestros procesos al requerimiento del cliente.
                  </p>

               </div>
            </div>
            <div class="mx-auto text-center my-4 lg:mt-8 ">
               <a href="soluciones.html" class="button lg:text-3xl">Conocer más</a>

            </div>

         </div>

      </section>

      <div class="container text-center">
         <img src="<?= site_url('./assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
      </div>

      <!-- COBERTURA -->
      <section class="bg-white mb-0">
         <div class="container flex flex-col justify-center items-center md:flex-row-reverse lg:justify-end">
            <div class="textos flex flex-col justify-center items-center md:w-2/3 lg:w-1/2 lg:items-start">
               <h3 class="text-pink-500 font-bold text-center text-2xl mb-3 lg:text-left lg:text-4xl">Cobertura nacional
               </h3>
               <p class="text-indigo-500 text-base text-center mb-3 md:max-w-xs md:text-left lg:max-w-md lg:text-xl ">
                  Contamos con más de 60.000 m2 de depósitos en Centros de Distribución propios, estratégicamente
                  ubicados, lo que asegura una Cobertura Nacional.
               </p>
               <p
                  class="text-indigo-500 text-base text-center mb-3 md:max-w-xs md:pb-6 md:text-left lg:max-w-md lg:text-xl ">
                  Sinergizados en nuestra plataforma de distribución nacional y experiencia, brindamos un servicio de
                  excelencia a precios competitivos.
               </p>
            </div>
            <div class="md:w-1/3  md:text-right lg:w-1/2 lg:text-center">
               <img class="h-96 lg:h-128 my-6 inline-block" data-wow-offset="50" data-wow-duration="0.8s"
                  data-wow-delay="0.2s" src="<?= site_url('/assets/img/mapa.png')?>" alt="">
            </div>

         </div>

      </section>

      <!-- MARCAS -->
      <div class="bg-white my-0 lg:my-8 lg:mx-2">
         <h3 class="text-indigo-500 font-bold text-center text-2xl mb-3 lg:text-4xl">Principales clientes</h3>
         <div id="marcas" class="lg:inlin-egr lg:grid-cols-5 lg:gap-2 lg:max-w-5xl lg:mx-auto">
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_lafarmaco.png')?>" alt="logo la farmaco"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_nestle.png')?>" alt="logo nestle"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_revlon.png')?>" alt="logo revlon"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_tenacta.png')?>" alt="logo tenacta"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_colgate.png')?>" alt="logo colgate"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_kimberlyclark.png')?>" alt="logo kimberly clark"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_philips.png')?>" alt="logo philips"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_richet.png')?>" alt="logo richet"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_saenz.png')?>" alt="logo saenz"></div>
            <div
               class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
               <img src="<?= site_url('/assets/img/marcas_scienza.png')?>" alt="logo scienza"></div>
         </div>
         <div class="pb-6 lg:hidden">
            <ul id="siema_nav" class="flex justify-center items-center mt-4 md:justify-end md:mr-32">
               <li class="bg-white p-2 mx-2 text-indigo-600 hover:bg-indigo-200 hover:cursor-pointer prev">
                  <svg class="fill-current" width="8" height="13" viewbox="0 0 8 13" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path d="M2.828 6.364L7.778 11.314L6.364 12.728L0 6.364L6.364 0L7.778 1.414L2.828 6.364Z" />
                  </svg>
               </li>
               <li class="bg-white p-2 mx-2 text-indigo-600 hover:bg-indigo-200 hover:cursor-pointer next">
                  <svg class="fill-current" width="8" height="13" viewbox="0 0 8 13" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path d="M4.95 6.364L0 1.414L1.414 0L7.778 6.364L1.414 12.728L0 11.314L4.95 6.364Z" />
                  </svg>
               </li>

            </ul>
         </div>
      </div>

   </main>


   <?php include APPPATH . "views/shared/footer.php" ?>
   <?php include APPPATH . "views/shared/scripts.php" ?>

    <script>
        const marcas = new Siema({
            selector: '#marcas',
            duration: 200,
            easing: 'ease-out',
            perPage: {
                0: 3,
                768: 4,
                1024: 6
            },
            startIndex: 0,
            draggable: true,
            multipleDrag: true,
            threshold: 20,
            loop: true,
            rtl: false
        });
        
        document
            .querySelector('#siema_nav > .prev')
            .addEventListener('click', () => marcas.prev());
        document
            .querySelector('#siema_nav > .next')
            .addEventListener('click', () => marcas.next());
        setInterval(() => marcas.next(), 2000)
        if(window.screen.width >= 1024) {
            marcas.destroy(true)
        }
    </script>


</body>

</html>