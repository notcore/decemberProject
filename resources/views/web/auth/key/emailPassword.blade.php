<x-html>
    <section class="flex justify-center items-center min-h-screen">
        <div class="grid border relative shadow-sm place-items-center place-content-center max-w-[600px] p-4 rounded-xl grid-cols-1">
            <img src="{{ asset('DecemberStyle/diRumah.png') }}" alt="">
            <h1 class="text-2xl text-center">Lupa Password?
            </h1>
            <hr>
            <p  class="text-slate-400">masukkan alamat email untuk mengirim kode verifikasi</p>
            <form class="grid-cols-1 grid w-[98%] gap-3 m-3 mx-2" action="{{ route('password.email') }}" method="post">
                @csrf
                @if (session('status'))
                <h1 class="text-2xl font-semibold text-center bg-green-200 py-6 rounded-xl">email telah dikirim,cek sekarang!</h1>
                @else
                    <div class="relative grid grid-cols-1">
                    <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="email">email</label>
                    <input placeholder="example@email.com" type="email" name="email" id="email" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" />
                </div>
                <button type="submit" class="text-white h-12 rounded-xl py-2 bg-decemberStyle">kirim</button>
                @endif
               
            </form>
        </div>
    </section>
</x-html>