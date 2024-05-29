@extends('frontend.layouts.master')

@section('title', 'Contact')

@section('content')
    <main>
        <!-- section -->
        <section>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5408.443642674435!2d85.31043457358001!3d27.706346553866762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19006da38c97%3A0xeb1680160e08401c!2sRatna%20Park!5e0!3m2!1sen!2snp!4v1715922182398!5m2!1sen!2snp"
                    width="100%" height="400" style="border: 0"></iframe>
            </div>
        </section>

        <!--2nd section  -->
        <section>
            <div class="container my-5">
                <div class="contact col-12 d-flex justify-content-center">
                    <h3 class="mb-3">CONTACT US FOR ANY QUERY</h3>
                </div>

                <div class="delivery-area md-5 my-5">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="single-deliverys text-center">
                                    <img width="48" height="48" src="{{ asset('img/phonecall.png') }}"
                                        alt="safe-ok" />9811253638
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-deliverys text-center">
                                    <img width="48" height="48" src="{{ asset('img/mail.png') }}"
                                        alt="safe-ok" />nebula@info.com
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-deliverys text-center">
                                    <img width="48" height="48" src="{{ asset('img/location.png') }}"
                                        alt="safe-ok" />Kathmandu,
                                    Nepal
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3rd section -->
        <section style="background-color: #e2a8bb; padding: 20px 0">
            <div class="container my-5">
                <div class="row g-2">
                    <div class="col-md-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingName" placeholder="Enter Your Name" />
                            <label for="floatingName">Name*</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingPhone"
                                placeholder="Enter Your Phone Number" />
                            <label for="floatingPhone">Phone*</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-md-6 mb-4">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="Enter Your Email" />
                            <label for="floatingEmail">E-mail*</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingTopic" placeholder="Enter Your Topic" />
                            <label for="floatingTopic">Topic</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 250px"></textarea>
                            <label for="floatingMessage">Message</label>
                        </div>
                    </div>
                </div>
                <div class="click d-flex justify-content-center">
                    <button type="button" class="btn btn-dark">SEND MESSAGE</button>
                </div>
            </div>
        </section>

        <!-- 4th section -->
        <section>
            <div class="delivery-area my-5">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="single-delivery text-center">
                                <img width="48" height="48" src="{{ asset('img/d2.png') }}" alt="safe-ok" />
                                <h6>Delivery</h6>
                                <p>Track or off orders</p>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-delivery text-center">
                                <img width="48" height="48" src="{{ asset('img/pay.png') }}" alt="safe-ok" />
                                <h6>ONLINE PAYMENT</h6>
                                <p>Payment methods</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-delivery text-center">
                                <img width="48" height="48" src="{{ asset('img/locker.png') }}" alt="safe-ok" />
                                <h6>100% SAFE</h6>
                                <p>View our benefits</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-deliverys text-center">
                                <img width="48" height="48" src="{{ asset('img/support.png') }}" alt="safe-ok" />
                                <h6>24/7 Support</h6>
                                <p>9811253638</p>
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
        </section>
    </main>
@endsection
