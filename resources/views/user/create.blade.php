@extends('layout.layout')

@section('title','form')

@section('content')
<div class="container mt-5">
    <h2>User</h2>
    <form>
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label mt-3">Nama</label>
            <input type="text" class="form-control" id="cst_nama" placeholder="Masukan nama anda">

            <label for="dob" class="form-label mt-3">Tanggal lahir</label>
            <input type="date" class="form-control" id="cst_dob" placeholder="Pilih tanggal lahir">

            <label for="dob" class="form-label mt-3">Kewarganegaraan</label>
            <input type="date" class="form-control" id="nationallity_id" placeholder="Pilih tanggal lahir">

            <div class="row mt-5 mb-3">
                <div class="col">
                    <h4>Keluarga</h4>
                </div>
                <div class="col position-right">
                    <h4><a href="#" class="add add_form" id="add_form_kel">+ Tambah Keluarga</a></h4>
                </div>
            </div>
            <div class="row form_fl">
                <div class="col-6 col-sm-2">
                    <label for="fl_nama" class="form-label mt-3">Nama</label>
                    <input type="text" class="form-control" id="fl_nama" name="fl_nama[]" placeholder="Masukan nama anda">
                </div>

                <div class="col-6 col-sm-5">
                    <button>hapus</button>
                </div>
            </div>

            <div class="input_fields_wrap">
                <button class="add_field_button">Add More Fields</button>
                <div><input type="text" name="fl_nama[]"></div>
            </div>


        </div>
    </form>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function() {
        var max_fields = 10; 
        var wrapper = $(".input_fields_wrap"); 
        var add_button = $(".add_field_button"); 

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { 
            e.preventDefault();
            if (x < max_fields) { 
                x++; 
                $(wrapper).append('<div row><div class="col-6 col-sm-2"><input type="text" name="fl_nama[]"/><a href="#" class="remove_field">Remove</a></div>'); 
            }
        });

        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>
@endpush