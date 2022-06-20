
<!DOCTYPE html>

<head>
<!--added for modal-->   
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- End angular modal-->

  <style>footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
}</style><style>

        	body {
  background-image: url("bg.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed;
			background-size: cover;}
			.box2 {
    background-color: rgba(0,0,0,.5);
    color: #fff;
}
</style>
  <style>
div.click-to-top span {
  display: none;
  position: bottom;
  bottom: 0;
  left: 10;
  right: 0;
  background: #333;
  color: #fff;
}

div.click-to-top:hover span {
  display: block;
}
</style>
<style>.tooltip-class {
    left: 10px;
    top: 10px;
}</style>
<script>$("#sideModalTLInfo").on('shown.bs.modal', function(){
   alert("Hello World!");
});</script>
<style>
.alert {
  padding: 20px;
  background-color: green;
  color: white;
}
.alertdan {
  padding: 20px;
  background-color: red;
  color: white;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<style>.box2 {
    background-color: rgba(0,0,0,.5);
    color: #fff;
}

</style>
<script type = "text/javascript">
var code = "C0ngrats!! The code is : IKNOWXSS"
</script>
</head>
<body oncontextmenu="return false;"> 
 
<div class="container">
  	 <div class="wrapper">
	   <div class="row">
		            <div class="col-lg-12" align="center">
					<br><br><br><br><br><br>
		            	  <div class="box box2">
						  <img src="logo3.png"><h1>XSS- DOM</h1>
						  </div>
			
		                
		            </div>
		        </div>
	    <div class="box box2">
	        <div class="container">
	    	  
	            <div class="row">
	        	   <div class="col-md-12" align="center">

                	
	<p>&nbsp;</p>
		 

		<form name="XSS" action="#" method="GET">
			<p>
				What's your name?
				<input type="text" name="name">
				<input type="submit" value="Submit">
			</p>

		</form>

<?php 


if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) 
{ 
 
    echo '<pre><span class="green-text">Hello ' . $_GET[ 'name' ] . '</span></pre>';  
} 

?> 
	


                   
                    </div>
					 </div>
                        <!-- /.inner -->
                    </div>
				
			    </div>
				<div class="row">
		            <div class="col-lg-12" align="center">
					<br><br>
		            	  <div class="box box2">
						  <h2>Information about XSS!!</h2>
						  What is DOM-based cross-site scripting?

DOM-based XSS vulnerabilities usually arise when JavaScript takes data from an attacker-controllable source, such as the URL, and passes it to a sink that supports dynamic code execution, such as eval() or innerHTML. This enables attackers to execute malicious JavaScript, which typically allows them to hijack other users' accounts.

To deliver a DOM-based XSS attack, you need to place data into a source so that it is propagated to a sink and causes execution of arbitrary JavaScript.

The most common source for DOM XSS is the URL, which is typically accessed with the window.location object. An attacker can construct a link to send a victim to a vulnerable page with a payload in the query string and fragment portions of the URL. In certain circumstances, such as when targeting a 404 page or a website running PHP, the payload can also be placed in the path. 
						  </div>
			
		                
		            </div>
		        </div>
				</div>
				
			</div>
			</div>

			
			
		

		
	   
	
	
		
<!-- Footer -->

  <!-- Footer Elements -->

</body>

<script>
var str = "Hi!! This is a beginners course for Ethical Hacking students.Practising Hacking without permission is Illegal.So before entering the course, please read the disclaimer -----------------INetSecurity.IN E-Learning Portal Legal Information."+" \ # This is a legal warning that you need to be very careful what you say and what you do.\ However, this should NOT hold you back from doing the things you want to do with your life.\ # It is strongly recommended that you read up on and practice good security culture (and here's a great place to start).\ Your usage of this website constitutes your agreement to the following terms.\ # Users are responsible for any content they put on INetSecurity.IN E-Learning Portal, whether it be in the form of articles,\ external resources, discussion board entries.";

var spans = '<span>' + str.split('').join('</span><span>') + '</span>';
$(spans).hide().appendTo('.css-typing').each(function (i) {
    $(this).delay(10 * i).css({
        display: 'inline',
        opacity: 0
    }).animate({
        opacity: 1
    }, 100);
});

</script>
<!-- Button trigger modal -->
<div class="modal fade" id="modalQuickView2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="background-image: url(img/bgf.jpg)">
<div class="modal-body" >
<div class="box box2"><div class="row"><div class="col-lg-8"><div class="flex-grid-thirds">
<h2 class="h2-responsive product-name" ><div align="center"><br><strong>Congratz! <?php echo $name;?></strong></div><br><div align="center"><h2><?php echo 'XSS Reflected | Task 1';?></h2></div>
</h2>
<h4><div align="center"> <span class="Green-text">You have Successfully completed the task.</span></div></h4><div class="row" align='center'></div><hr><div class="row" align='center'><div class="col" align='center'> <h4 class="h4-responsive"><span class="blue-text"><p class="rounded"> <strong align="center">Score :<?php echo "400";?></strong></p></span></h4></div><div class="col" align='center'><h4 class="h4-responsive"> <span class="blue-text">
              <p class="rounded">  <strong align="center">Coins :<?php echo "500";?></strong></p> </span></h4></div></div>
<div class="row" align='center'><div class="col" align="center"></div></div><hr> <div class="card-body"><div class="row"></div> <div class="text-center"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div></div>
</div> <audio id="aud">
      <source src="../../img/congz.mp3">
</audio>
</div></div></div></div>
<!--modal end-->


</html>
