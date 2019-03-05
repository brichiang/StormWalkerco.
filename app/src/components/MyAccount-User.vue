<template>
  <div class="account">
    <div class="account-header">
       <h1>HELLO (User Name)</h1>
       <h4>VIEW/RESCHEDULE</h4>
    </div>
    <div class="schedule">
       <div class="schedule-frame" v-for="a in appointments">
        <div class="schedule-box">
          <img src="@/assets/imgs/profile1.jpg" class="profile-pic"/>
          <div class="information">
            <h3 v-if="a.barber_id === '1'">Brian</h3>
            <h3 v-if="a.barber_id === '2'">Matei</h3>
            <h3 v-if="a.barber_id === '3'">Bryan</h3>
            <p><span>Date: </span>{{a.date}}</p>
             <p><span>Time: </span>{{a.time}}</p>
          </div>
         </div>
         <button class="schedule-but" @click="open_form">RESCHEDULE</button>
         <button class="schedule-but" @click="open_modal">CANCEL SCHEDULE</button>
       </div>
    </div>
    <div v-if="form == true" class="modal-form">
      <updateForm />
      <button @click="close_form" class="modal-button">CLOSE</button>
    </div>
    <div class="confirm-box" v-if="modal == true">
      <div class="confirm-box2">
        <div class="modal-title"><strong>DELETE APPOINTMENT</strong></div>
        <div class="buttom-box">
          <button class="modal-button">CONFIRM</button>
          <button class="modal-button" @click="close_modal">CANCEL</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import updateForm from '@/components/Update-form.vue'
  
  export default {
    name:"AccountUser",
    components: {
      updateForm,
    },
    data(){
      return {
        appointments:"",
        name:"",
        form: false,
        modal: false
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
    }
  }
</script>