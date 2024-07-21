@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <section class="banner py-5">
        <div class="container bannerContainer">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <img src="https://i.ibb.co/HFrSS3c/banner.png" class="img-fluid rounded-lg" alt="">
                </div>
                <div class="col-lg-6 text-white order-lg-1">
                    <h1 class="display-4 font-weight-bold">Shop the Best <br> Resale <span class="text-lime-600">Deals
                            Online!</span></h1>
                    <p class="lead text-white">Looking for a high-quality, pre-owned laptop at an affordable price?
                        You've come to the right place! At Laptop Resale Bazar, we offer a wide selection of laptops
                        from top brands like Acer, Dell, HP. Whether you're a student on a budget, a professional
                        looking for a reliable work computer, or just someone in need of a new laptop for personal use,
                        we have the perfect option for you.</p>
                    <button class="btn btn-outline-warning py-1 text-xl font-bold shadow-lg"><a
                            href="{{route('products.index')}}" class="btn btn-success py-2 m-2">Explore Now</a></button>


                </div>
            </div>
        </div>
    </section>
    <hr>
    <br><br><br><br>
    <!-- Category -->
    <div data-aos="fade-up" class="aos-init aos-animate my-8">
        <h1 class="display-4 font-weight-bold text-center text-success my-4">All Brands</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white"
                        data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px"
                            src="https://cdn.mos.cms.futurecdn.net/iNfgXSefxEyhisXTzF2GcJ.jpg" alt="Dell">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white"
                        data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px"
                            src="https://www.logotaglines.com/wp-content/uploads/2016/08/hp-logo.jpg" alt="Hp">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white"
                        data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px"
                            src="https://1000logos.net/wp-content/uploads/2016/09/Acer-Logo.png" alt="Accer">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white"
                        data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px"
                            src="https://logos-world.net/wp-content/uploads/2022/07/Lenovo-Logo.jpg" alt="Lenovo">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white"
                        data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px"
                            src="https://1000logos.net/wp-content/uploads/2017/06/Toshiba-Logo.png" alt="Toshiba">
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <a href="#">
                    <div class="card shadow-lg transition-all duration-700 ease-in-out hover:scale-105 bg-white"
                        data-aos="fade-up">
                        <img class="card-img-top" style="height: 300px" src="https://i.ibb.co/BwBRRhJ/Apple-Logo.png"
                            alt="Apple">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr><br>
    <br>
    <!-- Category End -->


    <div class="container py-5 my-24">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <img data-aos="fade-up"
                    src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                    alt="" class="img-fluid rounded-lg shadow-2xl aos-init aos-animate">
            </div>
            <div class="col-lg-6 order-lg-1">
                <h1 class="display-4 font-weight-bold text-center text-success my-8">About Us</h1>
                <p class="lead text-secondary text-justify">Laptop-Luxe is Pakistan's premier online store for laptops,
                    offering a wide range of both new and pre-owned laptops. Since our establishment, we have been
                    dedicated to providing reliable, high-quality laptops imported from trusted sources. At Laptop-Luxe,
                    we prioritize exceptional customer service and cater to the diverse needs of individual buyers and
                    corporate clients alike.</p>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- FAQs -->
    <hr>
    <br><br><br>
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-blue-800" id="faqs">Frequently Asked Questions</h2>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Question 1: What payment methods do you accept?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Answer 1: We accept Visa, MasterCard, Jazzcash, Easypaisa, and PayPal.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Question 2: Do you offer international shipping?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Answer 2: No, we offer local shipping to most cities. Please check our shipping <a
                            href="#">policy</a> for more details.
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>


    <br>

    @endsection