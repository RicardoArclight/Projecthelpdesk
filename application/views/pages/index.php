<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISKOMINFOSANTIK KALTENG</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />
      <link href="<?= base_url() ?>/public/css/style.css" rel="stylesheet">
      <link rel="icon" href="<?= base_url() ?>/public/img/Logo_Kementerian_Kominfo.png" type="image/x-icon">
</head>
<body>
  <!-- section navbar -->
    <section class="">
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <div class="flex flex-wrap">
                  <img src="<?= base_url() ?>/public/img/Logo_Kementerian_Kominfo.png" class="h-10 mr-3 self-center" alt="Flowbite Logo">
                  <div>
                    <span class="self-center lg:text-2xl font-semibold whitespace-nowrap dark:text-white">DISKOMINFOSANTIK</span>
                    <h1 class="self-center lg:text-xl font-ligth whitespace-nowrap dark:text-white">Provinsi Kalimantan Tengah</h1>
                  </div>
              </div>
          <div class="flex md:order-2 ">
            <div class="md:flex hidden">
              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-2">Daftar</button>
            </div>
              <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
          </div>
          <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="<?= base_url('index.php') ?>" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Beranda</a>
              </li>
              <li>
                <a href="<?= base_url('tentang.php') ?>" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"  aria-current="page">Tentang</a>
              </li>
              <li>
                <a href=<?= base_url('Pengembang.html') ?>class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
              </li>
              <li>
                <a href="<?= base_url('pengembang') ?>" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pengembang</a>
              </li>
              <li>
                <a href="/pages/faq.html" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
              </li>
              <li>
                <a href="/pages/hubungi_kami.html" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hubungi Kami</a>
              </li>
              <div class="flex md:order-2 mt-2 ">
                <div class="md:hidden sm:flex">
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-1 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-1">Daftar</button>
                </div>
                  
              </div>
            </ul>
          </div>
          </div>
        </nav>
    </section>
    <!-- section navbar -->

    <!-- section hero -->
     <section id="beranda" class="pt-20 bg-[url('<?= base_url() ?>/public/img/bg-baru.png')] bg-cover bg-opacity-90 bg-repeat">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full self-center  px-4 lg:w-1/2 leading-relaxed">
                    <h1 class="text-3xl sm:text-5xl font-bold text-white">Kamu Bingung Mau</h1>
                    <h1 class="text-3xl sm:text-5xl font-bold text-white lg:mt-4">Mengadukan Keluhan Kemana?</h1>
                    <h2 class="text-lg md:text-2xl text-white mb-4 mt-2">Jangan Ambil Pusing ! Sampaikan Keluhanmu Kepada Kami.</h2>
                    <input type="text" placeholder="Type here" class="input input-bordered rounded-full w-full max-w-xs" />
                    <a href="#" class="text-base  font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out sm:mt-4">Cari</a>
                    <h2 class="text-base md:text-md text-white mb-6 mt-5">Belum punya tiket? Ajukan pengaduan anda sekarang</h2>
                    <a href="#" class="text-base  font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Ajukan Pengaduan</a>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="">
                        <img src="<?= base_url() ?>/public/img/hero-img.png" alt="" class="max-w-full mx-auto md:ml-20 mt-10">
                    </div>
                </div>
            </div>

          </div>
          <!-- svg -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L48,288C96,256,192,192,288,144C384,96,480,64,576,85.3C672,107,768,181,864,224C960,267,1056,277,1152,240C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          <!-- svg -->
    </section>
    <!-- section hero -->

    <!-- section about/tentang -->
    <section id="tentang">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full text-center">
             <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-6">Tentang</h1>
            </div>
            <div class="w-full leading-relaxed lg:text-center text-justify md:px-52 mb-5 md:-0">
              <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste odit molestias, placeat quidem magnam rem sequi accusantium natus. Perspiciatis repellat minus sunt atque tempore rerum ullam illum natus possimus rem ratione, eligendi dignissimos, error, cumque quam. At ullam itaque dolore odit adipisci, quam saepe illum? Dicta ducimus vero nulla doloribus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. At quidem deleniti tempora beatae, quaerat ad? Dolores quidem fugiat quo molestiae fugit consequatur dolorem vero. Modi, distinctio nesciunt quam excepturi facere possimus nobis ullam aspernatur consequuntur quidem tempore explicabo neque voluptatum corrupti molestiae beatae necessitatibus nisi recusandae vero perferendis exercitationem enim.</p>
              <div class="flex flex-wrap gap-7 justify-center">
                <div class="card w-80 bg-base-100 shadow-xl mt-5">
                  <figure class="px-10 pt-10">
                    <img src="<?= base_url() ?>/public/img/2.jpg" alt="Shoes" class="rounded-xl" />
                  </figure>
                    <div class="card-body items-center text-center">
                      <h2 class="card-title font-bold">15000</h2>
                      <p>PENGADUAN MASALAH</p>
                  </div>
                  </div>
                <div class="card w-80 bg-base-100 shadow-xl mt-5">
                  <figure class="px-10 pt-10">
                    <img src="<?= base_url() ?>/public/img/1.jpg" alt="Shoes" class="rounded-xl" />
                  </figure>
                    <div class="card-body items-center text-center">
                      <h2 class="card-title font-bold">7000</h2>
                      <p>PENGGUNA</p>
                  </div>
                  </div>
                <div class="card w-80 bg-base-100 shadow-xl mt-5">
                  <figure class="px-10 pt-10">
                    <img src="<?= base_url() ?>/public/img/3.jpg" alt="Shoes" class="rounded-xl" />
                  </figure>
                    <div class="card-body items-center text-center">
                      <h2 class="card-title font-bold">11000</h2>
                      <p>PENYELESAIAN MASALAH</p>
                  </div>
                  </div>
              </div> 
            </div>
        </div>
      </div>
    </section>
    <!-- section about -->

    <!-- section kenapa -->
    <section class="mt-28">
      <div class="container">
        <div class="flex flex-wrap justify-center">
            <div class="lg:w-1/2 w-full">
              <img src="<?= base_url() ?>/public/img/10.png" alt="" class="max-w-full mx-auto">
            </div>
            <div class="lg:w-1/2 w-full">
              <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-6 text-center lg:text-right">Kenapa Harus Mengadukan Keluhan Ke Helpdesk DISKOMINFOSANTIK</h1>
              <p class="w-full leading-relaxed lg:text-right">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt harum eaque error dolores pariatur fuga vel, magni odit itaque tempora excepturi ullam velit animi. Eos, quasi. Illum, aliquam magni. Sequi, obcaecati dolore iusto eligendi sit fugiat amet quod eveniet maxime aliquam. Placeat dolor at minima natus ratione debitis saepe a adipisci labore ea sint dolore alias, doloribus cumque quidem accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magnam asperiores impedit adipisci quibusdam minima distinctio? Iusto, optio illum distinctio, expedita aut quos cum maxime provident nisi minima vel ab similique sit impedit mollitia facere praesentium. Officia, optio atque minus ut, culpa assumenda quo eveniet doloremque odit dolores sapiente veritatis.</p>
              <p class="w-full leading-relaxed lg:text-right mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde voluptatum quos totam quas aspernatur pariatur exercitationem voluptate porro dicta consectetur magni delectus laboriosam, iure expedita velit consequuntur, voluptatibus repudiandae. Nemo, alias necessitatibus! Consectetur porro laboriosam a eius suscipit veritatis reprehenderit id placeat saepe omnis, illum consequuntur voluptas provident hic natus.</p>
            </div>
        </div>
      </div>
    </section>
    <!-- section kenapa -->

    <!-- section sistem keamanan -->
    <section>
      <div class="container">
        <div class="flex flex-wrap justify-center self-center">
          <div class="w-full lg:w-1/2"> 
            <h1 class="lg:mr-10 text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-6 text-center lg:text-left mt-24">Bagaimana Sistem Keamanan Informasi dan Datanya?</h1>
            <p class="w-full leading-relaxed lg:text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt harum eaque error dolores pariatur fuga vel, magni odit itaque tempora excepturi ullam velit animi. Eos, quasi. Illum, aliquam magni. Sequi, obcaecati dolore iusto eligendi sit fugiat amet quod eveniet maxime aliquam. Placeat dolor at minima natus ratione debitis saepe a adipisci labore ea sint dolore alias, doloribus cumque quidem accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magnam asperiores impedit adipisci quibusdam minima distinctio? Iusto, optio illum distinctio, expedita aut quos cum maxime provident nisi minima vel ab similique sit impedit mollitia facere praesentium. Officia, optio atque minus ut, culpa assumenda quo eveniet doloremque odit dolores sapiente veritatis.</p>
              <p class="w-full leading-relaxed lg:text-left mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde voluptatum quos totam quas aspernatur pariatur exercitationem voluptate porro dicta consectetur magni delectus laboriosam, iure expedita velit consequuntur, voluptatibus repudiandae. Nemo, alias necessitatibus! Consectetur porro laboriosam a eius suscipit veritatis reprehenderit id placeat saepe omnis, illum consequuntur voluptas provident hic natus.</p>
          </div>
          <div class="w-full lg:w-1/2">
            <img src="<?= base_url() ?>/public/img/16.png" alt="" class="max-w-full mx-auto lg:py-20">
          </div>
        </div>
      </div>
    </section>
    <!-- section sistem keamanan -->

    <!-- section layanan -->
    <section id="layanan" class="bg-[#eaeaec] py-24">
      <div class="container">
        <div class="flex flex-wrap justify-center">
          <div class="w-full">
            <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-10 text-center ">Layanan</h1>
          </div>
          <div class="flex flex-wrap justify-center mb-24">
            <!-- card -->
              <div class="max-w-sm lg:w-1/2">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="<?= base_url() ?>/public/img/15.png" alt="" class=""/>
                  </a>
                </div>
                <div class="p-5 ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Pengelola Informasi Publik</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="flex justify-center">
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Selengkapnya
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                    </div>
                </div>
  
              </div>
              <!-- card2 -->
              <div class="max-w-sm lg:w-1/2 ml-5">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="<?= base_url() ?>/public/img/11.png" alt="" class=""/>
                  </a>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Komunikasi Publik</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="flex justify-center">
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Selengkapnya
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                    </div>
                </div>
              </div>
              <!-- card2 -->
              <!-- card3 -->
              <div class="max-w-sm lg:w-1/2 ml-5">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="<?= base_url() ?>/public/img/13.png" alt="" class=""/>
                  </a>
                </div>
                <div class="py-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Teknologi Informasi & Komunikasi</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center px-5">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="flex justify-center">
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Selengkapnya
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                    </div>
                </div>
              </div>
              <div class="max-w-sm lg:w-1/2 ml-5 mt-7">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="<?= base_url() ?>/public/img/17.png" alt="" class=""/>
                  </a>
                </div>
                <div class="py-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">E-Government</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center px-5">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="flex justify-center">
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Selengkapnya
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                    </div>
                </div>
              </div>
              <div class="max-w-sm lg:w-1/2 ml-5 mt-7">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="rounded-t-lg" src="<?= base_url() ?>/public/img/17.png" alt="" class=""/>
                  </a>
                </div>
                <div class="py-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Persandian</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center px-5">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="flex justify-center">
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Selengkapnya
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                    </div>
                </div>
              </div>
                 <!-- card3 -->
             <!-- card -->
          </div>
        </div>
        <!-- batas flex -->
        <!-- batas container -->
      </div>
    </section>
    <!-- section layanan -->

    <!-- section cara penggunaan -->
    <section>
      <div class="container py-24">
        <div class="flex flex-wrap self-center">
          <div class="w-full lg:w-1/2">
            <img src="<?= base_url() ?>/public/img/12.png" alt="" class="mx-auto py-24">
          </div>
          <div class="w-full lg:w-1/2">
            <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-8  lg:text-left text-center">Proses Penanganan Keluhan</h1>
            <div class="lg:flex mb-10">
              <div>
                <h2 class="px-4 py-2 bg-[#FFCA1D] w-10 rounded-lg text-lg font-semibold">1</h2>
              </div>
              <div>
                <p class="text-justify lg:px-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magnam repellendus iste id voluptatibus accusantium itaque omnis rerum maxime quam? Nobis, tempore eum? Nostrum quas similique voluptas cumque atque animi incidunt, fugiat molestiae ipsa laudantium at praesentium soluta quod molestias ipsam temporibus ab obcaecati nemo error totam eaque alias modi.</p>
              </div>
              <div>
                <h2 class="px-4 py-2 bg-[#FFCA1D] w-10 rounded-lg text-lg font-semibold">2</h2>
              </div>
              <div>
                <p class="text-justify px-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magnam repellendus iste id voluptatibus accusantium itaque omnis rerum maxime quam? Nobis, tempore eum? Nostrum quas similique voluptas cumque atque animi incidunt, fugiat molestiae ipsa laudantium at praesentium soluta quod molestias ipsam temporibus ab obcaecati nemo error totam eaque alias modi.</p>
              </div>
            </div>
            <div class="lg:flex">
              <div>
                <h2 class="px-4 py-2 bg-[#FFCA1D] w-10 rounded-lg text-lg font-semibold">3</h2>
              </div>
              <div>
                <p class="text-justify lg:px-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magnam repellendus iste id voluptatibus accusantium itaque omnis rerum maxime quam? Nobis, tempore eum? Nostrum quas similique voluptas cumque atque animi incidunt, fugiat molestiae ipsa laudantium at praesentium soluta quod molestias ipsam temporibus ab obcaecati nemo error totam eaque alias modi.</p>
              </div>
              <div>
                <h2 class="px-4 py-2 bg-[#FFCA1D] w-10 rounded-lg text-lg font-semibold">4  </h2>
              </div>
              <div>
                <p class="text-justify px-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magnam repellendus iste id voluptatibus accusantium itaque omnis rerum maxime quam? Nobis, tempore eum? Nostrum quas similique voluptas cumque atque animi incidunt, fugiat molestiae ipsa laudantium at praesentium soluta quod molestias ipsam temporibus ab obcaecati nemo error totam eaque alias modi.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- section cara penggunaan -->


    <!-- section ulasan pengguna -->
    <section class="mb-24">
      <div class="container">
        <div class="flex flex-wrap justify-center">
          <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-10 text-center w-full ">Ulasan Pengguna</h1>
            <div>

              <div class="grid mb-8 border border-gray-200 rounded-lg shadow-lg dark:border-gray-700 md:mb-12 md:grid-cols-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                        <p class="my-4">If you care for your time, I hands down would go with this."</p>
                        
                    <div class="flex items-center justify-center  space-x-1">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>

                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Bonnie Green</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                        <div class="flex items-center justify-center  space-x-1">
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                      </div>                    
                    
                      </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
                        <div class="flex items-center justify-center  space-x-1">
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                      </div>
                    
                      </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                        <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p>
                        <div class="flex items-center justify-center  space-x-1">
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                          <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                          </svg>
                      </div>
                    
                      </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Joseph McFall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                        </div>
                    </figcaption>    
                </figure>
            </div>
            
            </div>
        </div>
      </div>
    </section>
    <!-- section ulasan pengguna -->

    <!-- section tim pengembang -->
       <!-- section layanan -->
       <section id="layanan" class="bg-[#eaeaec] py-24">
        <div class="container">
          <div class="flex flex-wrap justify-center">

          <div class="flex flex-wrap ">
            <div  class="w-full lg:w-1/2 lg:px-20 ">
              <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-8  lg:text-left text-center">Tim Pengembang</h1>
              <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis ut illo aperiam eum aliquam perferendis iusto aut amet? Veritatis ab, explicabo id magnam beatae vitae quo modi iure debitis?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim illum iusto sapiente non ducimus dolorum, aliquam fuga officia voluptas alias ullam repellendus quia officiis blanditiis impedit unde earum incidunt rem vitae voluptatem sit, deserunt voluptates a veritatis. Incidunt eum autem nisi, quod aut dolores id iusto, impedit natus eaque fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sunt nostrum libero? Dicta, cumque culpa? Neque maxime quas, numquam facere, ab cupiditate dolore officia ut facilis voluptatibus nisi. Inventore, ducimus culpa omnis facilis aperiam, quaerat blanditiis facere aspernatur eveniet nisi suscipit. Quam quod non debitis impedit omnis fugit aspernatur hic! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatem corporis asperiores alias harum earum repudiandae quam? Totam dolorum quidem dolores ullam expedita, quae culpa odit autem amet error velit.</p>
            </div>
            <div class="w-full lg:w-1/2 py-10 rounded-full">
                <div id="animation-carousel" class="relative w-full" data-carousel="static">
                  <!-- Carousel wrapper -->
                  <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                      <!-- Item 1 -->
                      <div class="hidden duration-200 ease-linear " data-carousel-item>
                          <img src="<?= base_url() ?>/public/img/ppid.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 2 -->
                      <div class="hidden duration-200 ease-linear" data-carousel-item>
                          <img src="<?= base_url() ?>/public/img/dasboard-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 3 -->
                      <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                          <img src="<?= base_url() ?>/public/img/dasboard.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 4 -->
                      <div class="hidden duration-200 ease-linear" data-carousel-item>
                          <img src="<?= base_url() ?>/public/img/kalteng.go.id.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 5 -->
                      <div class="hidden duration-200 ease-linear" data-carousel-item>
                          <img src="<?= base_url() ?>/public/img/sosmed.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                  </div>
                  <!-- Slider controls -->
                  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                          </svg>
                          <span class="sr-only">Previous</span>
                      </span>
                  </button>
                  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                          <span class="sr-only">Next</span>
                      </span>
                  </button>
                </div>
            </div>
          </div>
        </div>
      </section>
    <!-- section tim pengembang -->


        <!-- section contact us -->
    <section class="py-24 ">
      <div class="container border-sky-100 border rounded-lg px-10 py-5 ">
        <div class="flex flex-wrap justify-center">
          <div class="w-full">
            <h1 class="text-3xl sm:text-4xl font-semibold text-[#FFCA1D] mb-8  text-center">Hubungi Kami</h1>
          </div>
          <div class="w-full lg:w-1/2 px-10 md:border-r self-center">
            <img src="<?= base_url() ?>/public/img/14.png" alt="">
          </div>
          <div class="w-full lg:w-1/2 px-10 self-center">
            <form>
              <div class="relative z-0 w-full mb-6 group">
                  <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat Email</label>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
              </div>

              <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                </div>
              </div>
              <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
                </div>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                <textarea type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
            </div>
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!-- section contact us -->




    <!-- section footer -->
    <section class=" bg-[url('<?= base_url() ?>/public/img/bg-baru.png')] ">

      <footer class=" dark:bg-gray-900 container py-8">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="mb-6 md:mb-0">
                  <a href="https://flowbite.com/" class="flex items-center">
                      <img src="<?= base_url() ?>/public/img/R.png" class="h-16 mr-3" alt="FlowBite Logo" />
                      <img src="<?= base_url() ?>/public/img/Logo_Kementerian_Kominfo.png" class="h-16 mr-3" alt="FlowBite Logo" />
                      <div>
                        <h1 class="self-center lg:text-2xl font-semibold whitespace-nowrap text-white dark:text-white">Dinas Komunikasi Informatika</h1>
                        <h1 class="self-center lg:text-2xl font-semibold whitespace-nowrap text-white dark:text-white">Persandian dan Statistik</h1>
                        <h1 class="self-center lg:text-base font-light whitespace-nowrap text-white dark:text-white">Provinsi Kalimantan Tengah</h1>
                      </div>
                  </a>
                  <div class="mt-4">
                    <h1 class="whitespace-nowrap text-white font-semibold">Alamat Kantor</h1>
                    <h2 class="font-light whitespace-nowrap text-white">JL. Tjilik Riwut Km.3,5 No. 18A, Palangka Raya</h2>
                    <h2 class="font-light whitespace-nowrap text-white">Provinsi Kalimantan Tengah</h2>
                    <h1 class="whitespace-nowrap text-white font-semibold mt-2">Email</h1>
                    <a href="#" class="font-light whitespace-nowrap text-white">diskominfo@kalteng.go.id</a>
                  </div>
              </div>
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div class="te">
                      <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Halaman</h2>
                      <ul class="text-white dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://flowbite.com/" class="hover:underline">Beranda</a>
                          </li>
                          <li  class="mb-4">
                              <a href="https://tailwindcss.com/" class="hover:underline">Tentang</a>
                          </li>
                          <li  class="mb-4">
                              <a href="https://tailwindcss.com/" class="hover:underline">Layanan</a>
                          </li>
                          <li  class="mb-4">
                              <a href="https://tailwindcss.com/" class="hover:underline">Ulasan Pengguna</a>
                          </li>
                          <li  class="mb-4">
                              <a href="https://tailwindcss.com/" class="hover:underline">Tim Pengembang</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Ikuti kami</h2>
                      <ul class="text-white dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Youtube</a>
                          </li>
                          <li class="mb-4">
                              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Instagram</a>
                          </li>
                          <li class="mb-4">
                              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Twitter</a>
                          </li>
                          <li class="mb-4">
                              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Facebook</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Bantuan Pengguna</h2>
                      <ul class="text-white dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Cara Daftar</a>
                          </li>
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Cara Mendapatkan Tiket</a>
                          </li>
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Hubungi Kami</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between sm:flex-wrap">
              <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">DINAS KOMUNIKASI INFORMATIKA PERSANDIAN DAN STATISTIK PROVINSI KALIMANTAN TENGAH</a>. All Rights Reserved.
              </span>
              <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                  <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                      <span class="sr-only">Facebook page</span>
                  </a>
                  <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                        </svg>
                      <span class="sr-only">Discord community</span>
                  </a>
                  <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                      <span class="sr-only">Twitter page</span>
                  </a>
                  <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                      </svg>
                      <span class="sr-only">GitHub account</span>
                  </a>
                  <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                    </svg>
                      <span class="sr-only">Dribbble account</span>
                  </a>
              </div>
          </div>
        </div>
    </footer>
    </section>
    <!-- section footer -->
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdn.tailwindcss.com"></script>
</html>
