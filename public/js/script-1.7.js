$(function (){
    $('.tombalTambahData').on('click', function() {
        $('#judulModal').html('Tambah Data Pelajar');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalEdit').on('click', function() {
        $('#judulModal').html('Edit Data Pelajar');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/pelajar/edit');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/pelajar/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#ndp').val(data.ndp);
                $('#email').val(data.email);
                $('#kursus').val(data.kursus);
                $('#id').val(data.id);
            }
        });

    });
});