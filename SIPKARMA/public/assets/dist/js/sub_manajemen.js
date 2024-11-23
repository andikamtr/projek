//sub kriteria komitmen
$(document).ready(function() {
    //sub kriteria manajemen
        $('#kepemimpinan1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#perencanaan1').val(nilai.toFixed(2))
        })
        $('#perencanaan1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#kepemimpinan1').val(nilai.toFixed(2))
        })
        $('#kepemimpinan2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#pengorganisasian1').val(nilai.toFixed(2))
        })
        $('#pengorganisasian1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#kepemimpinan2').val(nilai.toFixed(2))
        })
        $('#kepemimpinan3').keyup(function() {
            var nilai = 1/$(this).val()
            $('#pengarahan1').val(nilai.toFixed(2))
        })
        $('#pengarahan1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#kepemimpinan3').val(nilai.toFixed(2))
        })
        $('#perencanaan2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#pengorganisasian2').val(nilai.toFixed(2))
        })
        $('#pengorganisasian2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#perencanaan2').val(nilai.toFixed(2))
        })
        $('#perencanaan3').keyup(function() {
            var nilai = 1/$(this).val()
            $('#pengarahan2').val(nilai.toFixed(2))
        })
        $('#pengarahan2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#perencanaan3').val(nilai.toFixed(2))
        })
        $('#pengorganisasian3').keyup(function() {
            var nilai = 1/$(this).val()
            $('#pengarahan3').val(nilai.toFixed(2))
        })
        $('#pengarahan3').keyup(function() {
            var nilai = 1/$(this).val()
            $('#pengorganisasian3').val(nilai.toFixed(2))
        })
    })