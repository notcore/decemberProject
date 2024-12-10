<x-html>
    <section class="flex justify-center items-center min-h-screen">
        <div class="grid border shadow-sm place-items-center place-content-center max-w-[600px] p-4 rounded-xl grid-cols-1">
            <img src="{{ asset('DecemberStyle/diRumah.png') }}" alt="">
            <h1 class="text-2xl text-center">email sudah verifikasi dikirim ke 
                <span class="text-green-600">{{ auth()->user()->email }}</span>
            </h1>
            <hr>
            <p  class="text-slate-400">email verifikasi belum terkirim?</p>
            <form class="grid-cols-1 grid w-[90%] m-3 mx-2" action="{{ route('verification.send') }}" method="post">
                @csrf
                <button class="text-white h-12 rounded-xl py-2 bg-decemberStyle">kirim ulang</button>
            </form>
        </div>
    </section>
</x-html>