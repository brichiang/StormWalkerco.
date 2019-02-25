<template>
  <div class="account">
      <div class="account-header">
        <h1>HELLO (User Name)</h1>
        <h4>VIEW/RESCHEDULE</h4>
      </div>
      <div class="schedule">
        
        <div class="schedule-box" v-for="a in appointments">
          <img src="@/assets/imgs/profile1.jpg" class="profile-pic"/>
          <div class="information">
            <h3 v-if="a.barber_id === '1'">Brian</h3>
            <h3 v-if="a.barber_id === '2'">Matei</h3>
            <h3 v-if="a.barber_id === '3'">Bryan</h3>
            <p><span>Date: </span>{{a.date}}</p>
            <p><span>Time: </span>{{a.time}}</p>
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