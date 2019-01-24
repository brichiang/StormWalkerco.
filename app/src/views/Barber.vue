<template>
  <div id="barber">
    <div class="container">
      <div class="left-container">
        <h1>BARBER SETUP.</h1>
      </div>
      <div class="right-container">
        <div class="form">
          <h1>BERBER SETUP</h1>
          <form>
            <div class="inputBox">
              <table class="inpTable">
                <tr>
                  <th><label for="f_name">FIRST NAME</label></th>
                  <th><label for="l_name">LAST NAME</label></th>
                </tr>
                <tr>
                  <td><input type="text" name="f_Name" id="f_name" class="inp"/></td>
                  <td><input type="text" name="l_Name" id="l_name" class="inp"/></td>
                </tr>
                <tr>
                  <th colspan="2"><label for="description">DESCRIPTION</label></th>
                </tr>
                <tr>
                  <td colspan="2"><textarea name="description" id="description" class="inp"></textarea></td>
                </tr>
                <tr>
                  <th><label for="image">PROFILE</label></th>
                </tr>
                <tr>
                  <td>
                    <input type="file" name="image" id="image" accept="image/*" class="inp"/>
                  </td>
                </tr>
              </table>
            </div>
            <button id="submit">SETUP</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>