$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#topofpage').on('click', function(){
        $('html, body').animate({
            scrollTop:$('#header').offset().top
        }, 1000);
    });

    $('#link-offer-1').on('click', function(){
        $('html, body').animate({
            scrollTop:$('#offer-detail-1').offset().top
        }, 800);
    });

    $('#link-offer-2').on('click', function(){
        $('html, body').animate({
            scrollTop:$('#offer-detail-2').offset().top
        }, 1000);
    });

    $('#link-offer-3').on('click', function(){
        $('html, body').animate({
            scrollTop:$('#offer-detail-3').offset().top
        }, 1000);
    });

    $('.dropdown-toggle').dropdown();

    var i = 1;
    if(i<=10){
        $('.add-file').on('click', function(e){
            i++;
            e.preventDefault();
            $('.add-file-area').append('<div class="form-group"><label for="thumbnail_'+i+'">Choisir une photo</label><input class="form-control" name="thumbnail_'+i+'" type="file"><br></div>');
        });
    }
});
