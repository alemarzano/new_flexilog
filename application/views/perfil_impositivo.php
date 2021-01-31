<?php
/**
 * @var array $listCategorias
 * @var Categoria $unaCategoria
 * @var Archivo $unArchivo
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <?php include APPPATH . "views/shared/head.php"; ?>
   <title>Perfil Impositivo | Flexilog</title>
</head>

<body ng-app="PerfilesApp">

   <?php include APPPATH . "views/shared/navbar.php" ?>
   <!--script src="<?= site_url('assets/js/angular.js') ?>"></script>
        <script src="<?= site_url('assets/js/perfilesApp.js') ?>"></script-->
   <main>

      <section class="mt-0 pt-0">

         <?php foreach($listCategorias as $unaCategoria): ?>
         <div class="container lg:max-w-5xl lg:mx-auto py-8 md:pb-16">
            <!-- TITULO DE LA SECCIÓN -->
            <h4 class="font-bold text-center text-pink-500 text-3xl md:text-5xl mb-4">Perfil Impositivo</h4>
            <p data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s"
               class="text-xl text-indigo-600 tracking-wide mb-8 md:text-3xl text-center">
               <?= $unaCategoria->nombre ?>
            </p>
            <!-- TITULO DE LA SECCIÓN -->

            <!-- SECCION DE ARCHIVOS -->
            <div class="flex justify-start px-1 flex-wrap">
               <!-- ITEM QUE SE REPITE -->
               <?php foreach($unaCategoria->listArchivos as $unArchivo): ?>
               <div class="wow fadeInDown w-full md:w-1/2 lg:w-1/3 p-2" data-wow-offset="50" data-wow-duration="0.8s"
                  data-wow-delay="0.5s">
                  <a class="button perfilImpositivo" download
                     href="<?= site_url("portal/get-file-impositivo/" . $unArchivo->idArchivo) ?>">
                     <div class="perfilImpositivo__texto">
                        <h4>
                           <?= $unArchivo->descripcion ?>
                        </h4>
                        <p >
                           <span>Última actualización:</span>
                           <?= empty($unArchivo->ultimaFechaModificacion) ? DateTime::createFromFormat("Y-m-d H:i:s", $unArchivo->fechaCarga)->format("d/m/Y") : DateTime::createFromFormat("Y-m-d H:i:s", $unArchivo->ultimaFechaModificacion)->format("d/m/Y") ?>
                        </p>
                     </div>
                     <div class="perfilImpositivo__img">
                        <img class="h-16 mx-auto" src="<?= site_url('assets/img/ico_pdf.svg') ?>" alt="">
                     </div>
                  </a>
               </div>
               <?php endforeach; ?>
               <!-- / ITEM QUE SE REPITE -->

            </div>
            <!-- / SECCION DE ARCHIVOS -->
            <div class="text-center py-8">
               <img src="<?= site_url('/assets/img/guarda.svg')?>" class="inline-block h-12 w-auto lg:h-16" alt="">
            </div>

         </div>
         <?php endforeach; ?>

      </section>


   </main>


   <?php include APPPATH . "views/shared/footer.php" ?>
   <?php include APPPATH . "views/shared/scripts.php" ?>

   
</body>

</html>