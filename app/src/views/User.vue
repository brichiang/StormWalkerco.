<template>
  <div id="barber">
    <div class="row">
      <div class="col-md-6">
        <div class="title-box">
          <div class="title-box2">
            <div class="title">SIGNUP <strong>NOW.</strong></div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">SINGUP.</div>
            <form>
              <div class="form-group">
                <label for="f_name">FIRST NAME</label><br/>
                <input type="text" name="f_Name" id="f_name" class="form-input"/>
              </div>
              <div class="form-group">
                <label for="l_name">LAST NAME</label><br/>
                <input type="text" name="l_Name" id="l_name" class="form-input"/>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label><br/>
                <input type="phone" name="phone" id="phone" class="form-input"/>
              </div>
              <div class="form-group">
                <label for="email">Email</label><br/>
                <input type="email" name="email" id="email" class="form-input"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label><br/>
                <input type="password" name="password" id="password" class="form-input"/>
              </div>
              <div class="form-group">
                <label for="r_password">Repeat Password</label><br/>
                <input type="password" name="r_password" id="r_password" class="form-input"/>
              </div>
            </form>
            <div class="buttom-box">
              <button class="form-buttom">SIGNUP</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>