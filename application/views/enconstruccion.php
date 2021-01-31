<!DOCTYPE html>
<html lang="es">
    <head>
        <title>En Construcción | Flexilog</title>
        <?php require APPPATH . "views/shared/head.php"; ?>
    </head>

    <body>

        <?php require APPPATH . "views/shared/navbar.php"; ?>

        <main>

            <section class="pt-0 h-100">
                <div class="w-screen ">
                    <div class="flex flex-col-reverse container pt-20 px-4 lg:mx-auto lg:max-w-5xl lg:pt-10 md:flex md:flex-col lg:flex-row lg:h-screen items-center justify-center">
                        <div class=" lg:w-5/12">
                            <h2 class="encabezados lg:pt-16 text-left"><span class="font-light">En</span> Construccion
                            </h2>
                            <p class="text-left lg:-mt-8 mb-4 text-indigo-300">Te pedimos disculpas por el retraso. Como toda construcción, está llevando tiempo. Pero tené paciencia que pronto estaremos con vos.</p>
                            <a href="<?= site_url() ?>" class="button" onclick="goBack()">Volver</a>
                        </div>

                        <img src="/assets/img/underconstruction.png" alt="">
                    </div>
                </div>

            </section>

        </main>


        <?php $this->load->view("shared/footer") ?>

        <!-- Libraries -->
        <script src="/assets/js/siema.min.js" type=""></script>
        <script src="/assets/js/index.js" type=""></script>
        <script src="/assets/js/wow.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="/assets/js/events.js"></script>


    </body>
</html>