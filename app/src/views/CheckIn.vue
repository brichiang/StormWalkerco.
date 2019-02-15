<template>
  <div id="barber">
    <div class="row">
      <div class="col-md-6">
        <!-- <div class="title-box">
          <div class="title-box2">
            <div class="title">CHECK IN <strong>NOW.</strong></div>
          </div>
        </div> -->
        <div class="appoint-box">
          <div class="appoint-box2">
            <div class="appoint-title">BOOKED APPOINTMENTS</div>
            <table>
              <tr>
                <th>BARBER</th>
                <th>DATE</th>
                <th>TIME</th>
              </tr>
              <tr v-for="a in appointments">
                <td v-if="a.barber_id === '1'">Brian</td>
                <td v-else-if="a.barber_id === '2'">Matei</td>
                <td v-else-if="a.barber_id === '3'">Bryan</td>
                <td>{{a.date}}</td>
                <td>{{a.time}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-box">
          <div  class="form-box2">
            <div class="form-title">CHECK IN</div>
            <form>
              <div class="form-group">
                <label for="barber">BARBER</label>
                <br/>
                <div class="form-input">
                  <select name="barber" id="barber" class="select-box" v-model="barber_id" >
                    <option value=""></option>
                    <option value="Brian">BRIAN</option>
                    <option value="Matei">MATEI</option>
                    <option value="Bryan">BRYAN</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="date">DATE</label>
                <br/>
                <input type="date" name="date" id="date" class="form-input" v-model="date" />
              </div>
              <div class="form-group">
                <label for="time">TIME</label><br/>
                <div class="form-input">
                  <select name="time" id="time" class="select-box" v-model="time">
                    <option value=""></option>
                    <option value="11:00am">11:OOAM</option>
                    <option value="11:30am">11:3OAM</option>
                    <option value="12:00pm">12:OOPM</option>
                    <option value="12:30pm">12:3OPM</option>
                    <option value="01:00pm">1:OOPM</option>
                    <option value="01:30pm">1:3OPM</option>
                    <option value="02:00pm">2:OOPM</option>
                    <option value="02:30pm">2:3OPM</option>
                    <option value="03:00pm">3:OOPM</option>
                    <option value="03:30pm">3:3OPM</option>
                    <option value="04:00pm">4:OOPM</option>
                    <option value="04:30pm">4:3OPM</option>
                    <option value="05:00pm">5:OOPM</option>
                    <option value="05:30pm">5:3OPM</option>
                    <option value="06:00pm">6:OOPM</option>
                    <option value="06:30pm">6:3OPM</option>
                    <option value="07:00pm">7:0OPM</option>
                    <option value="07:30pm">7:3OPM</option>
                  </select>
                </div>
                <!-- <input type="time" name="time" id="time" class="form-input" v-model="time" /> -->
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
                image:"",
                barber_id:"",
                appointments:""
            }
        },
        methods:{
            CheckIn: function(){
                
                var fd = new FormData();
                fd.append("date", this.date);
                fd.append("time", this.time);
                fd.append("description", this.description);
                fd.append("image", this.image);
                if (this.barber_id === "Brian"){
                    fd.append("barber_id", 1);
                } if (this.barber_id === "Matei"){
                      fd.append("barber_id", 2);
                  } if (this.barber_id === "Bryan"){
                        fd.append("barber_id", 3);
                    }
                
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
        },
        beforeMount(){
            fetch('http://localhost:8888/StormWalkerco.server/get_appointments.php', {
                method:"POST"
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