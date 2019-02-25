<template>
  <div id="barber">
    <div class="header">
      <div class="header-title">OUR TEAM</div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4" v-for="b in barbers">
          <div class="profile">
            <a href="check_in">
              <img src="@/assets/imgs/profile.png" width="100%">
            </a>
            <h4>{{b.f_name}} {{b.l_name}}</h4>
            <p>{{b.description}}</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="profile">
            <a href="barber_setup">
              <img src="@/assets/imgs/SVG/add.svg" width="100%">
            </a>
            <h4>ADD NEW BARBER</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name:"Barber",
        data(){
            return {
                barbers:""
            }
        },
        methods:{
        },
        beforeMount(){
            fetch('https://stormwalker.herokuapp.com/get_barbers.php', {
                method:"POST"
            }).then((response)=>{
                return response.json();
            }).then((json)=>{
                if(json){
                    this.barbers = json;
                }
            });
        }
    }
</script>