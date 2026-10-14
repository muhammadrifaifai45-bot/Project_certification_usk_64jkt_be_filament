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
            <div class="w-full h-1.5 bg-gray-200 rounded-full-mb-6 relative overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-[50%] bg-[#790D16] rounded-full">
                </div>
            </div>

            <button onclick="test()" class="w-full text-center py-4 text-base font-bold text-white bg-[#790D16] hover:bg-[#5a0a10] rounded-lg shadow-md transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-red-200">
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
                    <span class="text -[10px] lg:text-xs"></span>
                </div>
            </div>
       </div>
     </div>
</body>
</html>