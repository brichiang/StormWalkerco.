<template>
  <div id="barber">
    <div class="row">
      <div class="col-md-6">
        <div class="title-box">
          <div class="title-box2">
            <div class="title">SIGNUP <strong>NOW.</strong></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">SIGNUP.</div>
            <form>
              <div class="form-group">
                <label for="f_name">FIRST NAME</label><br/>
                <input type="text" name="f_Name" id="f_name" class="form-input" v-model="f_Name"/>
              </div>
              <div class="form-group">
                <label for="l_name">LAST NAME</label><br/>
                <input type="text" name="l_Name" id="l_name" class="form-input" v-model="l_Name"/>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label><br/>
                <input type="phone" name="phone" id="phone" class="form-input" v-model="phone"/>
              </div>
              <div class="form-group">
                <label for="email">Email</label><br/>
                <input type="email" name="email" id="email" class="form-input" v-model="email"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label><br/>
                <input type="password" name="password" id="password" class="form-input" v-model="password"/>
              </div>
              <div class="form-group">
                <label for="r_password">Repeat Password</label><br/>
                <input type="password" name="r_password" id="r_password" class="form-input" v-model="r_password"/>
              </div>
            </form>
            <div class="buttom-box">
              <button class="form-buttom" @click="SignUp">SIGNUP</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name:"SignUp",
        data(){
            return {
                f_Name:"",
                l_Name:"",
                phone:"",
                email:"",
                password:"",
                r_password:""
            }
        },
        methods:{
            SignUp: function(){
                
                var fd = new FormData();
                fd.append("fname", this.f_Name);
                fd.append("lname", this.l_Name);
                fd.append("email", this.email);
                fd.append("phone", this.phone);
                fd.append("password", this.password);
                
                fetch('https://stormwalker.herokuapp.com/insert_user.php', {
                    method:"POST",
                    body:fd,
                }).then((response)=>{
                    return response.json();
                }).then((json)=>{
                    if(json){
                      alert("Account Created Successfuly");
                      window.location.href = "/Login";
                    }
                });
            }
        }
    }
</script>