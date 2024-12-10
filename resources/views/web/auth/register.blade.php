<x-html>

    <section class="flex justify-center items-center min-h-screen w-[100%]">
        <div class="md:w-4xl flex">
            <div class="w-[450px] m-5 shadow-sm relative md:border-2 p-5 rounded-lg">
                <form class="grid grid-cols-1 truncate" action="{{ route('register') }}" method="post">
                    @csrf
                    <h1 class="text-decemberStyle text-4xl font-semibold text-center mb-2 uppercase">sign up</h1>
                    <div id="hello"></div>
                    <div class="relative grid grid-cols-1">
                        <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="email">email</label>
                        <input placeholder="example@gmail.com" type="email" name="email" id="email" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" />
                    </div>
                    <div class="relative grid grid-cols-1">
                        <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="password">password</label>
                        <input placeholder="buat password" type="password" name="password" id="password" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" />
                    </div>
                    <div class="relative grid grid-cols-1">
                        <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="password_confirmation">email</label>
                        <input placeholder="example@gmail.com" type="password" name="password_confirmation" id="password_confirmation" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" />
                    </div>
                    <button type="submit" class="bg-decemberStyle rounded-xl mt-3 text-white text-2xl h-12 hover:bg-decemberStyle/20 transition">selesai</button>
                    <a href="/login" class="text-decemberStyle hover:underline">sudah punya akun?</a>
                </form>
            </div>
            <div class="w-1/2 hidden md:block">
                <img class="mt-14" src="{{ asset('DecemberStyle/duaOrangVersiDua.png') }}" alt="">
            </div>   
        </div>
    </section>

</x-html>