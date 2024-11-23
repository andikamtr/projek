//sub kriteria komitmen
$(document).ready(function() {
    //sub kriteria kerja sama
        $('#kualitas1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#kuantitas1').val(nilai.toFixed(2))
        })
        $('#kuantitas1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#kualitas1').val(nilai.toFixed(2))
        })
    })