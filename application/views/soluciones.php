<!DOCTYPE html>
<html lang="es">

<head>
   <?php include APPPATH . "views/shared/head.php"; ?>
   <title>Soluciones | Flexilog</title>
</head>

<body>
   <?php include APPPATH . "views/shared/navbar.php"; ?>
   <main>
      <!-- top -->
      <section class="pt-24 border-rounded-lg">

         <div class="container relative">
            <div class="w-80 mx-auto md:w-auto xl:w-10/12 ">

               <div class="bg-indigo-500 shadow overflow-y-hidden lg:w-10/12 lg:mx-auto lg:p-4 rounded-lg">
                  <ul class="px-3  py-3 flex flex-col md:p-6">
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl lg:left-auto">
                        Recepción de productos a granel o palletizados.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Desconsolidación de contenedores.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Almacenamiento de productos a temperatura ambiente, con temperatura controlada y refrigerados.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Preparación de pedidos.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Distribución multicanal a nivel nacional.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Logística inversa.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Operaciones in-house.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Tracking y visibilidad de pedidos.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        In-bound: retiro de mercadería desde puertos, zonas franca y puntos solicitados.
                     </li>
                     <li class="list-disc list-inside text-white mx-1 my-2 lg:text-xl">
                        Otros servicios: acondicionamiento secundario, picking, packing, etiquetado, estampillado
                        fiscal, rearmado de cajas.
                     </li>

                  </ul>
               </div>
            </div>

         </div>
         <div class="container text-center py-8 lg:py-16">
            <img src="<?= site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
         </div>

         <div class="container h-64 w-auto flex items-center bg-center bg-cover bg-no-repeat lg:rounded-lg lg:h-88"
            style="background-image: url('<?= site_url('/assets/img/banner_nosotros_02.jpg')?>');">
            <ul class="mx-auto pt-4 md:flex md:flex-row md:justify-around lg:pt-10">

               <li class="flex flex-row-reverse md:flex-col items-center justify-end my-6 md:mx-4 wow fadeInUp"
                  data-wow-offset="50" data-wow-duration="0.6s" data-wow-delay="0">
                  <div class="text-white lg:mx-2 flex md:flex-col">
                     <h4
                        class="text-center font-bold text-2xl leading-none lg:text-4xl lg:mb-2 mr-4 md:mr-0 md:leading-normal md:text-4xl">
                        1.300</h4>
                     <h6 class="text-center text-base font-normal  lg:text-xl">Colaboradores</h6>
                  </div>
                  <img class="mr-4 w-4 md:mr-0 md:w-12 md:mt-8" src="<?= site_url('/assets/img/arrow_up.png')?>" alt="">
               </li>
               <li class="flex flex-row-reverse md:flex-col items-center justify-end my-6 md:mx-4 wow fadeInUp"
                  data-wow-offset="50" data-wow-duration="0.6s" data-wow-delay="0.3s">
                  <div class="text-white lg:mx-2 flex md:flex-col">
                     <h4
                        class="text-center font-bold text-2xl lg:text-4xl lg:mb-2 mr-4 md:mr-0 md:leading-normal md:text-4xl">
                        35.000.000</h4>
                     <h6 class="text-center text-base font-normal lg:text-xl">KM/Año recorridos</h6>
                  </div>
                  <img class="mr-4 w-4 md:mr-0 md:w-12 md:mt-8" src="<?= site_url('/assets/img/arrow_up.png')?>" alt="">
               </li>
               <li class="flex flex-row-reverse md:flex-col items-center justify-end my-6 md:mx-4 wow fadeInUp"
                  data-wow-offset="50" data-wow-duration="0.6s" data-wow-delay="0.63s">
                  <div class="text-white lg:mx-2 flex md:flex-col">
                     <h4
                        class="text-center font-bold text-2xl leading-none lg:text-4xl lg:mb-2 mr-4 md:mr-0 md:leading-normal md:text-4xl">
                        16.000</h4>
                     <h6 class="text-center text-base font-normal  lg:text-xl">Entregas Diarias</h6>
                  </div>
                  <img class="mr-4 w-4 md:mr-0 md:w-12 md:mt-8" src="<?= site_url('/assets/img/arrow_up.png')?>" alt="">
               </li>

            </ul>

         </div>
      </section>

      <section class="lg:py-16 lg:flex-row-reverse">
         <div class="container">
            <h4 class="font-bold text-center text-pink-500 text-3xl md:text-5xl mb-4">Tecnología</h4>
            <p
               class="leading-tight font-medium text-indigo-500 text-center text-lg md:text-base lg:text-lg lg:mb-16 max-w-screen-md lg:mx-auto lg:max-w-5xl">
               Somos líderes en tecnología aplicada gracias a la inversión permanente. Tenemos know-how en operaciones y
               gestión de nuevos proyectos. Logramos alianzas estratégicas con proveedores nacionales e internacionales
               para brindar eficiencia y performance con alto nivel de servicio.</p>
            <div id="marcas" class="lg:inlin-egr lg:grid-cols-5 lg:gap-2 lg:max-w-5xl lg:mx-auto">
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_00.png')?>" alt="logo la farmaco"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_01.png')?>" alt="logo nestle"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_02.png')?>" alt="logo revlon"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_03.png')?>" alt="logo tenacta"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_04.png')?>" alt="logo colgate"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_05.png')?>" alt="logo kimberly clark"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_06.png')?>" alt="logo philips"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_07.png')?>" alt="logo richet"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_08.png')?>" alt="logo saenz"></div>
               <div
                  class="flex items-center lg:h-48 justify-center lg:border-1 border-indigo-500 rounded-lg lg:p-4 lg:m-1">
                  <img src="<?= site_url('/assets/img/tecno_09.png')?>" alt="logo scienza"></div>
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

      </section>

   </main>


   <?php include APPPATH . "views/shared/footer.php"; ?>

   <?php include APPPATH . "views/shared/scripts.php" ?>


</body>

</html>