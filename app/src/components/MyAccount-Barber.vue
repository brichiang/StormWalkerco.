<template>
  <div class="account">
      <div class="account-header">
        <h1>HELLO {{ barberName }}</h1>
        <h4>VIEW SCHEDULE</h4>
      </div>
      <div class="schedule">
        
        <div class="schedule-frame" v-for="a in appointments">
          <div class="schedule-box">
            <img src="@/assets/imgs/profile.gif" class="profile-pic"/>
            <div class="information">
              <h3>{{a.user_name}}</h3>
              <p><span>Date: </span>{{a.date}}</p>
              <p><span>Time: </span>{{a.time}}</p>
              <P>{{a.description}}</P>
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
        barberName:""
      }
    },
    methods:{
      logout: function() {
        localStorage.isLogin="";
        window.location.href = "/Login";
      },
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
      this.barberName = localStorage.barberName;
    }
  }
</script>