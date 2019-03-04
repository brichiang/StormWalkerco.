<template>
  <div class="account">
      <div class="account-header">
        <h1>HELLO BARBER</h1>
        <h4>VIEW SCHEDULE</h4>
      </div>
      <div class="schedule">
        
        <div class="schedule-frame" v-for="a in appointments">
          <div class="schedule-box">
            <img src="@/assets/imgs/profile.gif" class="profile-pic"/>
            <div class="information">
              <h3>Bryan</h3>
              <p><span>Date: </span>{{a.date}}</p>
              <p><span>Time: </span>{{a.time}}</p>
              <P>{{a.description}}</P>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    name:"AccountUser",
    data(){
      return {
        appointments:"",
        name:""
      }
    },
    beforeMount(){
     
      var fd = new FormData();
      fd.append("barber_id", 1);
      fetch('https://stormwalker.herokuapp.com/get_barber_appointments.php', {
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