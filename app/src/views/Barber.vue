<template>
  <div id="barber">
    <div class="row">
      <div class="col-md-6">
        <div class="title-box">
          <div class="title-box2">
            <div class="title">BARBER SETUP.</div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">BERBER SETUP</div>
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
                <label for="description">DESCRIPTION</label><br/>
                <textarea name="description" id="description" class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label for="image">PROFILE</label><br/>
                <input type="file" name="image" id="image" accept="image/*" />
              </div>
            </form>
            <div class="buttom-box">
              <button class="form-buttom">SETUP</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>