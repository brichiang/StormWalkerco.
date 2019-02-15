<template>
  <div id="barber-setup">
    <div class="row">
      <div class="col-md-6">
        <div class="title-box">
          <div class="title-box2">
            <div class="title">BARBER SETUP.</div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">BARBER SETUP</div>
            <form>
              <div class="form-group">
                <label for="f_name">FIRST NAME</label><br/>
                <input type="text" name="f_Name" id="f_name" class="form-input" v-model="f_Name" />
              </div>
              <div class="form-group">
                <label for="l_name">LAST NAME</label><br/>
                <input type="text" name="l_Name" id="l_name" class="form-input" v-model="l_Name" />
              </div>
              <div class="form-group">
                <label for="email">EMAIL</label><br/>
                <input type="text" name="email" id="email" class="form-input" v-model="email" />
              </div>
              <div class="form-group">
                <label for="password">PASSWORD</label><br/>
                <input type="password" name="password" id="password" class="form-input" v-model="password" />
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
              <button class="form-buttom" @click="Setup">SETUP</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name:"BarberSetup",
        data(){
            return {
                f_Name:"",
                l_Name:"",
                email:"",
                password:"",
                description:"",
                image:""
            }
        },
        methods:{
            Setup: function(){
                
                var fd = new FormData();
                fd.append("fname", this.f_Name);
                fd.append("lname", this.l_Name);
                fd.append("email", this.email);
                fd.append("password", this.password);
                fd.append("description", this.description);
                fd.append("image", this.image);
                
                fetch('http://localhost:8888/StormWalkerco.server/insert_barber.php', {
                    method:"POST",
                    body:fd,
                }).then((response)=>{
                    return response.json();
                }).then((json)=>{
                    if(json){
                        alert("Account Created Successfuly")
                    }
                });
            }
        }
    }
</script>
