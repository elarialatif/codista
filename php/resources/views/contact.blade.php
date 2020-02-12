@extends('layouts.master')
@section('content')
<!-- Contact Us -->
<section id="contactPage" class="ls s-pt-30 s-pb-130 s-pt-md-75">
    <div class="container">
        <div class="row">

            <div class="divider-40 d-none d-xl-block"></div>

            <div class="col-lg-8 offset-lg-2 animate animated scaleAppear" data-animation="scaleAppear">

                <h4 class="text-center">
                    Contact Form
                </h4>
                <div class="divider-40 d-none d-xl-block"></div>
                <form class="contact-form c-mb-20 text-center" method="post" action="{{ route('contact.post') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-placeholder">
                                <label for="name">Full Name
                        <span class="required">*</span>
                    </label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group has-placeholder">
                                <label for="phone">Phone
                        <span class="required">*</span>
                    </label>
                                <input type="text" aria-required="true" size="30" value="" name="number" id="phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-placeholder">
                                <label for="email">Email address
                        <span class="required">*</span>
                    </label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-placeholder">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="6" cols="45" name="subject" id="message" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row c-mt-md-15 c-md-0">
                        <div class="col-sm-12">
                            <div class="form-group text-center contact-form1">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Send Message</button>
                            </div>
                        </div>
                    </div>
                    @if(session('success') == 'yes')
                        <p class="text-success">Your message has been sent successfully :)</p>
                    @elseif(session('success') == 'no')
                        <p class="text-danger">You have already sent a message today :(</p>
                    @endif
                </form>
            </div>
            <!--.col-* -->

            <div class="divider-75 d-none d-xl-block"></div>

        </div>
    </div>
</section>
<!-- #Contact Us -->
@endsection
