<!-- <section class="default-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-heading">Business</h1>
      </div>
    </div>
  </div>
</section> -->

<section class="img-section-Reseller  d-none d-sm-block">
  <div class="container">
    <div class="row">
        <h4 class="text-img text-white">Become Our Reseller</h4>
    </div>
  </div>
</section>

<section  class="page-heading-mobile d-block  d-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="page-heading-m ">Become Our Reseller</h1>
      </div>
    </div>
  </div>
</section>



<section class="sec-about-img d-block  d-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
          <img src="<?php echo base_url(); ?>assets/images/become_resellor.png" alt="">
      </div>
    </div>
  </div>
</section>


<section class="resellor-mail">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">

          <div class="alert alert-success " role="alert" style="display:none">
            Email Send Successfully
          </div>
          <div class="alert alert-danger" role="alert" style="display:none">
            Email Not Send please Try Again
          </div>


        <form action="<?php echo base_url();?>Website/resellor_mail" method="post"  role="form" class="contactForm">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="mobile" id="nobile" placeholder="Your Mobile No." data-rule="minlen:10" data-msg="Please enter a valid Mobile No." required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                    <div class="text-center"><button class="btn btn-outline-primary btn-techno" type="submit">Send Message</button></div>
                  </form>
      </div>
    </div>
  </div>
</section>

<!-- <section class="sec-about2" >
  <div class="container">
     <div class="row">
       <div class="col-md-10 offset-md-1">
         <h2 class="text-center pt-3 pb-3">Become Our Reseller</h2>
         <p class="text-div m-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
     </div>
  </div>
</section> -->
