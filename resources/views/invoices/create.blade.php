@extends('layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="page-section masthead" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakturę</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="number" name="number" type="text" placeholder="Numer faktury" data-sb-validations="required" />
                                <label for="name">Numer faktury</label>
                                <div class="invalid-feedback" data-sb-feedback="number">Wpisz numer faktury</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" type="text" name="date" placeholder="Data wystawienia" data-sb-validations="required,email" />
                                <label for="date">Data wystawienia</label>
                                <div class="invalid-feedback" data-sb-feedback="date">Wpisz datę</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="total" name="total" type="text" placeholder="Kwota faktury" data-sb-validations="required" />
                                <label for="phone">Kwota</label>
                                <div class="invalid-feedback" data-sb-feedback="total">Wprowdź kwotę</div>
                            </div>
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Dodaj fakturę</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection   