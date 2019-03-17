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
              <img src="@/assets/imgs/profile.gif" width="100%">
            </a>
            <h4>{{b.f_name}} {{b.l_name}}</h4>
            <p>{{b.description}}</p>
            <div>
              <button class="schedule-but" @click="open_update">UPDATE</button>
              <button class="schedule-but" @click="open_modal">DELETE</button>
            </div>
          </div>
          <!--Update Barber Modal-->
          <div v-if="update == true" class="modal-form">
              <div class="modal-body">
                <div class="modal-box">
                  <div class="modal-title">UPDATE BARBER</div>
                  <form>
                    <div class="modal-group">
                      <label for="name">FIRST NAME</label>
                      <br/>
                      <input type="text" name="f_name" id="f_name" class="modal-input">
                    </div>
                    <div class="modal-group">
                      <label for="l_name">LAST NAME</label>
                      <br/>
                      <input type="text" name="l_name" id="l_name" class="modal-input">
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
                      <button class="modal-button">UPDATE</button>
                    </div>
                  </div>
                  <button @click="close_update" class="modal-button">CLOSE</button>
                </div>
            </div>
          <!--Delete Barber Modal-->
          <div class="confirm-box"  v-if="modal == true">
              <div class="confirm-box2">
                <div class="modal-title"><strong>DELETE BARBER</strong></div>
                <div class="buttom-box">
                  <button class="modal-button">CONFIRM</button>
                  <button class="modal-button" @click="close_modal">CANCEL</button>
                </div>
              </div>
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
              barbers:"",
              modal: false,
              update: false
            }
        },
        methods:{
          open_modal: function() {
            this.modal = true;
          },
          close_modal: function() {
            this.modal = false;
          },
          open_update: function() {
            this.update = true;
          },
          close_update: function() {
            this.update = false;
          },
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