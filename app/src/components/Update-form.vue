<template>
  <div class="modal-body">
    <div class="modal-box">
      <div class="modal-title">CHECK IN</div>
      <form>
        <div class="modal-group">
          <label for="barber">BARBER</label>
          <br/>
          <div class="modal-input">
            <select name="barber" id="barber" class="select-box">
              <option value=""></option>
              <option value="Brian">BRIAN</option>
              <option value="Matei">MATEI</option>
              <option value="Bryan">BRYAN</option>
            </select>
          </div>
        </div>
        <div class="modal-group">
          <label for="date">DATE</label>
          <br/>
          <input type="date" name="date" id="date" class="modal-input"/>
        </div>
        <div class="modal-group">
          <label for="time">TIME</label><br/>
          <div class="modal-input">
            <select name="time" id="time" class="select-box">
              <option value=""></option>
              <option value="11:00am">11:OOAM</option>
              <option value="11:30am">11:3OAM</option>
              <option value="12:00pm">12:OOPM</option>
              <option value="12:30pm">12:3OPM</option>
              <option value="01:00pm">1:OOPM</option>
              <option value="01:30pm">1:3OPM</option>
              <option value="02:00pm">2:OOPM</option>
              <option value="02:30pm">2:3OPM</option>
              <option value="03:00pm">3:OOPM</option>
              <option value="03:30pm">3:3OPM</option>
              <option value="04:00pm">4:OOPM</option>
              <option value="04:30pm">4:3OPM</option>
              <option value="05:00pm">5:OOPM</option>
              <option value="05:30pm">5:3OPM</option>
              <option value="06:00pm">6:OOPM</option>
              <option value="06:30pm">6:3OPM</option>
              <option value="07:00pm">7:0OPM</option>
              <option value="07:30pm">7:3OPM</option>
            </select>
          </div>
        </div>
        <div class="modal-group">
          <label for="description">DESCRIPTION</label>
          <br/>
          <textarea name="description" id="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="modal-group">
          <label for="image">PROFILE</label><br/>
          <input type="file" name="image" id="image" accept="image/*"/>
        </div>
      </form>
      <div class="buttom-box">
        <button class="modal-button">UPDATE</button>
      </div>
    </div>
  </div>
</template>