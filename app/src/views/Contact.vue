<template>
  <div id="contact">
    <div class="header">
      <div class="header-title">CONTACT</div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>HOURS</h1>
          <div class="column">
            <p><strong>MONDAY</strong></p>
            <p><strong>TUESDAY</strong></p>
            <p><strong>WEDNESDAY</strong></p>
            <p><strong>THURSDAY</strong></p>
            <p><strong>FRIDAY</strong></p>
            <p><strong>SATURDAY</strong></p>
            <p><strong>SUNDAY</strong></p>
          </div>
          <div class="column">
            <p>CLOSED</p>
            <p>11:00AM - 8:00PM</p>
            <p>11:00AM - 8:00PM</p>
            <p>11:00AM - 8:00PM</p>
            <p>11:00AM - 8:00PM</p>
            <p>11:00AM - 6:00PM</p>
            <p>CLOSED</p>
          </div>
        </div>
        <div class="col-md-6">
          <h1>CONTACT US</h1>
          <input type="text" name="Name" id="name" class="contact-input" placeholder="NAME"/>
          <input type="email" name="Email" id="email" class="contact-input" placeholder="EMAIL"/>
          <input type="text" name="Subject" id="subject" class="contact-input" placeholder="SUBJECT"/>
          <textarea name="description" id="description" class="contact-input" rows="3" placeholder="MESSAGE"></textarea>
          <button id="contact-but">SEND</button>
        </div>
      </div>
    </div>
  </div>
</template>