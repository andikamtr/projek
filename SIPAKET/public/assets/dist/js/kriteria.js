$(document).ready(function() {
    $('#pendidikan1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#absensi1').val(nilai.toFixed(2))
    })
    $('#absensi1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#pendidikan1').val(nilai.toFixed(2))
    })
    $('#pendidikan2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#kedisiplinan1').val(nilai.toFixed(2))
    })
    $('#kedisiplinan1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#pendidikan2').val(nilai.toFixed(2))
    })
    $('#pendidikan3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#prestasi1').val(nilai.toFixed(2))
    })
    $('#prestasi1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#pendidikan3').val(nilai.toFixed(2))
    })
    $('#absensi2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#kedisiplinan2').val(nilai.toFixed(2))
    })
    $('#kedisiplinan2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#absensi2').val(nilai.toFixed(2))
    })
    $('#absensi3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#prestasi2').val(nilai.toFixed(2))
    })
    $('#prestasi2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#absensi3').val(nilai.toFixed(2))
    })
    $('#kedisiplinan3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#prestasi3').val(nilai.toFixed(2))
    })
    $('#prestasi3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#kedisiplinan3').val(nilai.toFixed(2))
    })
})