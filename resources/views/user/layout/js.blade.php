<!-- jQuery-V1.12.4 -->
<script src="user/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper js -->
<script src="user/assets/js/vendor/popper.min.js"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="user/assets/js/bootstrap.min.js"></script>
<!-- Ajax Mail js -->
<script src="user/assets/js/ajax-mail.js"></script>
<!-- Meanmenu js -->
<script src="user/assets/js/jquery.meanmenu.min.js"></script>
<!-- Wow.min js -->
<script src="user/assets/js/wow.min.js"></script>
<!-- Slick Carousel js -->
<script src="user/assets/js/slick.min.js"></script>
<!-- Owl Carousel-2 js -->
<script src="user/assets/js/owl.carousel.min.js"></script>
<!-- Magnific popup js -->
<script src="user/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope js -->
<script src="user/assets/js/isotope.pkgd.min.js"></script>
<!-- Imagesloaded js -->
<script src="user/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- Mixitup js -->
<script src="user/assets/js/jquery.mixitup.min.js"></script>

<!-- Counterup -->
<script src="user/assets/js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script src="user/assets/js/waypoints.min.js"></script>
<!-- Barrating -->
<script src="user/assets/js/jquery.barrating.min.js"></script>
<!-- Jquery-ui -->
<script src="user/assets/js/jquery-ui.min.js"></script>
<!-- Venobox -->
<script src="user/assets/js/venobox.min.js"></script>
<!-- Nice Select js -->
<script src="user/assets/js/jquery.nice-select.min.js"></script>
<!-- ScrollUp js -->
<script src="user/assets/js/scrollUp.min.js"></script>
<!-- Main/Activator js -->
<script src="user/assets/js/main.js"></script>
<!-- Thông báo dùng chung -->
<script src="js/notifications/Lobibox.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

	var usd = document.getElementById("vnd_to_usb").value; 

  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AfZY6P9RPF6wTXw7ovqgojqQgTSz_Rt_rLffek1bh9T6kx3x8b-3G4-a4ew_86UTnH8iMOCHcdOit1Mz',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: `${usd}`,
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
       
        window.alert('Cảm ơn bạn đã mua hàng!');
        document.getElementById("submitform").submit();

      });
    }
  }, '#paypal-button');

</script>
