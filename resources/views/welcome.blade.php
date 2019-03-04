<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wielka Szama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.timepicker.css') }}">



    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <a class="navbar-brand nav-link" href="#section-home">WielkaSzama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#section-nasza-historia" class="nav-link">Nasza historia</a></li>
                <li class="nav-item"><a href="#section-menu-specjalne" class="nav-link">Menu Specjalne</a></li>
                <li class="nav-item"><a href="#section-menu-caloroczne" class="nav-link">Menu Całoroczne</a></li>
                <li class="nav-item"><a href="#section-gallery" class="nav-link">Galeria</a></li>
                <li class="nav-item"><a href="#section-kontakt" class="nav-link">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="site-cover" style="background-color:black; background-image: url(front/images/front.jpeg); filter: grayscale(25%);"  id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
            <div class="col-md-12">
                <h1 class="site-heading site-animate mb-3">Wielka Szama</h1>
                <h2 class="h5 site-subheading mb-5 site-animate">Witryna internetowa restauracji Wielka Szama</h2>
                <p><a target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Rezerwacja</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section" id="section-nasza-historia">
    <div class="container">
        <div class="row">
            <div class="col-md-5 site-animate mb-5">
                <h4 class="site-sub-title">Nasza historia</h4>
                <h2 class="site-primary-title display-4">Witamy</h2>
                <p>Bogata w oryginalne receptury jak i obita w lokalne produkty. Wielka szama to miejsce gdzie celebruje się najlepsze walory naszego regionu</p>

                <p class="mb-4">Nasza szama to restauracja polozona nad przepięknym jeziorem w malowniczej dzielnicy turystycznej. To najlepsze miejsce do ucieczki -idealne, by móc cieszyć się rewelacyjnym jedzeniem, winem czy piwem kraftowym.
                U nas znajdziesz wszystko, co ma do zaoferowania nasz region.Przekonaj się sam</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
                <img src="{{ asset('front/images/o_nas.jpeg') }}" alt="o nas" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- END section -->


<section class="site-section bg-light" id="section-menu-specjalne">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center mb-5 site-animate">
                <h4 class="site-sub-title">Szef kuchni poleca</h4>
                <h2 class="display-4">Menu specjalne </h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Cenimy produkty regionalne jak i sezonowe, więc stworzyliśmy osobne menu właśnie im poświęcone. Menu te zmienia się codziennie w zależnośći od dostępności produktu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel site-owl">
                    @foreach($sliders as $key=>$slider)
                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="slider" class="img-fluid" style="height: 400px; width: 400px;">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">{{ $slider->price }} zł</h5>
                                    <h5 class="mt-0 h4">{{ $slider->title }}</h5>
                                    <p class="mb-4" >{{ $slider->sub_title }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section" id="section-menu-caloroczne">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Menu całoroczne</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Przywiązujemy najwyższą wagę do wysokiej jakości jedzenia jakie państwo znajdą na talerzu. W wielkiej szamie kładziemy nacisk na to, by atmosfera była u nas równie ciepla, co nasze fantastyczne posiłki które podajemy. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">

                <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                    @foreach($categories as $category)
                        <li class="nav-item site-animate">
                            <a class="nav-link active" id="pills-{{ $category->slug }}-tab" data-toggle="pill" href="#pills-{{ $category->slug }}" role="tab" aria-controls="pills-{{ $category->slug }}" aria-selected="true">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" id="pills-{{ $category->slug }}" role="tabpanel" aria-labelledby="pills-{{ $category->slug }}-tab">
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-md-6 site-animate">
                                    <div class="media menu-item" id="{{ $item->category->slug }}">
                                    <img class="mr-3" src="{{ asset('uploads/item/'.$item->image) }}" class="img-responsive" alt="Item" style="height: 100px; width: 100px;">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{ $item->name }}</h5>
                                            <p>{{ $item->description }}</p>
                                            <h6 class="text-primary menu-price">{{ $item->price }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{--<section class="site-section" id="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Delicious Menu</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">

                <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item site-animate">
                        <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
                    </li>
                    <li class="nav-item site-animate">
                        <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
                    </li>
                    <li class="nav-item site-animate">
                        <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
                    </li>
                </ul>

                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                        <div class="row">
                            <div class="col-md-6 site-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 site-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                        <div class="row">
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                        <div class="row">
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>--}}
<!-- END section -->

