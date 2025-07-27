<form action="" class="input-box" id="form" method="post">
  <div class="form-page" id="page_1">
    <div class="form-header">
      <h2 class="form-title">Get Your Free Solar Battery Consultation</h2>
      <div class="form-number">
        <div class="form-num-1 d-flex">
          <div class="round active">1</div>
          <span class="form-num-line active"></span>
        </div>
        <div class="form-num-2 d-flex">
          <div class="round">2</div>
          <span class="form-num-line"></span>
        </div>
      </div>
    </div>
    <div class="form-row">
      <label for="own_home" class="input-title">Do You Own Your Home?</label>
      <select name="own_home" id="own_home" required>
        <option selected>Select one</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div>
    <div class="form-row">
      <label for="own_solar" class="input-title">Do You Already Have Solar Panels?</label>
      <select name="own_solar" id="own_solar" required>
        <option selected>Select one</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div>
    <div class="form-row">
      <label for="electric_bill" class="input-title">Your Current Electricity Bill</label>
      <select name="electric_bill" id="electric_bill" required>
        <option selected>Select one</option>
        <option value="$140">$140</option>
        <option value="$160">$160</option>
        <option value="$200">$200</option>
        <option value="$260">$260</option>
      </select>
    </div>
    <div class="form-row">
      <label for="how_soon" class="input-title">How Soon Are You Looking to Install a Solar
        Battery?</label>
      <select name="how_soon" id="how_soon" required>
        <option selected>Select one</option>
        <option value="Immediately">Immediately</option>
        <option value="Within 1 month">Within 1 month</option>
        <option value="1-3 months">1–3 months</option>
        <option value="Not sure yet">Not sure yet</option>

      </select>
    </div>
    <div class="form-btns d-flex justify-content-center mt-3">
      <div class="yellow-btn" id="next">Next</div>
    </div>
  </div>
  <div class="form-page" id="page_2">
    <div class="form-header">
      <h2 class="form-title">
        Get Your Free Solar Battery Consultation
      </h2>
      <div class="form-number">
        <div class="form-num-1 d-flex">
          <div class="round active">1</div>
          <span class="form-num-line active"></span>
        </div>
        <div class="form-num-2 d-flex">
          <div class="round active">2</div>
          <span class="form-num-line active"></span>
        </div>
      </div>
    </div>
    <div class="form-row">
      <label for="full_name" class="input-title">Full Name*</label>
      <input type="text" name="full_name" id="full_name" placeholder="Enter Your Name" required>
    </div>
    <div class="form-row">
      <label for="email" class="input-title">Email Address*</label>
      <input type="email" name="email" id="email" placeholder="Enter Your Email Address" required>
    </div>
    <div class="form-row">
      <label for="p_number" class="input-title">Phone Number*</label>
      <input type="tel" name="p_number" id="p_number" placeholder="Enter Your Phone Number" required>
    </div>
    <div class="form-row">
      <label for="best_time" class="input-title">Best Time to Contact You?</label>
      <select name="best_time" id="best_time" required>
        <option selected>Select one</option>
        <option value="Morning">Morning</option>
        <option value="Afternoon">Afternoon</option>
        <option value="Night">Night</option>
      </select>
    </div>
    <div class="form-btns pt-3 mt-3">
      <button type="button" class="form-outline-btn" id="prev_page">Back</button>
      <button type="submit" value="submit" name="submit" id="submit" class="yellow-btn form-fill-btn">Let's Talk
        Savings</button>
    </div>
  </div>
</form>