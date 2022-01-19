$(document).ready(function() {
   $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      mouseDrag: true,
      touchDrag: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 550,

   });
});

$(document).ready(function() {

   $('.product-btn').click(function() {
      //console.log('click');
      var userid = $(this).data('id');

      $.ajax({
         url: '/includes/ajax.php',
         type: 'post',
         data: {
            userid: userid
         },
         success: function(response) {
            $('.modal-body').html(response);
            $('#DetailsModal').modal('show');
         }
      });
   });
});