<section class="site-section" id="section-gallery">
    <div class="container">
        <div class="row site-custom-gutters">

            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Gallery</h2>
                <div class="row justify-content-center">
                </div>
            </div>

            <div class="col-md-4 site-animate">
                <a href="front/images/menu_1.jpg" class="site-thumbnail image-popup">
                    <img src="front/images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="front/images/menu_2.jpg" class="site-thumbnail image-popup">
                    <img src="front/images/menu_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="front/images/menu_3.jpg" class="site-thumbnail image-popup">
                    <img src="front/images/menu_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4 site-animate">
                <a href="front/images/menu_2.jpg" class="site-thumbnail image-popup">
                    <img src="front/images/menu_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="front/images/menu_3.jpg" class="site-thumbnail image-popup">
                    <img src="front/images/menu_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="front/images/menu_1.jpg" class="site-thumbnail image-popup">
                    <img src="front/images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>

        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section bg-light" id="section-kontakt">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Skontaktuj się z nami</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Masz pytanie? Wyślij do nas wiadomość. Odpowiemy <br>najszybciej jak to możliwe</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7 mb-5 site-animate">
                <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Imie i Nazwisko">
                    </div>
                    <div class="form-group">
                        <label for="subject" class="sr-only">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Temat">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message"  id="message" cols="30" rows="10" class="form-control" placeholder="Napisz swoją wiadomość"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 site-animate">
                <p><img src="{{ asset('front/images/restauracja.jpeg') }}" alt="restauracja" class="img-fluid"></p>
                <p class="text-black">
                    Adres: <br> Malta, Poznań <br>  Polska <br> <br>
                    Telefon: <br> 12 345 67 89 <br> <br>
                    Email: <br> <a href="mailto:info@wszama.com">info@wszama.com</a>
                </p>

            </div>

        </div>
    </div>
</section>
<div id="map"></div>
<!-- END section -->


<footer class="site-footer site-bg-dark site-section">
    <div class="container">
        <div class="row site-animate">
            <div class="col-md-12 text-center">
                <div class="site-footer-widget mb-4">
                    <ul class="site-footer-social list-unstyled ">
                        <li class="site-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                        <li class="site-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
                        <li class="site-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <p>&copy;Dominik Kowalewski  <script>document.write(new Date().getFullYear());</script>
                    </p>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-image" style="background-image: url(front/images/rezerwacja.jpeg);"></div>
                    </div>
                    <div class="col-lg-12 p-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small>Zamknij</small><span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="mb-4">Zarezerwuj stolik</h1>
                        <form action="{{ route('reservation.reserve') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_fname">Imię</label>
                                    <input type="text" name="first_name" class="form-control" id="m_fname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_lname">Nazwisko</label>
                                    <input type="text" name="last_name" class="form-control" id="m_lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">Email</label>
                                    <input type="email" name="email" class="form-control" id="m_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_people">Ilość osób</label>
                                    <select name="how_many_people" id="m_people" class="form-control">
                                        <option value="1">1 People</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4+">4+ People</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_phone">Telefon</label>
                                    <input type="text" name="phone" class="form-control" id="m_phone">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_date">Data</label>
                                    <input type="text" name="date" class="form-control" id="m_date">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_time">Czas</label>
                                    <input type="text" name="time" class="form-control" id="m_time">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_message">Wiadomość</label>
                                    <textarea class="form-control" name="message" id="m_message" cols="30" rows="7"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Zarezerwuj teraz">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- END Modal -->

<!-- loader -->
<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('front/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('front/js/jquery.timepicker.min.js') }}"></script>

<script src="{{ asset('front/js/jquery.animateNumber.min.js') }}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('front/js/google-map.js') }}"></script>

<script src="{{ asset('front/js/main.js') }}"></script>

</body>
</html>