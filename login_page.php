<body >
<style type="text/css">
  input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.container1{
  float:left;
  background-color:#ff3d3d;
}
.container2{
  float:left;
  background-color:#4286f4;
  
}
</style>
<form action="action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container1 col-md-6">
    <h2> Login </h2>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw">| Forgot <a href="#">password?</a></span>
  </div>
  <div class="container2 col-md-6">
     <h2> Sign-up </h2>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="repsw"><b>Retype Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw">| Forgot <a href="#">password?</a></span>
  </div>
  </div>
</form>
</body>