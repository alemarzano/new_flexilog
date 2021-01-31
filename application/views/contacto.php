<?php
/**
*  @var bool $contacto
 * @var string $titulo
 * @var string $mensaje
 * @var bool $exitoso
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <?php include APPPATH . "views/shared/head.php"; ?>
   <title>Contacto | Flexilog</title>
</head>

<body>
   <?php include APPPATH . "views/shared/navbar.php"; ?>
   <main>
      <section class="pt-0">


         <div class="container lg:max-w-5xl lg:mx-auto">
            <div class="text-center py-8">
               <img src="<?= site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
            </div>
            <div class="mb-6 lg:mb-12 relative">

               <?php if ($contacto) :?>
               <div
                  class="bg-<?= $exitoso ? "green" : "red" ?>-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mb-4"
                  role="alert">
                  <p class="font-bold"><?= $titulo ?></p>
                  <p class="text-sm"><?= $mensaje ?></p>
               </div>
               <?php endif; ?>

               <form class="form"
                  action="<?= site_url("portal/contacto") ?>" method="post">
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

                  <div class="mb-4">
                     <label class="form__label" for="empresa">
                        ¿De qué empresa nos escribís?
                     </label>
                     <input
                        class="form__input"
                        name="empresa" id="empresa" type="text" placeholder="Nombre de la empresa">
                  </div>
                  <div class="mb-4">
                     <label class="form__label" for="mail">
                        Correo electrónico
                     </label>
                     <input
                        class="form__input"
                        name="email" id="mail" type="email" placeholder="Ingresá tu correo electrónico">
                  </div>
                  <div class="mb-4">
                     <label class="form__label" for="telefono">
                        Teléfono
                     </label>
                     <input
                        class="form__input"
                        name="telefono" id="telefono" type="email" placeholder="Ingresá tu teléfono">
                  </div>
                  <div class="mb-4">
                     <label class="form__label" for="consulta">
                        Tu consulta
                     </label>

                     <textarea
                        class="form__input"
                        name="consulta" id="consulta" cols="30" rows="7" placeholder="Escriba su consulta"></textarea>
                  </div>
                  <div class="flex items-center justify-center">

                     <a class="bg-pink-500 text-white py-2 px-8 rounded-lg font-medium hover:bg-pink-400" href="#" onclick="$('form').submit();">
                        Enviar
                     </a>
                  </div>
               </form>
              <div class="text-center py-8">
               <img src="<?= site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
            </div>

         </div>

      </section>

   </main>


   <?php include APPPATH . "views/shared/footer.php"; ?>
   <?php include APPPATH . "views/shared/scripts.php"; ?>

</body>

</html>