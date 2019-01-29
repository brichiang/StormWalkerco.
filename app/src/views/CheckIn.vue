<template>
  <div id="barber">
    <div class="row">
      <div class="col-md-6">
        <div class="title-box">
          <div class="title-box2">
            <div class="title">CHECK IN <strong>NOW.</strong></div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">CHECK IN</div>
            <form>
              <div class="form-group">
                <label for="date">DATE</label>
                <br/>
                <input type="date" name="date" id="date" class="form-input"/>
              </div>
              <div class="form-group">
                <label for="time">TIME</label><br/>
                <input type="time" name="time" id="time" class="form-input"/>
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
              <button class="form-buttom">CHECK IN</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>