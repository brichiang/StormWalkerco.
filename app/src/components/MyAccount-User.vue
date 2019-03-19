<template>
  <div class="account">
    <div class="account-header">
       <h1>HELLO {{ userName }}</h1>
       <h4>VIEW/RESCHEDULE</h4>
    </div>
    <div class="schedule">
       
      <div class="schedule-frame" v-for="a in appointments" v-if="a.user_name === userName">
        <div class="schedule-box">
          <img src="@/assets/imgs/profile1.jpg" class="profile-pic"/>
          <div class="information">
            <h3>{{a.barber_name}}</h3>
            <p><span>Date: </span>{{a.date}}</p>
            <p><span>Time: </span>{{a.time}}</p>
          </div>
            <button class="schedule-but" @click="open_form">RESCHEDULE</button>
            <button class="schedule-but" @click="open_modal">DELETE APPOINTMENT</button>
            <!--Update Modal-->
            <div v-if="form == true" class="modal-form">
              <div class="modal-body">
                <div class="modal-box">
                  <div class="modal-title">CHECK IN</div>
                  <form>
                    <div class="modal-group">
                      <label for="barber">BARBER</label>
                      <br/>
                      <div class="modal-input">
                        <select name="barber" id="barber" class="select-box" v-model="barber_name" >
                          <option :value="b.f_name" v-for="b in barbers">{{b.f_name}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-group">
                      <label for="date">DATE</label>
                      <br/>
                      <input type="date" name="date" id="date" class="modal-input" v-model="date"/>
                    </div>
                    <div class="modal-group">
                      <label for="time">TIME</label><br/>
                        <div class="modal-input">
                          <select name="time" id="time" class="select-box" v-model="time">
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
                        <textarea name="description" id="description" class="form-control" rows="5" v-model="description"></textarea>
                      </div>
                      <div class="modal-group">
                        <label for="image">PROFILE</label><br/>
                        <input type="file" name="image" id="image" accept="image/*"/>
                      </div>
                    </form>
                    <div class="buttom-box">
                      <button class="modal-button" @click="Update(a.appointment_id)">UPDATE</button>
                    </div>
                  </div>
                  <button @click="close_form" class="modal-button">CLOSE</button>
                </div>
            </div>
            <!--Delete Modal-->
            <div class="confirm-box" v-if="modal == true">
              <div class="confirm-box2">
                <div class="modal-title"><strong>DELETE APPOINTMENT</strong></div>
                <div class="buttom-box">
                  <button class="modal-button" @click="Delete(a.appointment_id)">CONFIRM</button>
                  <button class="modal-button" @click="close_modal">CANCEL</button>
                </div>
              </div>
            </div>
         </div>
       </div>
      
    </div>
    <div class="logout-but">
      <button class="schedule-but" @click="logout">LOGOUT</button>
    </div>
  </div>
</template>

<script>
  
  export default {
    name:"AccountUser",
    data(){
      return {
        appointments:"",
        name:"",
        form: false,
        modal: false,
        barber_name:"",
        date:"",
        time:"",
        description:"",
        userName:"",
        barbers:""
      }
    },
    methods :{
      open_form: function() {
        this.form = true;
      },
      close_form: function(){
        this.form = false;
      },
      open_modal: function() {
        this.modal = true;
      },
      close_modal: function() {
        this.modal = false;
      },
      logout: function() {
        sessionStorage.setItem("isLogin","");
        window.location.href = "/Login";
      },
      Delete: function(appointment_id) {
        var fd = new FormData();
        fd.append("appointment_id", appointment_id);
        
        fetch('https://stormwalker.herokuapp.com/delete_appointment.php', {
            method:"POST",
            body:fd,
          }).then((response)=>{
            return response.json();
          }).then((json)=>{
            if(json){
              alert("Appointment Deleted Successfuly");
              location.reload();
            }
        });
      },
      Update: function(appointment_id) {
        var fd = new FormData();
        fd.append("appointment_id", appointment_id);
        fd.append("barber_name", this.barber_name);
        fd.append("date", this.date);
        fd.append("time", this.time);
        fd.append("description", this.description);
        fd.append("user_name", this.userName);
        
        fetch('https://stormwalker.herokuapp.com/update_appointment.php', {
          method:"POST",
          body:fd,
        }).then((response)=>{
          return response.json();
        }).then((json)=>{
          if(json){
            alert("Appointment Updated Successfuly");
            location.reload();
          }
        }); 
      }
    },
    beforeMount(){
      var fd = new FormData();
      fd.append("user_id", 1);
      fetch('https://stormwalker.herokuapp.com/get_user_appointments.php', {
        method:"POST",
        body:fd,
      }).then((response)=>{
        return response.json();
      }).then((json)=>{
        if(json){
          this.appointments = json;
        }
      });
      fetch('https://stormwalker.herokuapp.com/get_barbers.php', {
        method:"POST"
      }).then((response)=>{
        return response.json();
      }).then((json)=>{
        if(json){
          this.barbers = json;
        }
      });
      this.userName = sessionStorage.getItem("userName");
    }
  }
  
</script>
