@extends('Layout.Landing')
@section('content')
<style>
  #overlay {
  
  background-color: rgba(0,0,0,0.5);
  background-size:cover;

}
</style>
<section>

<div class="relative isolate px-6 lg:px-8 bg-cover h-screen" style="background-image: url(image_1.png); background-size: cover;background-repeat: no-repeat;" >
  <div class="h-screen bg-cover -mx-8"id="overlay">
    <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-40">
      <div class="text-center">
        <h1 class="font-bold tracking-tight sm:text-6xl style" style="font-size:90px ;color:#f4f4f4">Solusi Penyaluran Bibit <font color="#39A413">Horikultura</font> Kabupaten Jember</h1>
        <p class="mt-6 text-lg leading-8" style="color:#f4f4f4">Lakukan pengajuan subsidi bibit tanpa harus datang ke dinas !</p>
      </div>
      <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="flex justify-center items-center text-sm font-semibold leading-6 text-gray-900" style="font-size:20px; width: 176px; height:48px;background-color:#transparent; color:#f4f4f4;border-radius:8px; border :1px solid #f4f4f4">Learn more</a>
        </div>
    </div>
  </div>
    <!-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#d9ed92] to-[#34a0a4] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div> -->
</div>

<!-- <div class="flex" style="height: 600px; background-color: #204E51 ">
  <div class="flex mx-auto max-w-7xl px-6 lg:px-8 text-center mt-6">
    <h2 class="flex text-3xl font-semibold text-white sm:text-4xl">Berita Terkini</h2>
  </div>
</div> -->
</section>
@endsection
