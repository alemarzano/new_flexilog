<header>
    <div class="bg-white shadow-lg lg:shadow-none fixed w-screen z-10 md:w-full md:relative left-0 right-0 mx-auto lg:py-8">
        <div class="container flex lg:flex-col justify-between items-center px-4 py-3 lg:max-w-5xl">
            <div>
                <a href="<?= site_url() ?>"><img class="h-4 md:h-8 lg:h-16" src="<?= site_url('/assets/img/logo.svg')?>" alt=""></a>
            </div>
            <ul class="lg:mt-4">
                <li>
                    <a href="<?= site_url(array("portal", "Nosotros"))?>" class="nav-link <?php if($this->uri->segment(1)=="Nosotros"){echo "active";}?>">Nosotros</a>
                </li>
                <li>
                    <a href="<?= site_url(array("portal", "Soluciones"))?>" class="nav-link <?php if($this->uri->segment(1)=="Soluciones"){echo "active";}?>">Soluciones</a>
                </li>

                <li>
                    <a href="<?= site_url(array("portal", "Contacto"))?>" class="nav-link <?php if($this->uri->segment(1)=="Contacto"){echo "active";}?>">Contacto</a>
                </li>
                <li><a class="bg-pink-500 text-white py-2 px-8 rounded-lg font-medium hover:bg-pink-400 " href="#">Ingresá</a></li>
            </ul>
            <div class="lg:hidden">
                <button id="ham" type="button" class="block text-indigo-500 hover:text-indigo-200 focus:text-pink-400">
                    <svg class="h-6 w-6 fill-current" viewbox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H20V2.25H0V0ZM0 7.875H20V10.125H0V7.875ZM0 15.75H20V18H0V15.75Z" fill="#233B96"/>
                    </svg>

                </button>
            </div>
        </div>

    </div>

    <nav class="nav-drill z-20 lg:hidden">
        <a href="<?= site_url(array("portal", "Nosotros"))?>" class="nav-link <?php if($this->uri->segment(1)=="Nosotros"){echo "active";}?>">Nosotros</a>
        <a href="<?= site_url(array("portal", "Soluciones"))?>" class="nav-link <?php if($this->uri->segment(1)=="Soluciones"){echo "active";}?>">Soluciones</a>
        <a href="<?= site_url(array("portal", "Contacto"))?>" class="nav-link <?php if($this->uri->segment(1)=="Contacto"){echo "active";}?>">Contacto</a>
        <!-- <a class="bg-pink-500 text-white py-2 px-8 rounded-lg font-medium hover:bg-pink-400 ml-2" href="#">Ingresá</a> -->
    </nav>


</header>