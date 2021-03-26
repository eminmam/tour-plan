<?php include('header.php') ?>



<section class="hotel">
  <div class="container">
    <div class="hotel-info">
      <div class="hotel-info__text">
        <div class="hotel-wrapper">
          <div class="stars">
            <img src="./img/Star.svg" alt="star">
            <img src="./img/Star.svg" alt="star">
            <img src="./img/Star.svg" alt="star">
            <img src="./img/Star.svg" alt="star">
            <img src="./img/Star.svg" alt="star">
          </div>
          <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <p class="hotel-description hotel-info__description">Half-Board/ All Inclusive + Complimentary Activities +
          Child Stays Free</p>
      </div>
      <!-- /.hotel-info__text -->
      <div class="rating hotel-info__rating">
        <span class="rating__text">User Rattings</span>
        <span class="rating__counter">4.5/5</span>
      </div>
      <!-- /.hotel-info__rating -->
    </div>
    <!-- /.hotel-info -->
    <div class="hotel-grid">
      <div class="hotel-slider__wrapper">
        <div class="swiper-container hotel-slider hotel__slider">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide hotel-slider__item">
              <img class="slide-image" src="./img/slide.jpg" alt="slide">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img class="slide-image" src="./img/slide2.jpg" alt="slide">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img class="slide-image" src="./img/slide3.jpg" alt="slide">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img class="slide-image" src="./img/slide4.jpg" alt="slide">
            </div>
            ...
          </div>
          <!-- If we need navigation buttons -->
          <button class="hotel-slider__button hotel-slider__button__prev"></button>
          <button class="hotel-slider__button hotel-slider__button__next"></button>

        </div>
        <!-- /.hotel-slider -->
      </div>
      <!-- /.hotel-slider__wrapper -->





      <div class="hotel-right">
        <div class="booking">
          <div class="booking__info">
            <div class="booking__price">
              <span class="booking__start">price starts at</span>
              <strong class="booking__pricetag">$ 8,500</strong>
              <span class="booking__per-room">per room / night</span>
            </div>
            <!-- /.booking__price -->
            <div class="booking__room">
              <div class="booking__text">
                <img src="./img/user.svg" alt="Icon: User" class="booking__icon">
                <span class="booking__description">2 x Guests</span>
              </div>
              <div class="booking__text">
                <img src="./img/home.svg" alt="Icon: Home" class="booking__icon">
                <span class="booking__description">1 x Room</span>
              </div>
            </div>
            <!-- /.booking__room -->
          </div>
          <!-- /.booking__info -->
          <div class="booking__call-center">
            <span class="booking__heading">Quick Booking</span>

            <a href="tel:12100" class="booking__number">
              <img src="./img/phone-call.svg" alt="Icon: Call" lass="booking__image">
              <span class="booking__numbers">12100</span>
            </a>
          </div>
          <!-- /.call-center -->
          <button class="button booking__button">View Other Options</button>
        </div>
        <!-- /.booking -->
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.6741835925595!2d49.849012510368325!3d40.37174824414729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dac39cb4bf1%3A0xbabf0162238cc76f!2sHilton%20Baku!5e0!3m2!1sru!2s!4v1615461491658!5m2!1sru!2s"
            width="100%" height="215" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- /.map -->
      </div>
      <!-- /.hotel-right -->
    </div>
    <!-- /.hotel grid -->
  </div>
  <!-- /.container -->
</section>
<!-- /.hotel -->
<section class="newsletter">
  <div class="newsletter-wrapper">
    <h2 class="newsletter-title newsletter__title">
      subscribe to tour
      <span class="newsletter-title__strong">Newsletter</span>
    </h2>

    <form action="./send.php" method="post" class="subscribe newsletter__subscribe">
      <input type="text" class="subscribe__input" placeholder="Your email address" name="mail"></input>
      <button class="subscribe__button">
        Send
      </button>
    </form>
  </div>
  <!-- /.newsletter-wrapper -->
</section>
<section class="reviews">
  <div class="container">
    <h2 class="reviews__title">What people think about us</h2>
    <!-- Slider main container -->
    <div class="swiper-container reviews-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img src="./img/reviews-avatar.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar">
              <h3 class="reviews-slider__username">Megan Fox</h3>
              <span class="review-slider__date">Stayed 18 Nov, 2019</span>
              <div class="reviews-slider__rating">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
              </div>
              <!-- /.rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi obcaecati, qui similique neque laborum,
              dolorem, repudiandae quasi optio rem saepe quod blanditiis vero explicabo maiores et eligendi
              exercitationem? Quisquam, expedita?
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img src="./img/reviews-avatar2.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar">
              <h3 class="reviews-slider__username">John Doe</h3>
              <span class="review-slider__date">Stayed 18 Nov, 2019</span>
              <div class="reviews-slider__rating">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
                <img src="./img/Star.svg" alt="star">
              </div>
              <!-- /.rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
              Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles
              were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was
              also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but
              self location in a narrow street is not good. Overall it was a good experience and could recommend.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
      </div>
      <!-- /.slider-wrapper -->

      <button class="reviews-slider__button reviews-slider__button--prev"></button>
      <button class="reviews-slider__button reviews-slider__button--next"></button>

    </div>
    <!-- /.review-slider -->
  </div>
  <!-- /.container -->
</section>
<section class="activities">
  <div class="container">
    <h2 class="activities__title">Other Activities</h2>
    <div class="activities-wrapper">
      <div class="card activities__card">
        <img src="./img/acivity-1.jpg" alt="The curious corner of chamarel" class="card__image">
        <h3 class="card__title">The curious corner of chamarel</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card activities__card">
        <img src="./img/acivity-2.jpg" alt="Gymkhana club golf course" class="card__image">
        <h3 class="card__title">Gymkhana club golf course</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card activities__card">
        <img src="./img/acivity-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image">
        <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card activities__card">
        <img src="./img/acivity-4.jpg" alt="The blue marine discovery quest" class="card__image">
        <h3 class="card__title">The blue marine discovery quest</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.activities-wrapper -->
  </div>
  <!-- /.container -->
</section>



<?php include('footer.php') ?>