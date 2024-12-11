<x-layout>

    <div id="app"></div>
    <div>
        <form class="grid grid-cols-1 relative" enctype="multipart/form-data" action="{{ route('createPost') }}" method="post">
            @csrf
            <div class="md:flex gap-4">
            <div class="grid grid-cols-1">
                {{-- <label for="thumnail">thumanail</label>
                <input type="file" class="hidden" name="thumnail" id="thumnail"> --}}
                <div class="max-w-sm">
                    <label class="text-3xl font-semibold" for="thumnail">Upload Thumnail</label>
                      <label class="block mt-3">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" name="thumnail" id="thumnail" class="block w-full text-sm text-gray-500 file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-decemberStyle file:text-white hover:file:bg-decemberStyle/20 file:disabled:opacity-50 file:disabled:pointer-events-none">
                      </label>
                  </div>
            </div>
            <div class="relative flex-grow">
                <label class="text-3xl font-semibold" for="categori">Categori</label>
                <div class="relative max-w-[270px] mt-2">
                    <select class="border-2" data-hs-select='{
                        "placeholder": "Select option...",
                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-decemberStyle",
                        "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-decemberStyle \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                      }' name="categori" id="categori">
                      <option value="1">Fantasy</option>
                      <option value="2">Psikolog</option>
                      <option value="3">Horror</option>
                      <option value="4">Sci-life</option>
                    </select>
                  
                    <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                      <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m7 15 5 5 5-5"></path>
                        <path d="m7 9 5-5 5 5"></path>
                      </svg>
                    </div>
                  </div>
            </div>
        </div>
        <div class="my-3">
            <div class="grid w-full md:-mt-1 mt-3 grid-cols-1">
                
                <label class="text-3xl font-semibold" for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="border-2 focus:outline-none h-12 rounded-lg mt-2 pl-5" placeholder="masukkan judul postingan">
            </div>
        </div>
            <div class="grid mt-3 grid-cols-1">
                <label class="text-3xl font-semibold" for="deskripsi">deskripsi</label>
                <textarea type="text" name="deskripsi" id="deskripsi" class="border-2 focus:outline-none min-h-[100px] max-h-[200px] rounded-lg mt-2 pl-2" placeholder="masukkan judul postingan"></textarea>
            </div>
            <button type="submit" class="bg-decemberStyle text-white py-3 text-xl mt-3 rounded-lg md:ml-auto md:w-[400px]">selesai</button>
        </form>
    </div>

</x-layout>