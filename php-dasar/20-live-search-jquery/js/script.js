// jQuery(document)
$(document).ready(function() {
  // hilangkan tombol cari
  $('#tombol-cari').hide();
  // $('#tombol-cari').css('display', 'none');


  // event ketika keyword ditulis
  $('#keyword').on('keyup', function () { 
    
    // munculkan icon loading
    $('.loader').show();

    // ajax menggunakan load
    // $('#container').load('ajax/manga.php?keyword=' + $('#keyword').val());

    // $.get()
    $.get('ajax/manga.php?keyword=' + $('#keyword').val(), function (data) {
      $('#container').html(data);
      $('.loader').hide();
    });
  });
});