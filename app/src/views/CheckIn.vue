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
                <input type="date" name="date" id="date" class="form-input" v-model="date" />
              </div>
              <div class="form-group">
                <label for="time">TIME</label><br/>
                <input type="time" name="time" id="time" class="form-input" v-model="time" />
              </div>
              <div class="form-group">
                <label for="description">DESCRIPTION</label><br/>
                <textarea name="description" id="description" class="form-control" v-model="description" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label for="image">PROFILE</label><br/>
                <input type="file" name="image" id="image" accept="image/*" v-on:change="image" />
              </div>
            </form>
            <div class="buttom-box">
              <button class="form-buttom" @click="CheckIn">CHECK IN</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name:"CheckIn",
        data(){
            return {
                date:"",
                time:"",
                description:"",
                image:""
            }
        },
        methods:{
            CheckIn: function(){
                
                var fd = new FormData();
                fd.append("date", this.date);
                fd.append("time", this.time);
                fd.append("description", this.description);
                fd.append("image", this.image);
                
                fetch('http://localhost:8888/StormWalkerco.server/insert_appointment.php', {
                    method:"POST",
                    body:fd,
                }).then((response)=>{
                    return response.json();
                }).then((json)=>{
                    if(json){
                        alert("Appointment Created Successfuly")
                    }
                });
            }
        }
    }
</script>