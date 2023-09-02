@extends('admin.admin_master_frontend')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="mt-10 mb-10 text-center  header-hero-content">
        <h2 class=" text-3xl  leading-tight text-dark wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
            <a href="{{ url('/') }}"> Surat Masuk Digital </a>
        </h2>
    </div>
    <form method="POST" action="{{ route('suratmasuk.store.frontend') }}" enctype="multipart/form-data" id="myForm">
        @csrf

        <div> <label for="regular-form-1" class="form-label">Nama</label> <input id="pengirim"name="pengirim" type="text"
                class="form-control" placeholder="Contoh: Surya Sahputra"> </div>

        <div class="mt-4"> <label for="regular-form-3" class="form-label">Asal Surat</label><select name="asal_surat"
                id="asal_surat" data-placeholder="Select Jenis" class="tom-select w-full col-span-4">
                <option value="1">Luar Sekolah</option>
            </select>
        </div>

        <div class="mt-4"> <label for="regular-form-3" class="form-label">Nomor Surat</label> <input id="no_surat"
                name="no_surat" type="text" class="form-control">
        </div>

        <div class="mt-4"> <label for="regular-form-3" class="form-label">Tanggal Surat</label> <input name="tgl_surat"
                id="tgl_surat" type="text" class="datepicker col-span-4 form-control " data-single-mode="true">
        </div>

        <div class="mt-4"> <label for="regular-form-3" class="form-label">Perihal</label> <input name="perihal"
                id="perihal" type="text" class="form-control col-span-4" aria-label="default input inline 2">
        </div>

        <div class="mt-4 "> <label for="regular-form-3" class="form-label">Tujuan Surat</label> <input id="status"
                type="text" class="form-control" placeholder="Contoh:Kepala Madrasah, Wakil Kepala, atau Nama Individu "
                name="status">
        </div>

        <div class="mt-4 mb-4"> <label for="regular-form-3" class="form-label">File Surat</label>
            <div class="col-span-4">
                <input name="file" type="file" id="file">
                <div class="text-slate-500 mt-2"> Format file Pdf. </div>
            </div>
        </div>



        <a class="btn btn-secondary mt-4 py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" href="{{ url('/') }}">Cancel </a>
        <button class="btn btn-primary mt-4 py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit"><i data-lucide="send"
                class="mr-2"></i>Save </button>

    </form>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    asal_surat: {
                        required: true,
                    },
                    no_surat: {
                        required: true,
                    },
                    tgl_surat: {
                        required: true,
                    },
                    pengirim: {
                        required: true,
                    },
                    perihal: {
                        required: true,
                    },
                    status: {
                        required: true,
                    },
                    file: {
                        required: true,
                    },

                },
                messages: {
                    asal_surat: {
                        required: 'Please Enter Your Asal Surat',
                    },
                    no_surat: {
                        required: 'Please Enter Your No Surat',
                    },
                    tgl_surat: {
                        required: 'Please Enter Your Tanggal Surat',
                    },
                    pengirm: {
                        required: 'Please Enter Your Pengirim',
                    },
                    perihal: {
                        required: 'Please Enter Your Perihal',
                    },
                    status: {
                        required: 'Please Enter Your Tujuan',
                    },
                    file: {
                        required: 'Please Enter Your File',
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
