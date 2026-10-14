<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi Bnsp</title>
    @vite(['resources/css/app.css'])
 <style>
    .slide {display: none;}
    .slide-active {display: flex;}
 </style>
</head>
<body class="antialiased-bg[#FFFBF7] overflow-x-hidden">
     <div  id="slide1" class="slide slide-active min-h-screen flex flex-col md:flex-row ">
       <div class="w-full md:w-[45%] flex flex-col justify-center px-8 sm:px-16 lg:px-24 py-12 bg-[#FFFBF7] ">
        <div class="max-w-md">
            <h1 class="text-4xl lg:text-5xl font-serif font-black text-gray-900 tracking-wide uppercase mb-8">
                Badan Nasional Sertifikasi Profesi
            </h1>
            <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-16 font-medium">
                Selamat datang di Platform sertifikasi kompetensi kerja BNSP yang di akui dalam dunia industri nasional maupun global
            </p>
            <div class="w-full h-1.5 bg-gray-200 rounded-full mb-6 relative overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-[50%] bg-[#790D16] rounded-full">
                </div>
            </div>

            <button onclick="navigasislide(2)" class="w-full text-center py-4 text-base font-bold text-white bg-[#790D16] hover:bg-[#5a0a10] rounded-lg shadow-md transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-red-200">
                Next
            </button>
        </div>
       </div>

       <!-- form kanan  -->
       <div class="w-full md:-[55%] bg-[#790D16] relative flex items-center justify-center p-8 min-h-[250px] md:min-h-screen">
            <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-red-950/20 pointer-events-none"></div>
            <div class="absolute top-12 right-12 bg-white text-gray-800 text-xs lg:text-sm font-semibold px-6 py-2.5 rounded-full shadow-sm">
                Standarisasi BNSP
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-sm lg:max-w-md w-full border-gray-100 transform -rotate-1 transition-transform duration-300 hover:rotate-0">
                <div class="border-2 border-red-800 rounded-xl p-6 flex flex-col relative min-h-[220px]">
                    <span class="text -[10px] lg:text-xs font-bold text-red-700 tracking-widest uppercase mb-4 block">Sertifikasi Kompetensi</span>
                    <h2 class="text-2xl lg:text-3xl font-serif font-bold text-gray-900 mb-1">Peserta BNSP 001</h2>
                    <p class="text-xs lg:text-sm text-gray-500 font-medium">Junior Web Dev</p>

                    <div class="absolute bottom-4 right-4 bg-[#790D16] text-white p-3 rounded-full shadow-md flex items-center justify-center">
                        <svg xlmns="http://w3.org" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>                   
                </div>
                
            </div>
            <div class="absolute bottom-16 left-12 bg-black/30 backdrop-blur-sm text-white text-xs lg:text-sm px-5 py-2.5 rounded-full">Asesor Berkompeten Serta Bermutu Global</div>
       </div>
     </div>

     <!-- Slide 2 -->
        <div id="slide2" class="slide min-h-screen flex flex-col md:flex-row">
            <div class="w-full md:w-[45%] flex flex-col justify-between px-8 sm:px-16 lg:px-24 py-12 bg-[#FFFBF7]">
                <div class="max-w-md w-full">
                <h1 class="text-4xl lg:text-5xl font-serif font-black text-gray-900 tracking-tight leading-tight mb-16">
                    Mulai Sertifikasi Sedari Awal
                </h1>

                <p class="text-gray-500 text-sm lg:text-base leading-relaxed mb-12 font-medium">
                    Registrasi dan daftarkan diri anda dalam program sertifikasi bnsp untuk membuktikan kemampuan anda yang berstandar Global dan industri
                </p>

                <div class="grid grid-cols-4 gap-2 mb-8">
                    <div class="h-1 bg-[#790D16] rounded-full"></div>
                    <div class="h-1 bg-[#790D16] rounded-full"></div>
                </div>
                
                <div class="flex gap-4 items-center mb-6">
                    <button onclick="navigasislide(1)" class="w-1/3 text-center py-3.5 text-sm font-bold text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 rounded-xl shadow-sm transition-colors cursor-pointer">
                        Kembali
                    </button>
                    <a href="/yes/register" class="w-2/3 text-center py-3.5 text-sm font-bold text-white bg-[#790D16] hover:bg-[#5a0a10] rounded-xl shadow-md transition-colors no-underline block">
                        Daftar Bnsp
                    </a>
                </div>
                

                <p class="text-sm text-gray-600 font-medium">
                    Sudah memiliki akun bnsp? <a href="/yes/login" class="text-[#790D16] font-bold hover:underline">Masuk</a>
                </p>
            </div>
            </div>

        <!-- slide 2 kanan -->
        <div class="w-full md:w-[55%] bg-[#790D16] relative flex flex-col items-center justify-center p-8 min-h-[350px] md:min-h-screen">
            <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-red-950/15 pointer-events-none"></div>
            <div class="flex flex-col items-center gap-8 relative z-10">
                <div class="w-44 h-44 bg-white rounded-full flex items-center justify-center shadow-2xl transform transition-transform duration-300 hover:scale-105">
                    <svg class="h-20 w-20 text-[#790D16]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="text-white text-lg font-semibold tracking-wide text-center">Anda Sudah bersedia Untuk mendaftar</h2>
            </div>
        </div>
     </div>
     
  </div>

  <script>
    function navigasislide(slideNum){
        document.getElementById('slide1').style.display = slideNum === 1 ? 'flex': 'none';
        document.getElementById('slide2').style.display = slideNum === 2 ? 'flex': 'none';
        window.scrollTo({top: 0, behavior: 'smooth'})
    }
  </script>
</body>
</html>