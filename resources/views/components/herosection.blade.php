<div class="relative bg-white h-screen text-white overflow-hidden">
  <div class="absolute inset-0">
    {{-- <img src="{{ asset('images/frente-circuito.png') }}" alt="Background Image" class="object-cover object-center w-full h-full" /> --}}

    <video
    autoplay
    loop
    muted
    class="absolute z-10 w-full lg:min-w-full lg:min-h-full max-w-none video-effect blur-sm"
  >
    <source
      src="{{ asset('images/video_introducao.mkv') }}"
      type="video/mp4"
    />
Seu navegador não suporta a reprodução de vídeos  </video>
</div>
  
  <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
    <h1 class="text-5xl font-bold leading-tight mb-4">Conheça o Circuito de Conhecimentos!</h1>
    <p class="text-lg text-gray-300 mb-8">lorem</p>
    <a href="#" class="bg-circuit_green text-white hover:bg-circuit_green py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get Started</a>
  </div>
</div>
