//sub kriteria komitmen
$(document).ready(function() {
    //sub kriteria kerja sama
        $('#komunikasi1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#beradaptasi1').val(nilai.toFixed(2))
        })
        $('#beradaptasi1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#komunikasi1').val(nilai.toFixed(2))
        })
        $('#komunikasi2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#berbagi_informasi1').val(nilai.toFixed(2))
        })
        $('#berbagi_informasi1').keyup(function() {
            var nilai = 1/$(this).val()
            $('#komunikasi2').val(nilai.toFixed(2))
        })
        $('#beradaptasi2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#berbagi_informasi2').val(nilai.toFixed(2))
        })
        $('#berbagi_informasi2').keyup(function() {
            var nilai = 1/$(this).val()
            $('#beradaptasi2').val(nilai.toFixed(2))
        })
    })