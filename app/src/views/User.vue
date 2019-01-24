<template>
  <div id="user">
    <div class="container">
      <div class="left-container">
        <h1>CHECK IN NOW.</h1>
      </div>
      <div class="right-container">
        <div class="form">
          <h1>Signup</h1>
          <form>
            <div class="inputBox">
               <table class="inpTable">
                 <tr>
                   <th><label for="f_name">First Name</label></th>
                   <th><label for="l_name">Last Name</label></th>
                 </tr>
                 <tr>
                   <td><input type="text" name="f_Name" id="f_name" class="inp"/></td>
                   <td><input type="text" name="l_Name" id="l_name" class="inp"/></td>
                 </tr>
                  <tr>
                    <th colspan="2"><label for="phone">Phone</label></th>
                 </tr>
                 <tr>
                   <td colspan="2"><input type="phone" name="phone" id="phone" class="inp"/></td>
                 </tr>
                 <tr>
                   <th colspan="2"><label for="email">Email</label></th>
                 </tr>
                 <tr>
                   <td colspan="2"><input type="email" name="email" id="email" class="inp"/></td>
                 </tr>
                 <tr>
                   <th><label for="password">Password</label></th>
                   <th><label for="r_password">Repeat Password</label></th>
                 </tr>
                 <tr>
                   <td>
                     <input type="password" name="password" id="password" class="inp"/>
                   </td>
                   <td>
                     <input type="password" name="r_password" id="r_password" class="inp"/>
                   </td>
                 </tr>
               </table>
             </div>
            <button id="signupBut">Signup</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>