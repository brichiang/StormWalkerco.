<template>
  <div id="check-in">
    <div class="container">
      <div class="left-container">
        <h1>CHECK IN NOW.</h1>
      </div>
      <div class="right-container">
        <div class="form">
          <h1>CHECK IN</h1>
          <form>
            <div class="inputBox">
              <table class="inpTable">
                <tr>
                  <th><label for="date">DATE</label></th>
                </tr>
                <tr>
                  <td><input type="date" name="date" id="date" class="inp"/></td>
                </tr>
                <tr>
                  <th><label for="time">TIME</label></th>
                </tr>
                <tr>
                  <td><input type="time" name="time" id="time" class="inp"/></td>
                </tr>
                <tr>
                  <th><label for="description" >DESCRIPTION</label></th>
                </tr>
                <tr>
                  <td><textarea name="description" id="description" class="inp"></textarea></td>
                </tr>
                <tr>
                  <th><label for="image">IMAGE</label></th>
                </tr>
                <tr>
                  <td>
                    <input type="file" name="image" id="image" accept="image/*" class="inp"/>
                  </td>
                </tr>
              </table>
            </div>
            <button id="submit">CHECK IN</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
  
</style>