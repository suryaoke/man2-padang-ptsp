 @php
     $dashboard = URL::route('dashboard');
     $user = URL::route('user.all');
     $useradd = URL::route('user.add');
     $jabatan = URL::route('jabatan.all');
     $jabatanadd = URL::route('jabatan.add');
     $suratmasuk = URL::route('surat.masuk.all');
     $suratmasukadd = URL::route('surat.masuk.add');
     $suratmasukterkirim = URL::route('surat.masuk.terkirim.all');
     $naskah = URL::route('naskah.all');
     $naskahadd = URL::route('naskah.add');
     $suratkeluaradd = URL::route('surat.keluar.informasi');
     $suratkeluar = URL::route('surat.keluar.all');
     $tamu = URL::route('tamu.all');
     $tamureport = URL::route('tamu.report');
     $verifikasi = URL::route('surat.keluar.verifikasi');
     $suratkeluarreport = URL::route('surat.keluar.report');
     $suratmasukreport = URL::route('surat.masuk.report');
     
     $tandatangan = URL::route('surat.keluar.tandatangan');
     
     $url = url()->current();
     
 @endphp

 <nav class="side-nav">
     <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
         <img alt="Midone - HTML Admin Template" class="w-12" src="{{ asset('backend/dist/images/man1_copy.png') }}">
         <span class="hidden xl:block text-white text-lg ml-3">PTSP MAN 1 Kota Padang</span>
     </a>
     <div class="side-nav__devider my-6"></div>
     <ul>
         <li>
             @if ($url == $dashboard)
                 <a href="{{ route('dashboard') }}" class="side-menu  side-menu--active">
                 @else
                     <a href="{{ route('dashboard') }}" class="side-menu ">
             @endif
             <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
             <div class="side-menu__title">
                 Dashboard
             </div>
             </a>

         </li>
         <li>

             @if ($suratmasuk == $url)
                 <a href="javascript:;" class="side-menu side-menu--active">
                 @elseif ($suratmasukterkirim == $url)
                     <a href="javascript:;" class="side-menu side-menu--active">
                     @elseif ($naskah == $url)
                         <a href="javascript:;" class="side-menu side-menu--active">
                         @elseif ($naskahadd == $url)
                             <a href="javascript:;" class="side-menu side-menu--active">
                             @elseif ($suratkeluar == $url)
                                 <a href="javascript:;" class="side-menu side-menu--active">
                                 @elseif ($tamu == $url)
                                     <a href="javascript:;" class="side-menu side-menu--active">
                                     @elseif ($verifikasi == $url)
                                         <a href="javascript:;" class="side-menu side-menu--active">
                                         @elseif ($tandatangan == $url)
                                             <a href="javascript:;" class="side-menu side-menu--active">
                                             @else
                                                 <a href="javascript:;" class="side-menu ">
             @endif
             <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
             <div class="side-menu__title">
                 Data
                 <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
             </div>
             </a>
             <ul class="">
                 <li>
                     <a href="{{ route('surat.masuk.all') }}" class="side-menu">
                         <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                         <div class="side-menu__title"> Surat Masuk </div>
                     </a>
                 </li>
                 @if (Auth::user()->role == '4')
                     <li>
                         <a href="{{ route('surat.masuk.terkirim.all') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title"> Surat Masuk Terkirim </div>
                         </a>
                     </li>

                     <li>
                         <a href="{{ route('naskah.all') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title">
                                 Naskah Surat Dinas </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('surat.keluar.all') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title">
                                 Surat Keluar </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('tamu.all') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title">
                                 Tamu </div>
                         </a>
                     </li>
                 @endif


                 @if (Auth::user()->role == '1')
                     <li>
                         <a href="{{ route('surat.keluar.tandatangan') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title">
                                 Surat Tandatangan </div>
                         </a>
                     </li>
                 @endif

                 @if (Auth::user()->role == '3')
                     <li>
                         <a href="{{ route('surat.keluar.verifikasi') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title">
                                 Surat Verifivikasi </div>
                         </a>
                     </li>
                 @endif


             </ul>
         </li>

         @if (Auth::user()->role == '4')
             <li>
                 @if ($user == $url)
                     <a href="javascript:;" class="side-menu side-menu--active">
                     @elseif ($useradd == $url)
                         <a href="javascript:;" class="side-menu side-menu--active">
                         @elseif ($jabatan == $url)
                             <a href="javascript:;" class="side-menu side-menu--active">
                             @elseif ($jabatanadd == $url)
                                 <a href="javascript:;" class="side-menu side-menu--active">
                                 @else
                                     <a href="javascript:;" class="side-menu ">
                 @endif
                 <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                 <div class="side-menu__title">
                     Menu Master
                     <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                 </div>
                 </a>
                 <ul class="">
                     <li>
                         <a href="{{ route('user.all') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title"> User </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('jabatan.all') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title"> Jabatan</div>
                         </a>
                     </li>

                 </ul>
             </li>

             <li>
                 @if ($suratmasukadd == $url)
                     <a href="javascript:;" class="side-menu  side-menu--active" data-tw-toggle="modal"
                         data-tw-target="#button-modal-preview">
                     @elseif ($suratkeluaradd == $url)
                         <a href="javascript:;" class="side-menu  side-menu--active" data-tw-toggle="modal"
                             data-tw-target="#button-modal-preview">
                         @else
                             <a href="javascript:;" class="side-menu" data-tw-toggle="modal"
                                 data-tw-target="#button-modal-preview">
                 @endif
                 <div class="side-menu__icon"> <i data-lucide="plus-square"></i> </div>
                 <div class="side-menu__title">
                     Buat Surat
                 </div>
                 </a>

             </li>

         @endif

         @if (Auth::user()->role == '4' || Auth::user()->role == '1')
             <li>
                 @if ($tamureport == $url)
                     <a href="javascript:;" class="side-menu side-menu--active">
                     @elseif ($useradd == $url)
                         <a href="javascript:;" class="side-menu side-menu--active">
                         @elseif ($suratkeluarreport == $url)
                             <a href="javascript:;" class="side-menu side-menu--active">
                             @elseif ($suratmasukreport == $url)
                                 <a href="javascript:;" class="side-menu side-menu--active">
                                 @else
                                     <a href="javascript:;" class="side-menu ">
                 @endif
                 <div class="side-menu__icon"> <i data-lucide="file"></i> </div>
                 <div class="side-menu__title">
                     Report Data
                     <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                 </div>
                 </a>
                 <ul class="">
                     <li>
                         <a href="{{ route('tamu.report') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title"> Tamu </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('surat.masuk.report') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title"> Surat Masuk </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('surat.keluar.report') }}" class="side-menu">
                             <div class="side-menu__icon"> <i data-lucide="minus"></i> </div>
                             <div class="side-menu__title"> Surat Keluar </div>
                         </a>
                     </li>

                 </ul>
             </li>
         @endif


     </ul>

 </nav>





 <!-- BEGIN: Modal Toggle -->
 {{--  <div class="text-center"> <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-modal-preview" class="btn btn-primary">Show Modal</a> </div>  --}}
 <!-- END: Modal Toggle -->
 <!-- BEGIN: Modal Content -->
 <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content"> <a data-tw-dismiss="modal" href="javascript:;"> <i data-lucide="x"
                     class="w-8 h-8 text-slate-400"></i> </a>
             <div class="modal-body p-0">
                 <div class="p-5 text-center"> <i data-lucide="mail" class="w-24 h-24 text-pending mx-auto mt-2"></i>
                     <div class="text-4xl mt-2">Pembuatan Surat</div>
                 </div>
                 <div class="px-5 pb-8 mt-2 text-center">

                     <a href="{{ route('surat.keluar.informasi') }}" class="btn btn-primary mr-1 mb-2"> Surat Keluar
                         <i data-loading-icon="spinning-circles" data-color="white" class="w-4 h-4 ml-2"></i> </a>
                     <a href="{{ route('surat.masuk.add') }}" class="btn btn-warning mr-1 mb-2 "> Surat Masuk <i
                             data-loading-icon="spinning-circles" data-color="white" class="w-4 h-4 ml-2"></i> </a>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- END: Modal Content -->
