<!-- <section class="default-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-heading">Carrer </h1>
      </div>
    </div>
  </div>
</section> -->

<section class="img-section-carrer  d-none d-sm-block">
  <div class="container">
    <div class="row">
        <h4 class="text-img text-white">Apply Online</h4>
    </div>
  </div>
</section>

<section class="text-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h2 class="text-center page-heading ">Current Opening</h2>
      </div>

      <table class="table table-job">
          <thead class=" bg-blue1">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Position</th>
              <th scope="col">No. of Positions</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product Manager</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Accountant</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Sales And Marketing Executive</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Customer Service Representative</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Delivery Person</td>
              <td>1</td>
            </tr>
          </tbody>
        </table>
      </div>
    <div class="row">
      <div class="col-md-12">
          <hr class="hr-web">
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
          <h2 class="text-center pb-2 pt-4">Apply Online</h2>
      </div>

      <div class="col-md-12">
        <div class="alert alert-success " role="alert" style="display:none">
          Email Send Successfully
        </div>
        <div class="alert alert-danger" role="alert" style="display:none">
          Email Not Send please Try Again
        </div>
      </div>
    </div>


      <div class="bt-blue">
        <form action="<?php echo base_url();?>Website/send_resume" method="post"  enctype="multipart/form-data" role="form" class="">
      <div class="row">


          <div class="col-md-4 pt-20">
          <h4 class="pb-4">Your Contact Information</h4>

          <div class="form-group  mb-3 ">
              <label>Area Of Expertise</label>
              <select class="form-control select2" name="expertise_area" id="expertise_area" data-placeholder="Area Of Expertise">
                <option value="">Area Of Expertise</option>
                <option value="Marketing">Marketing</option>
                <option value="Sales">Sales</option>
                <option value="Finance">Finance</option>
                <option value="Manager">Manager</option>
              </select>
            </div>

          <div class="input-group mb-3">
              <label class="w-100" >First Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="First Name " aria-label="First Name " aria-describedby="basic-addon1" required>
            </div>

          <div class="input-group mb-3">
              <label class="w-100">Last Name</label>
              <input type="text" class="form-control" name="last_name" placeholder="Last Name " aria-label="Last Name " aria-describedby="basic-addon1">
            </div>

          <div class="input-group mb-3">
              <label class="w-100">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email " aria-label="Email " aria-describedby="basic-addon1" required>
            </div>

        <div class="input-group mb-3">
            <label class="w-100">Contact No.</label>
            <input type="text" class="form-control" name="mobile" placeholder="Contact" aria-label="Contact" aria-describedby="basic-addon1">
          </div>
      </div>


      <div class="col-md-4 pt-20">
          <h4 class="">Educational / Professional Details</h4>

          <div class="form-group  mb-3 ">
              <label class="w-100">Highest Qualification </label>
              <input type="text" class="form-control" name="h_qualification" placeholder="highest Qualification" aria-label="highest Qualification" aria-describedby="basic-addon1">
            </div>

          <div class="input-group mb-3">
            <label class="w-100">Experience </label>
            <div class="row w-100 ">
              <div class="col-md-6">
                <select class="form-control select2" name="ex_year" id="ex_year" data-placeholder="Select Year">
                  <option value="">Select Year</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4+">4+</option>
                </select>
              </div>
              <div class="col-md-6">
                <select class="form-control select2" name="ex_month" id="ex_month" data-placeholder="Select Month">
                  <option value="">Select Month</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                </select>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <label class="w-100">Current Organization </label>
              <input type="text" class="form-control" name="cur_org" placeholder="Current Organization " aria-label="Current Organization " aria-describedby="basic-addon1">
            </div>

          <div class="input-group mb-3">
            <label class="w-100">Current Annual Salary</label>
              <input type="text" class="form-control" name="cu_salary" placeholder="Current Annual Salary" aria-label="Current Annual Salary" aria-describedby="basic-addon1">
            </div>

        <div class="input-group mb-3">
          <label class="w-100">Expected Salary</label>
            <input type="text" class="form-control" name="expct_salary" placeholder="Expected Salary" aria-label="Expected Salary" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="resume" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
              </div>
              
            </div>
      </div>

      <div class="col-md-4 pt-20">
          <h4 class="text-center pb-5">Submit</h4>
          <button  type="submit" class="btn btn-outline-success mt-2 w-100">Submit</button>
      </div>
    </div>

     </div>
    </form>
  </div>
</section>
