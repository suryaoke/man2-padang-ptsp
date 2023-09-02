@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="intro-y flex items-center mt-8 mb-4">
        <h1 class="text-lg font-medium mr-auto">
            Add Naskah
        </h1>
    </div>
    <form method="POST" action="{{ route('naskah.store') }}" enctype="multipart/form-data" id="myForm">
        @csrf
        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder=" Nama" name="nama">
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="box">
                    <div class="p-5  ml-6 ">
                        <textarea name="isi" id="editor"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-3 py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit">Create </button>
    </form>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    nama: {
                        required: true,
                    },

                },
                messages: {
                    nama: {
                        required: 'Please Enter Your Naskah',
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
