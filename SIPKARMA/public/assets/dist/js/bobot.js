$(document).ready(function() {
    $('#bs1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#b1').val(nilai.toFixed(2))
    })
    $('#b1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#bs1').val(nilai.toFixed(2))
    })
    $('#bs2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#c1').val(nilai.toFixed(2))
    })
    $('#c1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#bs2').val(nilai.toFixed(2))
    })
    $('#bs3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#k1').val(nilai.toFixed(2))
    })
    $('#k1').keyup(function() {
        var nilai = 1/$(this).val()
        $('#bs3').val(nilai.toFixed(2))
    })
    $('#b2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#c2').val(nilai.toFixed(2))
    })
    $('#c2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#b2').val(nilai.toFixed(2))
    })
    $('#b3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#k2').val(nilai.toFixed(2))
    })
    $('#k2').keyup(function() {
        var nilai = 1/$(this).val()
        $('#b3').val(nilai.toFixed(2))
    })
    $('#c3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#k3').val(nilai.toFixed(2))
    })
    $('#k3').keyup(function() {
        var nilai = 1/$(this).val()
        $('#c3').val(nilai.toFixed(2))
    })
})