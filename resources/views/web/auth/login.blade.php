<x-html>

    <section class="flex justify-center items-center min-h-screen w-[100%]">
        <div class="md:w-4xl m-5 flex">
            <div class="w-[450px] min-h-[520px] shadow-sm relative md:border-2 p-5 rounded-lg">
                <form class="grid grid-cols-1 truncate" action="{{ route('login') }}" method="post">
                    @csrf
                    <h1 class="text-decemberStyle text-4xl font-semibold text-center mb-2 uppercase">sign in</h1>
                    <div class="relative grid grid-cols-1">
                        <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="email">email</label>
                        <input placeholder="example@gmail.com" type="email" name="email" id="email" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" />
                    </div>
                    <div class="relative grid grid-cols-1">
                        <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="password">password</label>
                        <input placeholder="masukkan password" type="password" name="password" id="password" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" />
                    </div>
                    <div class="flex mt-2">
                        <a class="text-decemberStyle hover:underline" href="/forgot-password">lupa password?</a>
                        <input class="ml-auto mr-2" name="remember" id="remember" type="checkbox"><label class="text-decemberStyle" for="remember">ingat saya</label>
                    </div>
                    <button type="submit" class="bg-decemberStyle rounded-xl mt-3 text-white text-2xl h-12 hover:bg-decemberStyle/20 transition">selesai</button>
                    <a href="/register" class="text-decemberStyle hover:underline">belum punya akun?</a>
                </form>
            </div>
            <div class="w-1/2 hidden md:block my-auto">
                <img src="{{ asset('DecemberStyle/DuaorangDuduk.png') }}" alt="">
            </div>   
        </div>
    </section>

</x-html>