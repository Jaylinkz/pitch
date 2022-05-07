@extends('layouts/master')

@section('content')
    {{-- Landing view --}}
    <section class="home-section home-parallax home-fade home-full-height bg-dark-30" id="home" data-background="{{asset('images/peace.png')}}">
        <div class="titan-caption">
          <div class="caption-content">
            @if(session()->has('success'))
            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500 .">
                <span class="text-xl inline-block mr-5 align-middle">
                  <i class="fas fa-bell" />
                 </span>
                    <span class="inline-block align-middle mr-8">
                      <b class="capitalize">{{session()->get('success')}}</b> 
                    </span>
            </div>
        @endif
            <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
            <div class="font-alt mb-40 titan-title-size-4">We are <span class="rotate">Peace | Justice| Strong Institution</span>
            </div><a class="section-scroll btn btn-border-w btn-circle" href="#about">Learn More</a>
          </div>
        </div>
      </section>
      {{-- end Landing --}}

     <div class="main">
        {{-- About Us --}}
        <section class="module pt-0 pb-0 " id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image" data-background="{{asset('images/peace&power.jpg')}}">
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">About Us</h2>
                  {{-- <div class="module-subtitle font-serif align-left">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div> --}}
                  <p>We at <strong>PSJI</strong> work in collaboration with both governmental and non-governmental human rights organizations to ensure equal access to justice for all and protecting everyone's fundamental freedoms. significantly reducing violent deaths, torture, abuse, exploitation, discrimination, human trafficking, corruption, and organised crime.</p>
                  <p>
                    Promoting and protecting human rights is  the sole purpose of our work. Through all our 
                    actions, we defend and strive to achieve inclusive and just societies in partner countries, where everyone is protected, respected,
                     and free to speak their mind without having to fear for their safety, no matter their socioeconomic situation, ethnic origins, religion,
                      age, gender, sexual orientations, etc.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- end About --}}

        {{-- partners --}}
        <section class="module-small bg-white p-0 mt-50" id="partners">
          <div class="container">
            <h2 class="module-title font-alt align-center">OUR PARTNERS</h2>
            <div class="row client">
              <div class="owl-carousel text-center align-items-center" data-items="6" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/un.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/eu.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/amnesty.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/OGP_Logo.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/unicef.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/redcross.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/naptip.jpg')}}" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="{{asset('images/partners_logo/a2j.png')}}" alt="Client Logo"/></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- end partners --}}

        {{-- reports & cases --}}
        <section class="module sliding-portfolio">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt" id="reported-cases"> <i class=" icon-megaphone"></i> Reported Cases</h2>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="owl-carousel text-center" data-items="4" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="post">
                      <div class="post-thumbnail"><a href="#"><img src="{{asset('images/partners_logo/report.png')}}" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="post">
                      <div class="post-thumbnail"><a href="#"><img src="{{asset('images/partners_logo/report.png')}}" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="post">
                      <div class="post-thumbnail"><a href="#"><img src="{{asset('images/partners_logo/report.png')}}" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="post">
                      <div class="post-thumbnail"><a href="#"><img src="{{asset('images/partners_logo/report.png')}}" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="post">
                      <div class="post-thumbnail"><a href="#"><img src="{{asset('images/partners_logo/report.png')}}" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="post">
                      <div class="post-thumbnail"><a href="#"><img src="{{asset('images/partners_logo/report.png')}}" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="text-center"><a class="btn btn-border-d btn-circle mt-50" href="{{url('cases')}}">View All Cases</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-60 request-cta" data-background="{{asset('images/partners_logo/report.jpg')}}" id="make-report">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <h2 class="font-alt">Report a case</h2>
                <p>Would you like to report a case? Just submit your details and report, we'll be in touch with you shortly.</p>
              </div>
              <div class="col-sm-8">
                {{-- <div class="row"> --}}
                  <form class="form rqst-form" id="requestACall" role="form" method="post" action="{{route('report')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="form-group col-sm-6 col-xs-12">
                        <input class="form-control input-lg" type="text" name="name" placeholder="Name"/>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <input class="form-control input-lg" type="email" name="email" placeholder="Email"/>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label>upload any evidence that you thing would be useful to this case</label> 
                        <input class="form-control input-lg" type="file" name="possible_evidence" />
                      </div>
               
                      <div class="form-group col-sm-6 col-xs-12">
                        <label>upload any photo evidence that you thing would be useful to this case</label> 
                        <input class="form-control input-lg" type="file" name="image" />
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        
                        <input class="form-control input-lg" type="text" name="location" placeholder="Location"/>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-6 col-xs-12">
                        <input class="form-control input-lg" type="text" name="phone_no" placeholder="Phone Number"/>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <select class="form-control input-lg" name="subject">
                          <option value="subject1" disabled="" selected="">Subject</option>
                          
                          <option value="Sexual Abuse">Sexual Abuse</option>
                          <option value="Bribery">Bribery</option>
                          <option value="Detention">illegal Detention</option>
                          <option value="Work abuset">Work abuse</option>
                        </select>
                      </div>
                    </div>
                    
                   <div class="row w-100">

                      <div class="form-group col-sm-6 col-xs-12 w-100">
                        <textarea class="form-control input-lg" name="report" rows="7" placeholder="Report Case"></textarea>
                      </div>
                      {{-- ---------------------  submit report button -------------------- --}}
                      <div class="form-group col-sm-6 col-xs-12">
                        <button class="btn btn-border-w btn-circle btn-block" id="racSubmit" type="submit"><i class="fa fa-paper-plane-o"></i> Submit</button>
                      </div>
                   </div>
                    
                    <div id="requestFormResponse"></div>
                  </form>
                {{-- </div> --}}
              </div>
            </div>
          </div>
        </section>
        {{-- end reports & cases --}}


        {{-- success stories --}}
        <h2 class="module-title font-alt mt-80" id="testimonials"> <i class="icon-trophy"></i> Success Stories</h2>
          <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="{{asset('images/success/success.jpg')}}">
            
            <div class="testimonials-slider pt-140 pb-140">
              <ul class="slides">
                <li>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="module-icon"><span class="icon-quote"></span></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 col-sm-offset-4">
                        <div class="testimonial-author">
                          <div class="testimonial-caption font-alt">
                            <div class="testimonial-title">Jack Woods</div>
                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="module-icon"><span class="icon-quote"></span></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 col-sm-offset-4">
                        <div class="testimonial-author">
                          <div class="testimonial-caption font-alt">
                            <div class="testimonial-title">Jim Stone</div>
                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="module-icon"><span class="icon-quote"></span></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 col-sm-offset-4">
                        <div class="testimonial-author">
                          <div class="testimonial-caption font-alt">
                            <div class="testimonial-title">Adele Snow</div>
                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        {{-- end success stories --}}

        {{-- --------------------------- subscribe to Newsletters --------------------------- --}}
        <div class="module-small bg-white">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                <div class="callout-text font-alt font-dark">
                  <h3 class="callout-title font-dark">Subscribe now</h3>
                  <p>We will not spam your email.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="callout-btn-box">
                  <form id="subscription-form" role="form" method="post" action="php/subscribe.php">
                    <div class="input-group">
                      <input class="form-control" type="email" id="semail" name="semail" placeholder="Your Email" data-validation-required-message="Please enter your email address." required="required"/><span class="input-group-btn">
                        <button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Submit</button></span>
                    </div>
                  </form>
                  <div class="text-center" id="subscription-response"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- end of subscription  --}}

     </div>
     {{-- end of main-div --}}
@endsection