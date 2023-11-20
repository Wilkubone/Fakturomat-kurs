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
                        <form action="{{ route('invoices.store')}}" id="contactForm" class="row g-3 needs-validation" novalidate>
                            {{ csrf_field() }}
                            <div class="col-md-4">
                                <label for="number" class="form-label"></label>
                                <input id="number" type="text" class="form-control"  value="" placeholder="Numer faktury" required>
                                <div class="invalid-feedback">
                                Wprowadz nr faktury!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="form-label"></label>
                                <input id='date' type="text" class="form-control" value="" placeholder="Data wystawienia" required>
                                <div class="invalid-feedback">
                                Wprowadz date!
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label for="total" class="form-label"></label>
                                <input type="text" class="form-control" id="total" name='total' value="" placeholder="Kwota faktury" required>
                                <div class="invalid-feedback">
                                Wprowadz kwote!
                                </div>
                            </div>


                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dodaj fakturę</button>
                        </form>

                    </div>
                </div>
            </div>
         </section>
@endsection
