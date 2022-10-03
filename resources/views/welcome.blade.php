<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.4.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="dist/assets/images/favicon.ico" />

        <!-- Css -->
        <link href="dist/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="dist/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="dist/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="dist/assets/css/icons.css" />
        <link rel="stylesheet" href="dist/assets/css/tailwind.css" />

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

        
        <!-- Start Navbar Hearder -->
        <nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
            <div class="container">
                <!-- Logo container-->

                <div class="logo pl-0" style="width: 200px; height: 50px">
                    <a href="index.html">
                        <img src="dist/assets/images/MicrosoftTeams-image (3).png" class="inline-block dark:hidden" alt="" style="width: 100%; height: 100%; object-fit: contain;">
                        <img src="dist/assets/images/MicrosoftTeams-image (1).png" class="hidden dark:inline-block" alt="" style="width: 100%; height: 100%; object-fit: contain;">
                    </a>
                </div>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.html" class="sub-menu-item">Acceuil</a></li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Investir </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Investir </a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Explorer </a></li>
                                <li><a href="widget.html" class="sub-menu-item">Rechercher</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Lever des fonds </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Accueil </a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Créer une annonce </a></li>
                                <li><a href="widget.html" class="sub-menu-item">Outil de recherche </a></li>
                            </ul>
                        </li>

                        <li><a href="" class="nav-item">Plateforme micro-finance </a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Connexion</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Start up </a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Investisseur</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">S'inscrire </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-signup.html" class="sub-menu-item">Start up </a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Investisseur</a></li>
                            </ul>
                        </li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Banner -->
        <section class="relative md:h-screen flex items-center py-24 startup-wrapper overflow-hidden">
            <div class="absolute inset-0" id="overlay"></div>
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="md:col-span-7">
                        <div class="md:mr-6">                                                                                                                                                           
                            <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-2xl mb-5 text-black dark:text-white"> Nous relions les entrepreneurs et investisseurs d’Afrique</h4>
                            <p class="text-slate-400 text-lg text-dark ax-w-xl">Nous réunissons des entreprises à la recherche d'investissements et d'investisseurs qui disposent d'un capital, de contacts et des connaissances nécessaires à leur réussite..</p>
                            <div class="mt-6">
                                <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Commencer ici</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->


        <!-- Card projets -->
        <section class="relative pb-8">        
            <div class="container md:mt-10">
                        <div class="grid grid-cols-1 pb-8 text-center">
                            <h3 class="mb-6 md:text-3xl text-2xl mt-10 md:leading-normal leading-normal font-semibold">À la recherche d'opportunités d'investissement ? </h3>
                            <p class="text-slate-400 max-w-xl mx-auto">Projets coups de cœur.</p>
                        </div><!--end grid-->
                        
                        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2  gap-[30px]">

                            <!--start property content-->
                            <div class="group rounded-md bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-800 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="dist/assets/images/real/property/1.jpg" alt="">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 10%"></div>
                                </div>
                                <div class="p-4">
                                    <a href="nft-detail.html" class="text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">LOUIS XIV</a>
                                    <div class="flex items-center pl-4 justify-between mt-2">
                                        <div>
                                            <i class="mdi mdi-google-maps text-red-600"></i> <span class="text-slate-400"> Espace Mittelland, Suisse</span>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="content ">
                                            <a href="blog-detail.html" class="title h5 text-lg mb-6 font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                                Mit der Marke LOUIS XIV wird eine noble Marke ins Leben gerufen, welche eine Reihe von Produkten wie Getränke, Kleider und Accessoires weltweit vertreibt.
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="content ">
                                            <p class="text-slate-400 mt-3">
                                                • Erste Produkte produziert und verkaufsbereit. <br>
                                                • YouTube Filme sind produziert wie bsp: https://www.youtube.com/watch?v=kUdz
                                                • Website: www.louisxivenergy.ch
                                            </p>
                                        </div>
                                    </div>
        
                                    <ul class="p-2 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">2'000'000CHF</span>
                                            <p class="text-lg font-medium">Cible</p>
                                        </li>
                                        <li>
                                            <span class="text-slate-400">25'000CHF</span>
                                            <p class="text-lg font-medium">Min par investisseur</p>
                                        </li>
                                    </ul>
                                    <div class="flex items-center pl-4 justify-between ">
                                        <div>
                                            <i class="mdi mdi-heart text-red-600"></i> <span class="text-slate-400"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="content p-2">
                                            <div class="mt-8">
                                                <a href="#table" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">En Savoir plus <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <!--end property content-->

                            <!--start property content-->
                            <div class="group rounded-md bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-800 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="dist/assets/images/real/property/1.jpg" alt="">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 10%"></div>
                                </div>
                                <div class="p-4">
                                    <a href="nft-detail.html" class="text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">LOUIS XIV</a>
                                    <div class="flex items-center pl-4 justify-between mt-2">
                                        <div>
                                            <i class="mdi mdi-google-maps text-red-600"></i> <span class="text-slate-400"> Espace Mittelland, Suisse</span>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="content ">
                                            <a href="blog-detail.html" class="title h5 text-lg mb-6 font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                                Mit der Marke LOUIS XIV wird eine noble Marke ins Leben gerufen, welche eine Reihe von Produkten wie Getränke, Kleider und Accessoires weltweit vertreibt.
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="content ">
                                            <p class="text-slate-400 mt-3">
                                                • Erste Produkte produziert und verkaufsbereit. <br>
                                                • YouTube Filme sind produziert wie bsp: https://www.youtube.com/watch?v=kUdz
                                                • Website: www.louisxivenergy.ch
                                            </p>
                                        </div>
                                    </div>
        
                                    <ul class="p-2 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">2'000'000CHF</span>
                                            <p class="text-lg font-medium">Cible</p>
                                        </li>
                                        <li>
                                            <span class="text-slate-400">25'000CHF</span>
                                            <p class="text-lg font-medium">Min par investisseur</p>
                                        </li>
                                    </ul>
                                    <div class="flex items-center pl-4 justify-between ">
                                        <div>
                                            <i class="mdi mdi-heart text-red-600"></i> <span class="text-slate-400"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="content p-2">
                                            <div class="mt-8">
                                                <a href="#table" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">En Savoir plus <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <!--end property content-->

                            <!--start property content-->
                            <div class="group rounded-md bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-800 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="dist/assets/images/real/property/1.jpg" alt="">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 10%"></div>
                                </div>
                                <div class="p-4">
                                    <a href="nft-detail.html" class="text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">LOUIS XIV</a>
                                    <div class="flex items-center pl-4 justify-between mt-2">
                                        <div>
                                            <i class="mdi mdi-google-maps text-red-600"></i> <span class="text-slate-400"> Espace Mittelland, Suisse</span>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="content ">
                                            <a href="blog-detail.html" class="title h5 text-lg mb-6 font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                                Mit der Marke LOUIS XIV wird eine noble Marke ins Leben gerufen, welche eine Reihe von Produkten wie Getränke, Kleider und Accessoires weltweit vertreibt.
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="content ">
                                            <p class="text-slate-400 mt-3">
                                                • Erste Produkte produziert und verkaufsbereit. <br>
                                                • YouTube Filme sind produziert wie bsp: https://www.youtube.com/watch?v=kUdz
                                                • Website: www.louisxivenergy.ch
                                            </p>
                                        </div>
                                    </div>
        
                                    <ul class="p-2 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">2'000'000CHF</span>
                                            <p class="text-lg font-medium">Cible</p>
                                        </li>
                                        <li>
                                            <span class="text-slate-400">25'000CHF</span>
                                            <p class="text-lg font-medium">Min par investisseur</p>
                                        </li>
                                    </ul>
                                    <div class="flex items-center pl-4 justify-between ">
                                        <div>
                                            <i class="mdi mdi-heart text-red-600"></i> <span class="text-slate-400"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="content p-2">
                                            <div class="mt-8">
                                                <a href="#table" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">En Savoir plus <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <!--end property content-->

                        </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Card Contacts-->
        <section class="relative md:py-24 py-16 overflow-hidden">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-2xl md:leading-normal text-2xl leading-normal font-semibold">Nous permettons aux investisseurs et aux entrepreneurs de bâtir des relations durables.</h3>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                    <!-- Start Course -->
                    <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                        <div class="relative overflow-hidden">
                            <img src="dist/assets/images/course/c1.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="">
                            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                        </div>

                        <div class="content p-6 relative">
                            <a href="course-detail.html" class="font-medium block text-indigo-600">Nom & Prenom/Designation</a>
                            <a href="course-detail.html" class="text-lg font-medium block hover:text-indigo-600 duration-500 ease-in-out mt-2">Profession/Domaine</a>
                            <p class="text-slate-400 mt-3 mb-4">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-comment-lines text-lg leading-none mr-2 text-slate-900 dark:text-white"></i>
                                </li>
                                <li class="flex items-center mr-4">
                                    <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">En Savoir plus<i class="uil uil-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Course -->
                    <!-- Start Course -->
                    <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                        <div class="relative overflow-hidden">
                            <img src="dist/assets/images/course/c1.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="">
                            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                        </div>

                        <div class="content p-6 relative">
                            <a href="course-detail.html" class="font-medium block text-indigo-600">Nom & Prenom/Designation</a>
                            <a href="course-detail.html" class="text-lg font-medium block hover:text-indigo-600 duration-500 ease-in-out mt-2">Profession/Domaine</a>
                            <p class="text-slate-400 mt-3 mb-4">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-comment-lines text-lg leading-none mr-2 text-slate-900 dark:text-white"></i>
                                </li>
                                <li class="flex items-center mr-4">
                                    <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">En Savoir plus<i class="uil uil-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Course -->
                    <!-- Start Course -->
                    <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                        <div class="relative overflow-hidden">
                            <img src="dist/assets/images/course/c1.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="">
                            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                        </div>

                        <div class="content p-6 relative">
                            <a href="course-detail.html" class="font-medium block text-indigo-600">Nom & Prenom/Designation</a>
                            <a href="course-detail.html" class="text-lg font-medium block hover:text-indigo-600 duration-500 ease-in-out mt-2">Profession/Domaine</a>
                            <p class="text-slate-400 mt-3 mb-4">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-comment-lines text-lg leading-none mr-2 text-slate-900 dark:text-white"></i>
                                </li>
                                <li class="flex items-center mr-4">
                                    <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">En Savoir plus<i class="uil uil-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Course -->
                
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section -->

        <!-- Galeries Categories -->
        <section class="relative pb-8"  id="portfolio">
            <div class="container">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Ce qui est populaire en ce moment...</h3>
                </div><!--end grid-->
                
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2  gap-[30px]">

                    <div class="group relative block overflow-hidden ">
                        <img class="max-w-lg " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                        <h1 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            Software
                        </h1>
                    </div>
                    <div class="group relative block overflow-hidden ">
                        <img class="max-w-lg " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                        <h1 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            Technologie
                        </h1>
                    </div>
                    <div class="group relative block overflow-hidden ">
                        <img class="max-w-lg " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                        <h1 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            Alimentation et Boissons
                        </h1>
                    </div>
                    <div class="group relative block overflow-hidden ">
                        <img class="max-w-lg " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                        <h1 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            Immobilier
                        </h1>
                    </div>
                    <div class="group relative block overflow-hidden ">
                        <img class="max-w-lg " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                        <h1 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            Medecin et Pharma
                        </h1>
                    </div>
                    <div class="group relative block overflow-hidden ">
                        <img class="max-w-lg " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                        <h1 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            Divertissement
                        </h1>
                    </div>

                </div><!--end grid-->
                
                <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                    <div class="md:col-span-12 text-center">
                        <a href="course-listing.html" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Voir toutes les categories <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start Section-->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
            <div class="container">

                <div class="lg:col-span-8 md:col-span-6">
                    <ul class="list-none text-center mt-8">
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-black dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-blacbg-black-800 transition-all duration-500 ease-in-out">Comment ça marche </a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-black dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-blacbg-black-800 transition-all duration-500 ease-in-out">FAQ Entrepreneurs </a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-black dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-blacbg-black-800 transition-all duration-500 ease-in-out">FAQ Investisseurs </a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-black dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-blacbg-black-800 transition-all duration-500 ease-in-out">Nos tarifs </a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-black dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-blacbg-black-800 transition-all duration-500 ease-in-out">Remboursements </a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-black dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-blacbg-black-800 transition-all duration-500 ease-in-out">Actualités  </a></li>
                    </ul>
               </div>

            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid md:grid-cols-3 grid-cols-1 items-center">
                        <div class="md:text-left text-center">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="dist/assets/images/MicrosoftTeams.png" class="mx-auto md:mr-auto md:ml-0" alt="">
                            </a>
                        </div>

                        <div class="text-center mt-6 md:mt-0">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> l'Opportunite - All Rights Reserved. |Design <i class="mdi mdi-heart text-red-600"></i> by <a href="https://cmedialinks.com/" target="_blank" class="text-reset">Cmedialinks</a>.</p>
                        </div>

                        <ul class="list-none md:text-right text-center mt-6 md:mt-0">
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Start Cookie Popup -->
        <div class="cookie-popup fixed max-w-lg bottom-3 right-3 left-3 sm:left-0 sm:right-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-10">
            <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a></p>
            <div class="cookie-popup-actions text-right">
                <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 right-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
            </div>
        </div>
        <!--Note: Cookies Js including in plugins.init.js (path like; dist/assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- End Cookie Popup -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="dist/assets/libs/tobii/js/tobii.min.js"></script>
        <script src="dist/assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="dist/assets/js/easy_background.js"></script>
        <script src="dist/assets/libs/feather-icons/feather.min.js"></script>
        <script src="dist/assets/js/plugins.init.js"></script>
        <script src="dist/assets/js/app.js"></script>
        <script>
            easy_background("#overlay",
                {
                    slide: ["dist/assets/images/startup/MicrosoftTeams-image 2.png", "dist/assets/images/startup/MicrosoftTeams-image 3.png", "dist/assets/images/startup/MicrosoftTeams-image 4.png"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>
        <!-- JAVASCRIPTS -->
    </body>
</html>