<template>
  <div id="login">
    <div class="row">
      <div class="col-md-6">
        <div class="title-box">
          <div class="title-box2">
            <div class="title">LOGIN <strong>NOW</strong></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">LOGIN</div>
            <form>
              <div class="form-group">
                <label for="email">Email</label><br/>
                <input type="email" name="email" id="email" class="form-input" v-model="email" />
              </div>
              <div class="form-group">
                <label for="password">Password</label><br/>
                <input type="password" name="password" id="password" class="form-input" v-model="password" />
              </div>
            </form>
            <div class="buttom-box">
              <button class="form-buttom" @click="Login">LOGIN</button>
              <button class="form-buttom2" @click="Signup">SIGNUP</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name:"Login",
        data(){
            return {
                email:"",
                password:"",
                isUser:"",
                isLogin:""
            }
        },
        methods:{
            Signup: function(){
              this.$router.push('/user');
            },
            Login: function(){
                
                var fd = new FormData();
                fd.append("email", this.email);
                fd.append("password", this.password);
                
                fetch('https://stormwalker.herokuapp.com/check_login_users.php', {
                    method:"POST",
                    body:fd,
                }).then((response)=>{
                    return response.json();
                }).then((json)=>{
                    console.log(json);
                    if(json.length == 0 || "" || null){
                      
                      fetch('https://stormwalker.herokuapp.com/check_login_barbers.php', {
                        method:"POST",
                        body:fd,
                      }).then((response)=>{
                        return response.json();
                      }).then((json)=>{
                        if(json.length == 0 || "" || null){
                          alert("Incorrect email/password, please try again");
                        } else {
                          sessionStorage.setItem("isUser", "no");
                          sessionStorage.setItem("isLogin", "yes");
                          sessionStorage.setItem("barberName", json[0].f_name);
                          this.$router.push('/myaccount');
                        }
                      });
                      
                    } else {
                      sessionStorage.setItem("isUser", "yes");
                      sessionStorage.setItem("isLogin", "yes");
                      sessionStorage.setItem("userName", json[0].f_name);
                      this.$router.push('/myaccount');
                    } 
                  
                  });
            }
        }
    }
</script>