<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>
<div id="main">
	  <nav class="mainnavbar sticky-top navbar navbar-expand-lg navbar-light bg-light">
	  <button class="openbtn" onclick="openNav()">&#9776; Account Name</button> 
      <div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
      	<li class="nav-item active">
        	<a class="nav-link" href="#">Home </a>
     	 </li>
      	<li class="nav-item">
        	<a class="nav-link" href="#">Features</a>
      	</li>
      	<li class="nav-item">
        	<a class="nav-link" href="#">Pricing</a>
      	</li>
    	</ul>
    <span class="navbar-text">

      	Dota2Blog

    </span>
</div>
</nav>

<div class="form-group">
  <label for="exampleFormControlTextarea3">Article: </label>
  <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>

</div>
<form action="myform.cgi"> <input type="file" name="fileupload" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <button class="publish"> Publish Post</button> <br></form>
  <script>
	/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>

