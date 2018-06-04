
    
<div class="container-fluid landing">
  
<div class="row h-100 no-gutters ">
<?php
 if(isset($this->notif) and !empty($this->notif)){?>
     <div class="alert alert-<?php echo $this->notif['type']; ?> alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
       <?php echo $this->notif['msg']; ?>
      </div>
 <?php } ?>
        
<div class="col-lg-6 left h-100 ">
  <div class="overlay"></div>
  <div class="leftIN">

 <div class="globe-container">  
  <div class="global">
    <span class="gl">G</span><span class="ob">LOB</span><span class="al">AL</span>
  </div>
  <div class="en">Entreprise</div>
 
</div>

  </div>

</div>

<div class="col-lg-6 right h-100">
 <div class="myform">
   <div class="text"> 
    
    <h1><span style="opacity: 1; text-transform: none;">Connectez-vous</span></h1>
    </div> 
 <form class="form-signin"  method="POST" action="<?php echo APP_URL; ?>Login">

 
      
      <label for="inputEmail" class="sr-only">adresse e-mail</label>
      <input type="email"  class="form-control" placeholder=" email" id="email" name="email" value="<?php echo @$_POST['email'];?>" required autofocus>
      <label for="inputPassword" class="sr-only">mot de passe</label>
      <input type="password" id="password"  name="password"class="form-control" placeholder="mot de passe"   required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox"  id="remember" name="remember" value="1"> Mémoriser
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block mybtn" type="submit" >Se connecter</button>
      <p class="mt-5 mb-3 text-muted">&copy;  GLOBE 2017-2018</p>
    </form>
</div>
   </div>
   
    </div>
     </div>
   <!--<div class="container">
 
  
-->
     <script>
     var hotbod = document.querySelector("body");

function doStuff() {
    hotbod.className += " animate";
}

window.onload = function() {
    doStuff();
};
    </script>


  </body>
</html>