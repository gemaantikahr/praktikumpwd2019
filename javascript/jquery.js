$(document).ready(function(){
    $('#tombol-cari').hide()
    $('#keyword').on('keyup', function(){
        $('#container').load('../request/search.php?keyword='+$('#keyword').val());
    })
})