<footer>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <h4>Company </h4>
      <ul>
     <li>   <a href="<?php echo base_url(); ?>Website/about"> About Us </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/leadership">Leadership & Innovation</a> </li>
     <li>   <a href="<?php echo base_url(); ?>Website/exelence">FCB Excellence System </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/policy"> Policy </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/team">Our Team </a></li>
      <li>   <a href="<?php echo base_url(); ?>Website/managment">Management Message</a></li>
      </ul>

      <br><br>

      <h4>Business </h4>
      <ul>
     <li>   <a href="<?php echo base_url(); ?>Website/business">Our Brands </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/partnership">Project Partnership Program</a> </li>
      </ul>
      </div>
    <div class="col-md-3">
      <h4>Facility</h4>
      <ul>
     <li>   <a href="<?php echo base_url(); ?>Website/facilities">Offers</a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/facilities">Discounts </a> </li>
     <li>   <a href="<?php echo base_url(); ?>Website/facilities">Rewards</a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/facilities">Quality Of Service</a></li>
      </ul>

      <br><br>

      <h4>We Support Government Drives </h4>
      <ul>
     <li>   <a href="<?php echo base_url(); ?>Website/government"> Women Empowerment </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Sarva Shiksha Abhiyan</a> </li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Start-Up India </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government"> Stand-Up India </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Skill India </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government"> Make In India </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Beti Padhao Beti Bachao</a> </li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Mission Plantation </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Digital India </a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/government">Swachh Bharat Aabhiyan</a></li>
      </ul>
    </div>


    <div class="col-md-3">
      <h4>Carrer</h4>
      <ul>
     <li>   <a href="<?php echo base_url(); ?>Website/resellor">Become Our Reseller</a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/carrer">Apply Online</a> </li>
      </ul>
      <br><br>

      <h4>Useful links </h4>
      <ul>
     <li>   <a href="<?php echo base_url(); ?>Website/gallery">Gallery</a></li>
     <li>   <a href="<?php echo base_url(); ?>Website/contact">Contact</a> </li>
      </ul>
    </div>

    <div class="col-md-3">
      <h4>Follow us on</h4>
      <p class=" m-center"><i class="fab  fa-facebook-f facebook"></i>  &nbsp; <i class="fab twitter fa-twitter"></i> &nbsp; <i class="fab  linkedin fa-linkedin-in"></i> &nbsp; <i class="fab instagram fa-instagram"></i></p>
    </div>
  </div>
</div>
</footer>

<section class="bottom-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
         <p class="f-14 m-center">© FCBSMS</p>
      </div>
      <div class="col-md-6">
      <a class="text-grey text-right m-center f-14" href="http://technothinksup.com/"> <p>Design & Develope By Techno Thinks Up Solution Pvt. Ltd. </p></a>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
      $(document).ready(function(){

        <?php if($this->session->flashdata('send_email_sucess')){ ?>
            $('.alert-success').show().delay(5000).fadeOut();
      <?php  }
      elseif ($this->session->flashdata('send_email_error')) {?>
        $('.alert-danger').show().delay(5000).fadeOut();
      <?php } ?>

      <?php if($this->session->flashdata('send_email_sucess1')){ ?>
          $('.alert-success').show().delay(5000).fadeOut();
    <?php  }
    elseif ($this->session->flashdata('send_email_error1')) {?>
      $('.alert-danger').show().delay(5000).fadeOut();
    <?php } ?>

    <?php if($this->session->flashdata('send_email_sucess2')){ ?>
        $('.alert-success').show().delay(5000).fadeOut();
  <?php  }
  elseif ($this->session->flashdata('send_email_error2')) {?>
    $('.alert-danger').show().delay(5000).fadeOut();
  <?php } ?>
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        var url = window.location.href;
        var activePage = url;
        $('.nav-link').removeClass('active');
        // alert(activePage);
        $('.nav-link').each(function () {
          var linkPage = this.href;
          if (activePage == linkPage) {
              $(this).closest(".nav-link").addClass("active");
          }
        });
      });
    </script>

  </body>
</html>
