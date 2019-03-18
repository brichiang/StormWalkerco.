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
              <img src="@/assets/imgs/profile.gif" width="100%" class="barberImg">
            </a>
            <h4>{{b.f_name}} {{b.l_name}}</h4>
            <p>{{b.description}}</p>
            
            <div>
              <button class="schedule-but" @click="open_update(b.barber_id)" >UPDATE</button>
              <button class="schedule-but" @click="open_modal(b.barber_id)">DELETE</button>
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
                      <input type="text" name="f_name" id="f_name" class="modal-input" v-model="f_name" required>
                    </div>
                    <div class="modal-group">
                      <label for="l_name">LAST NAME</label>
                      <br/>
                      <input type="text" name="l_name" id="l_name" class="modal-input" v-model="l_name" required>
                    </div>
                    <div class="modal-group">
                      <label for="description">DESCRIPTION</label>
                      <br/>
                      <textarea name="description" id="description" class="form-control" rows="5" v-model="description" required></textarea>
                    </div>
                      <div class="modal-group">
                        <label for="image">PROFILE</label><br/>
                        <input type="file" name="image" id="image" accept="image/*"/>
                      </div>
                    </form>
                    <div class="buttom-box">
                      <button class="modal-button" @click="Update">UPDATE</button>
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
                  <button class="modal-button" @click="Delete">CONFIRM</button>
                  <button class="modal-button" @click="close_modal">CANCEL</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4" v-if="this.account == false">
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
              update: false,
              barber_id:"",
              f_name:"",
              l_name:"",
              description:"",
              account:false
            }
        },
        methods:{
          open_modal: function(barber_id) {
            this.barber_id = barber_id;
            this.modal = true;
          },
          close_modal: function() {
            this.modal = false;
          },
          open_update: function(barber_id) {
            this.barber_id = barber_id;
            this.update = true;
          },
          close_update: function() {
            this.update = false;
          },
          Delete: function() {
            var fd = new FormData();
            fd.append("barber_id", this.barber_id);
            
            fetch('https://stormwalker.herokuapp.com/delete_barber.php', {
              method:"POST",
              body:fd,
            }).then((response)=>{
              return response.json();
            }).then((json)=>{
              if(json){
                alert("Barber Deleted Successfuly");
                location.reload();
              }
            });
          },
          Update: function() {
            var fd = new FormData();
            fd.append("barber_id", this.barber_id);
            fd.append("f_name", this.f_name);
            fd.append("l_name", this.l_name);
            fd.append("description", this.description);
            
            fetch('https://stormwalker.herokuapp.com/update_barber.php', {
              method:"POST",
              body:fd,
            }).then((response)=>{
              return response.json();
            }).then((json)=>{
              if(json){
                alert("Barber Updated Successfuly");
                location.reload();
              }
            }); 
          }
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
          if(localStorage.isUser === "yes"){
            this.account = true;
          } else {
            this.account = false;
          }
        }
    }
</script>