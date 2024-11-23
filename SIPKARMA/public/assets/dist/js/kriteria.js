$(document).ready(function() {
    $('#komitmen1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#manajemen1').val(nilai.toFixed(2))
    })
    $('#manajemen1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#komitmen1').val(nilai.toFixed(2))
    })
    $('#komitmen2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#kerja_sama1').val(nilai.toFixed(2))
    })
    $('#kerja_sama1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#komitmen2').val(nilai.toFixed(2))
    })
    $('#komitmen3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#hasil_kerja1').val(nilai.toFixed(2))
    })
    $('#hasil_kerja1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#komitmen3').val(nilai.toFixed(2))
    })
    $('#manajemen2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#kerja_sama2').val(nilai.toFixed(2))
    })
    $('#kerja_sama2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#manajemen2').val(nilai.toFixed(2))
    })
    $('#manajemen3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#hasil_kerja2').val(nilai.toFixed(2))
    })
    $('#hasil_kerja2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#manajemen3').val(nilai.toFixed(2))
    })
    $('#kerja_sama3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#hasil_kerja3').val(nilai.toFixed(2))
    })
    $('#hasil_kerja3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#kerja_sama3').val(nilai.toFixed(2))
    })
})