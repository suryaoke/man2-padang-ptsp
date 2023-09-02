@extends('admin.admin_master_frontend')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="mt-10 mb-10 text-center  header-hero-content">
        <h2 class=" text-3xl  leading-tight text-dark wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
            <a href="{{ url('/') }}"> Buku Tamu Digital</a>
        </h2>
    </div>
    <form method="POST" action="{{ route('tamu.store.frontend') }}" enctype="multipart/form-data" id="myForm">
        @csrf
        <div> <label for="regular-form-1" class="form-label">Nama</label> <input id="nama" name="nama" type="text"
                class="form-control" placeholder="Contoh: Surya Sahputra"> </div>
        <div class="mt-4 mb-2 intro-x login__input form-control"> <label>Jabatan</label>
            <div class="flex flex-col sm:flex-row mt-2">
                <div class="form-check mr-2"> <input id="jabatan" class="form-check-input" type="radio" name="jabatan"
                        value="Instansi"> <label class="form-check-label" for="radio-switch-4">Instansi</label> </div>

                <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="jabatan" class="form-check-input" type="radio"
                        name="jabatan" value="Instansi"> <label class="form-check-label" for="radio-switch-5">Orang
                        Tua/Wali</label> </div>

                <div class="form-check mr-2 mt-2 sm:mt-0"> <input id="jabatan" class="form-check-input" type="radio"
                        name="jabatan" value="Instansi"> <label class="form-check-label" for="radio-switch-6">Umum</label>
                </div>
            </div>
        </div>
        <div class="mt-4"> <label for="regular-form-3" class="form-label">Individu Yang Dituju</label> <input
                id="individu" name="individu" type="text" class="form-control"
                placeholder="Contoh:Kepala Madrasah,Wakil Kepala, atau Nama Individu">
        </div>
        <div class="mt-4"> <label for="regular-form-3" class="form-label">Maksu dan Tujuan</label> <input id="tujuan"
                name="tujuan" type="text" class="form-control">
        </div>
        <div class="mt-4 mb-4"> <label for="regular-form-3" class="form-label">No HP/WA</label> <input id="no_hp"
                type="text" class="form-control" placeholder="Contoh:083182718860" name="no_hp">
        </div>
        <input type="hidden" class="intro-x login__input form-control mt-3 py-3 px-4 block" name="status" value="0">

        <a class="btn btn-secondary mt-8 py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" href="{{ url('/') }}">Cancel </a>
        <button class="btn btn-primary mt-8 py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit"><i data-lucide="send"
                class="mr-2"></i>Save </button>

    </form>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    nama: {
                        required: true,
                    },
                    jabatan: {
                        required: true,
                    },
                    individu: {
                        required: true,
                    },
                    tujuan: {
                        required: true,
                    },
                    no_hp: {
                        required: true,
                    },

                },
                messages: {
                    nama: {
                        required: 'Please Enter Your Tamu',
                    },
                    jabatan: {
                        required: 'Please Enter Your Tamu',
                    },
                    individu: {
                        required: 'Please Enter Your Tamu',
                    },
                    tujuan: {
                        required: 'Please Enter Your Tamu',
                    },
                    no_hp: {
                        required: 'Please Enter Your Tamu',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
