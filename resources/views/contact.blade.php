@extends('layouts.main')

@section('container')
    <section id="contact" class="contact bg-secondary rounded mb-5" >
            <div class="row mb-4 pt-4 text-center">
                <h2 class="fw-bolder text-white">Contact Us</h2>
                    <hr style="color: rgb(117, 114, 114)">
                    <h4 class="text-white">We'd love to hear all from you</h4>
                <div class="col-md-8 mt-3">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Full name</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                            <label for="email">Email address</label>
                                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                        </div>
                                        <!-- Phone number input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                            <label for="phone">Phone number</label>
                                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                        </div>
                                        <!-- Message input-->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                            <label for="message">Message</label>
                                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                        </div>
                                        <!-- Submit Button-->
                                        <div class="d-grid mb-5"><button class="btn btn-dark bg-opacity-75 btn-lg" id="submitButton" type="submit">Submit</button></div>
                                    </form>
                                </div>
                            </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x300?office" class="card-img-top border-0" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">MCNWeb Office</h5>
                       </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Email : mohammadnur4601@gmail.com</li>
                          <li class="list-group-item">Phone : +6285895232024</li>
                          <li class="list-group-item">Address : Iklhas St. 037/004 Madiun East Java</li>
                        </ul>
                      </div>
                </div>
            </div>
        
    </section>
@endsection
        
