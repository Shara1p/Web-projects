<?php
  include 'header.txt';
  include 'menu.txt';
?> 

<!--  section 3-->
<div id="section3"  class="section3">
  <div class="container mt-3">
  <h3>Заполнение формы</h3>
  <p>Отправте форму после заполнения.</p>
  <form action="/action_page.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Действительно.</div>
      <div class="invalid-feedback">Пожалуйста, заполните это поле.</div>
    </div>
    <div class="mb-3 mt-3">
      <label for="exampleInputEmail1" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Действительно.</div>
      <div class="invalid-feedback">Пожалуйста, заполните это поле.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Действительно.</div>
      <div class="invalid-feedback">Пожалуйста, заполните это поле.</div>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">Я согласен на блабла.</label>
      <div class="valid-feedback">Действительно.</div>
      <div class="invalid-feedback">Установите этот флажок, чтобы продолжить.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</div>
</div>