<?php
/**
 * @var bool $aplico
 * @var bool $correcto
 * @var string $titulo
 * @var string $mensaje
 *
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <?php include APPPATH . "views/shared/head.php"; ?>
   <title>Trabajá con Nosotros | Flexilog</title>

</head>

<body>
   <?php include APPPATH . "views/shared/navbar.php" ?>
   <main>

      <section class="pt-0">

         <div class="container lg:max-w-5xl lg:mx-auto">
            <?php if ($aplico): ?>
            <div class="mb-6 lg:flex lg:mb-12 lg:flex-row">
               <div
                  class="bg-<?= $correcto ? "green" : "red" ?>-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3"
                  role="alert">
                  <p class="font-bold"><?= $titulo ?></p>
                  <p class="text-sm"><?= $mensaje ?></p>
               </div>
            </div>
            <?php endif; ?>
            <p class="text-xl text-indigo-500 tracking-wide mb-8 text-center">
                Dejanos tu Curriculum para futuras oportunidades laborales
            </p>
            <div class="text-center py-8">
               <img src="<?= site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
            </div>
            <form class="form" enctype="multipart/form-data"
               action="<?= site_url("portal/trabajar") ?>" method="post">
               <div class="md:flex justify-between">
                  <div class="mb-4 md:mr-2 md:w-6/12">
                     <label class="form__label" for="Nombre">
                        Nombre
                     </label>
                     <input
                        class="form__input"
                        name="nombre" id="nombre" type="text" placeholder="Nombre">
                  </div>
                  <div class="mb-4 md:ml-2 md:w-6/12">
                     <label class="form__label" for="Apellidos">
                        Apellidos
                     </label>
                     <input
                        class="form__input"
                        name="apellido" id="apellido" type="text" placeholder="Apellidos">
                  </div>
               </div>

               <div class="mb-4 ">
                  <label class="form__label" for="mail">
                     Correo electrónico
                  </label>
                  <input
                     class="form__input"
                     name="mail" id="mail" type="email" placeholder="Ingresá tu correo electrónico">
               </div>
               <div class="mb-4 "></div>

               <div class="mb-4">
                  <label class="form__label" for="consulta">
                     Presentación
                  </label>

                  <textarea
                     class="form__input"
                     name="presentacion" id="consulta" cols="30" rows="7"
                     placeholder="Contanos tus intereses y aspiraciones profesionales"></textarea>
               </div>
               <div class="flex items-center justify-around">
                  <div class="mr-8 w-1/2">
                     <label class="button border-indigo-400 mx-none w-100 rounded-3" for="file_cv">Adjuntar CV</label>
                     <input
                        class="form__input"
                        type="file" id="file_cv" name="archivoCV">
                  </div>

                  <button type="submit" class="w-1/2 bg-pink-500 text-white py-2 px-8 rounded-lg font-medium hover:bg-pink-400" href="#">
                     Enviar
                  </button>
               </div>
            </form>
            <div class="text-center pb-8">
                <img src="<?php site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
            </div>
         </div>

      </section>

   </main>


   <?php include APPPATH . "views/shared/footer.php" ?>
   <?php include APPPATH . "views/shared/scripts.php" ?>


</body>

</html>