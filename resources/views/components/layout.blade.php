<x-html>

   
<!-- Navigation Toggle -->
 <!-- End Navigation Toggle -->
 <!-- Sidebar -->
 <div id="hs-offcanvas-example" class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300" role="dialog" tabindex="-1" aria-label="Sidebar">
   <div class="px-6 -mt-2">
     <a class="flex-none items-center flex font-semibold text-xl text-decemberStyle focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
      <img class="w-[50px] h-[50px]" src="{{ asset('DecemberStyle/logo.png') }}" alt="">
       freedom</a>
   </div>
   <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
     <ul class="space-y-1.5">
       <li>
         <a class="{{ request()->routeIs('home') ? 'text-white bg-decemberStyle hover:bg-decemberStyle/20' : 'text-decemberStyle hover:bg-slate-400/10' }} flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg" href="/home">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="home">
            <path fill="{{ request()->routeIs('home') ? '#ffffff' : '#4846D8' }}" d="M6.64373233,18.7821107 L6.64373233,15.7152449 C6.64371685,14.9380902 7.27567036,14.3067075 8.05843544,14.3018198 L10.9326107,14.3018198 C11.7188748,14.3018198 12.3562677,14.9346318 12.3562677,15.7152449 L12.3562677,15.7152449 L12.3562677,18.7732212 C12.3562498,19.4472781 12.9040221,19.995083 13.5829406,20 L15.5438266,20 C16.4596364,20.0023291 17.3387522,19.6427941 17.9871692,19.0007051 C18.6355861,18.3586161 19,17.4867541 19,16.5775231 L19,7.86584638 C19,7.13138763 18.6720694,6.43471253 18.1046183,5.96350064 L11.4429783,0.674268354 C10.2785132,-0.250877524 8.61537279,-0.22099178 7.48539114,0.745384082 C7.48539114,0.745384082 0.967012253,5.96350064 0.967012253,5.96350064 C0.37274068,6.42082162 0.0175522924,7.11956262 0,7.86584638 L0,16.5686336 C0,18.463707 1.54738155,20 3.45617342,20 L5.37229029,20 C5.69917279,20.0023364 6.01348703,19.8750734 6.24547302,19.6464237 C6.477459,19.417774 6.60792577,19.1066525 6.60791706,18.7821107 L6.64373233,18.7821107 Z" transform="translate(2.5 2)"></path>
          </svg>          
           Home
         </a>
       </li>
       @auth
       <li>
        <form class="grid grid-cols-1" action="{{ route('logout') }}" method="post">
          @csrf
        <button class="{{ request()->routeIs('login') ? 'text-white bg-decemberStyle hover:bg-decemberStyle/20' : 'text-decemberStyle hover:bg-slate-400/10' }} flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg" type="submit">
          <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 6.62219V17.245C22 18.3579 21.2857 19.4708 20.1633 19.8754L15.0612 21.7977C14.7551 21.8988 14.449 22 14.0408 22C13.5306 22 12.9184 21.7977 12.4082 21.4942C12.2041 21.2918 11.898 21.0895 11.7959 20.8871H7.91837C6.38776 20.8871 5.06122 19.6731 5.06122 18.0544V17.0427C5.06122 16.638 5.36735 16.2333 5.87755 16.2333C6.38776 16.2333 6.69388 16.5368 6.69388 17.0427V18.0544C6.69388 18.7626 7.30612 19.2684 7.91837 19.2684H11.2857V4.69997H7.91837C7.20408 4.69997 6.69388 5.20582 6.69388 5.91401V6.9257C6.69388 7.33038 6.38776 7.73506 5.87755 7.73506C5.36735 7.73506 5.06122 7.33038 5.06122 6.9257V5.91401C5.06122 4.39646 6.28572 3.08125 7.91837 3.08125H11.7959C12 2.87891 12.2041 2.67657 12.4082 2.47423C13.2245 1.96838 14.1429 1.86721 15.0612 2.17072L20.1633 4.09295C21.1837 4.39646 22 5.50933 22 6.62219Z" fill="{{ request()->routeIs('logout') ? '#ffffff' : '#4846D8' }}"/>
            <path d="M4.85714 14.8169C4.65306 14.8169 4.44898 14.7158 4.34694 14.6146L2.30612 12.5912C2.20408 12.49 2.20408 12.3889 2.10204 12.3889C2.10204 12.2877 2 12.1865 2 12.0854C2 11.9842 2 11.883 2.10204 11.7819C2.10204 11.6807 2.20408 11.5795 2.30612 11.5795L4.34694 9.55612C4.65306 9.25261 5.16327 9.25261 5.46939 9.55612C5.77551 9.85963 5.77551 10.3655 5.46939 10.669L4.7551 11.3772H8.93878C9.34694 11.3772 9.7551 11.6807 9.7551 12.1865C9.7551 12.6924 9.34694 12.7936 8.93878 12.7936H4.65306L5.36735 13.5017C5.67347 13.8052 5.67347 14.3111 5.36735 14.6146C5.26531 14.7158 5.06122 14.8169 4.85714 14.8169Z" fill="{{ request()->routeIs('logout') ? '#ffffff' : '#4846D8' }}"/>
          </svg>
          logout
        </button>
      </form>
      </li>
       @endauth
       @guest
       <li>
        <a class="{{ request()->routeIs('login') ? 'text-white bg-decemberStyle hover:bg-decemberStyle/20' : 'text-decemberStyle hover:bg-slate-400/10' }} flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg" href="/login">
          <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
          <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.1633 4.09295L15.0612 2.17072C14.1429 1.86721 13.2245 1.96838 12.5102 2.47423C12.2041 2.67657 12 2.87891 11.7959 3.08125H7.91837C6.38776 3.08125 5.06122 4.39646 5.06122 5.91401V6.9257C5.06122 7.33038 5.36735 7.73506 5.87755 7.73506C6.38776 7.73506 6.69388 7.33038 6.69388 6.9257V5.91401C6.69388 5.20582 7.30612 4.69997 7.91837 4.69997H11.2857V19.3696H7.91837C7.20408 19.3696 6.69388 18.7626 6.69388 18.1555V17.1439C6.69388 16.7392 6.38776 16.3345 5.87755 16.3345C5.36735 16.3345 5.06122 16.638 5.06122 17.0427V18.0544C5.06122 19.5719 6.28572 20.8871 7.91837 20.8871H11.7959C12 21.0895 12.2041 21.393 12.4082 21.4942C12.9184 21.7977 13.4286 22 14.0408 22C14.3469 22 14.7551 21.8988 15.0612 21.7977L20.1633 19.8754C21.2857 19.4708 22 18.4591 22 17.245V6.62219C22 5.50933 21.1837 4.39646 20.1633 4.09295Z" fill="{{ request()->routeIs('login') ? '#ffffff' : '#4846D8' }}"/>
          <path d="M6.38776 13.5017C6.08163 13.8052 6.08163 14.3111 6.38776 14.6146C6.4898 14.7158 6.69388 14.8169 6.89796 14.8169C7.10204 14.8169 7.30612 14.7158 7.40816 14.6146L9.44898 12.5912C9.55102 12.49 9.55102 12.3889 9.65306 12.3889C9.65306 12.2877 9.7551 12.1865 9.7551 12.0854C9.7551 11.9842 9.7551 11.883 9.65306 11.7819C9.65306 11.6807 9.55102 11.5795 9.44898 11.5795L7.40816 9.55612C7.10204 9.25261 6.59184 9.25261 6.28571 9.55612C5.97959 9.85963 5.97959 10.3655 6.28571 10.669L7 11.3772H2.81633C2.40816 11.3772 2 11.6807 2 12.1865C2 12.6924 2.30612 12.9959 2.81633 12.9959H7.10204L6.38776 13.5017Z" fill="{{ request()->routeIs('login') ? '#ffffff' : '#4846D8' }}"/>
          </svg>         
          login
        </a>
      </li>
      <hr>
      <a class="ml-2 mt-5 text-slate-400" href="/">kembali ke menu awal</a>
       @endguest
     </ul>
   </nav>
 </div>
 <!-- End Sidebar -->
 <div>
  <div class="py-8 items-center flex border-b-2 sticky bg-white top-0 h-[50px] text-start lg:hidden">
    <button type="button" class="py-2 px-3 inline-flex justify-start items-start gap-x-2 text-start text-sm font-medium rounded-lg align-middle focus:outline-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-example" aria-label="Toggle navigation" data-hs-overlay="#hs-offcanvas-example">
      <img class="w-[50px]" src="{{ asset('svg/more.svg') }}" alt="">
    </button>
    <div class="ml-auto flex items-center mr-6">
      <img class="w-[50px] object-cover rounded-full border" src="{{ Storage::url('profile/default.jpeg') }}" alt="">
    </div>
  </div>
  <div class="lg:ml-[250px]">
    <div class="min-h-screen p-4">
      {{ $slot }}
    </div>
    <footer class="bg-white bottom-0 rounded-lg">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
          <div class="sm:flex sm:items-center sm:justify-between">
              <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                  <img src="{{ asset('DecemberStyle/logo.png') }}" class="h-8" alt="Flowbite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap">Freedom</span>
              </a>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
          <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
      </div>
    </footer>
    
  </div>
 </div>
 

 <script src="../scripts/js/open-modals-on-init.js"></script>
</x-html>