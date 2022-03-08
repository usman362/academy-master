
 <script type="text/javascript">
  function handleWishList(elem) {

      $.ajax({
          url: 'http://demo.academy-lms.com/default/home/handleWishList',
          type: 'POST',
          data: { course_id: elem.id },
          success: function (response) {
              if (!response) {
                  window.location.replace("login.html");
              } else {
                  if ($(elem).hasClass('active')) {
                      $(elem).removeClass('active')
                  } else {
                      $(elem).addClass('active')
                  }
                  $('#wishlist_items').html(response);
              }
          }
      });
  }

  function handleCartItems(elem) {
      url1 = 'home/handleCartItems.html';
      url2 = 'home/refreshWishList.html';
      $.ajax({
          url: url1,
          type: 'POST',
          data: { course_id: elem.id },
          success: function (response) {
              $('#cart_items').html(response);
              if ($(elem).hasClass('addedToCart')) {
                  $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                  $('.big-cart-button-' + elem.id).text("Add to cart");
              } else {
                  $('.big-cart-button-' + elem.id).addClass('addedToCart')
                  $('.big-cart-button-' + elem.id).text("Added to cart");
              }
              $.ajax({
                  url: url2,
                  type: 'POST',
                  success: function (response) {
                      $('#wishlist_items').html(response);
                  }
              });
          }
      });
  }

  function handleEnrolledButton() {
      $.ajax({
          url: 'http://demo.academy-lms.com/default/home/isLoggedIn',
          success: function (response) {
              if (!response) {
                  window.location.replace("login.html");
              }
          }
      });
  }

  $(document).ready(function () {
      if (! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          if ($(window).width() >= 840) {
              $('a.has-popover').webuiPopover({
                  trigger: 'hover',
                  animation: 'pop',
                  placement: 'horizontal',
                  delay: {
                      show: 500,
                      hide: null
                  },
                  width: 330
              });
          } else {
              $('a.has-popover').webuiPopover({
                  trigger: 'hover',
                  animation: 'pop',
                  placement: 'vertical',
                  delay: {
                      show: 100,
                      hide: null
                  },
                  width: 335
              });
          }
      }
  });
</script>
<footer class="footer-area d-print-none">
    <div class="container-xl">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright-text">
            <a href="/"><img src="{{asset('frontend/uploads/system/logo-dark.png')}}" alt="" class="d-inline-block" width="110"></a>
            <a href="/" target="_blank"></a>
          </p>
        </div>
        <div class="col-md-6">
          {{-- <ul class="nav justify-content-md-end footer-menu">
            <li class="nav-item">
              <a class="nav-link" href="/about_us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/privacy_policy">Privacy policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/terms_and_condition">Terms and condition</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">
                Login </a>
            </li>
            <li>
              <select class="language_selector" onchange="switch_language(this.value)">
                <option value="arabic">Arabic</option>
                <option value="arbic">Arbic</option>
                <option value="azeri">Azeri</option>
                <option value="bangla">Bangla</option>
                <option value="bengali">Bengali</option>
                <option value="bosnian">Bosnian</option>
                <option value="chinese">Chinese</option>
                <option value="cyrillic">Cyrillic</option>
                <option value="english" selected>English</option>
                <option value="espaneol">Espaneol</option>
                <option value="espaol">Espaol</option>
                <option value="filipino">Filipino</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="greek">Greek</option>
                <option value="gujarati">Gujarati</option>
                <option value="haitian-creole">Haitian-creole</option>
                <option value="hayeren">Hayeren</option>
                <option value="hebrew">Hebrew</option>
                <option value="hindi">Hindi</option>
                <option value="hungarian">Hungarian</option>
                <option value="indo">Indo</option>
                <option value="indonesia">Indonesia</option>
                <option value="italiano">Italiano</option>
                <option value="kazakh">Kazakh</option>
                <option value="korean">Korean</option>
                <option value="kurdi">Kurdi</option>
                <option value="malay">Malay</option>
                <option value="mandarine">Mandarine</option>
                <option value="marathi">Marathi</option>
                <option value="nepali">Nepali</option>
                <option value="persian">Persian</option>
                <option value="persisan">Persisan</option>
                <option value="polish">Polish</option>
                <option value="portugues">Portugues</option>
                <option value="portugus-br">Portugus-br</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="somali">Somali</option>
                <option value="spanish">Spanish</option>
                <option value="swedish">Swedish</option>
                <option value="tamil">Tamil</option>
                <option value="thai">Thai</option>
                <option value="tigrinya">Tigrinya</option>
                <option value="tr">Tr</option>
                <option value="trke">Trke</option>
                <option value="turkish">Turkish</option>
                <option value="ukraine">Ukraine</option>
                <option value="urdu">Urdu</option>
                <option value="vietnam">Vietnam</option>
              </select>
            </li>
          </ul> --}}
        </div>
      </div>
    </div>
  </footer>