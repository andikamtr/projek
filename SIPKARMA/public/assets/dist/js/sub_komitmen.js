//sub kriteria komitmen
$(document).ready(function() {
    $('#loyal1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#jujur1').val(nilai.toFixed(2))
    })
    $('#jujur1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#loyal1').val(nilai.toFixed(2))
    })
    $('#loyal2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#tanggung_jawab1').val(nilai.toFixed(2))
    })
    $('#tanggung_jawab1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#loyal2').val(nilai.toFixed(2))
    })
    $('#loyal3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#disiplin1').val(nilai.toFixed(2))
    })
    $('#disiplin1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#loyal3').val(nilai.toFixed(2))
    })
    $('#jujur2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#tanggung_jawab2').val(nilai.toFixed(2))
    })
    $('#tanggung_jawab2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#jujur2').val(nilai.toFixed(2))
    })
    $('#jujur3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#disiplin2').val(nilai.toFixed(2))
    })
    $('#disiplin2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#jujur3').val(nilai.toFixed(2))
    })
    $('#tanggung_jawab3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#disiplin3').val(nilai.toFixed(2))
    })
    $('#disiplin3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#tanggung_jawab3').val(nilai.toFixed(2))
    })
})