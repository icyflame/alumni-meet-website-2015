
<br/>


<br/> <br/>
<?php if (isset($_SESSION['username'])){
		echo('<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#profile"> Hello '. $_SESSION['username'] .' </button><br/><br/><a class="btn btn-primary btn-lg" data-toggle="modal" href="logout.php">
  Log Out
<a/><br/>');
		
}else{echo('
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
  Login
</button><br/><br/>
<a class="btn btn-primary btn-lg"  href="form.php">
  Register
</a><br/>');}
?>
<!-- Modal -->
<div class="modal fade" id="login" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <form action="login.php">
			Username:<input type="text" name="username"/><br/><br/>
			Password:<input type="password" name="password" /><br/><br/>
			
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="submit" class="btn btn-primary" value="Login" /><br/>
		</form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="register" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width:850px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <?php include("register.php");?>
<br/><br/>
<script>
var i=0;
function add(){
if(i==0){
document.getElementById("details2").style.display="";
i++;
}
else if(i==1){
document.getElementById("details3").style.display="";
i++;}
else if(i==2){
document.getElementById("details4").style.display="";
i++;}



}
</script>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div><br/>

	<a href="https://www.facebook.com/iitkgp.alumnicell" target="a_blank">
		<img src="social-images/facebook.gif" height="40px" width="40px">
	</a> <br/> <br/>

	<a href="https://www.facebook.com/IIT.Kgp/app_116943498446376" target="a_blank">
		<img src="social-images/twitter.png" height="35px" width="44px">
	</a> <br/> <br/>

	<a href="#" target="a_blank">
		<img src="social-images/linkedin.png" height="48px" width="58px">
	</a> <br/> <br/>

</div>