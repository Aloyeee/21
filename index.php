<!DOCTYPE html>
<html>
<head>
	<title>Admin Chat</title>
</head>

<style type="text/css">
	
	@font-face{

		font-family: headFont;
		src: url(ui/fonts/Summer-Vibes-OTF.otf);
	}

	@font-face{

		font-family: myFont;
		src: url(ui/fonts/Poppins-semibold.ttf);
	}

	@font-face{

		font-family: msgFont;
		src: url(ui/fonts/Poppins-Regular.ttf);
	}
	@font-face{

	font-family: msgcFont;
	src: url(ui/fonts/Poppins-Light.ttf);
	}


	

#wrapper{

		max-width:900px;
		min-height: 500px;
		max-height: 630px;
		display:flex;
		margin: auto;
		color: white;
		font-family: myFont;
		font-size: 13px;
	}

	#left_pannel{

		min-height: 500px;
		background-color: #BE313F;
		flex: 1;
		text-align: center;

	}

	#profile_image{

		width: 50%;
		border: solid thin white;
		border-radius: 50%;
		margin:10px;

	}

	#left_pannel label{

		width: 100%;
		height: 20px;
		display: block;
		background-color: #dc3545;
		border-bottom:solid thin #ffffff55; 
		cursor: pointer;
		padding: 5px;
		transition: all 1s ease;
	}

	#left_pannel label:hover{
 
		background-color: #778593;
	}

	#left_pannel label img{

		float: right;
		width:25px;
	}

	#right_pannel{

		min-height: 500px;
		flex: 4;
		text-align: center;
	}

	#header{

		background-color: #dc3545;
		height:70px;
		font-size: 40px;
		text-align: center;
		font-family: headFont;
		position: relative;
	}
	
	#inner_left_pannel{

		background-color: #5E2F33;
		flex: 1;
		min-height: 430px;
		max-height: 530px;
	}


	#inner_right_pannel{

		background-color: #f2f7f8;
		flex: 2;
		min-height: 430px;
		transition: all 2s ease;
		max-height: 530px;
	}

	#radio_contacts:checked ~ #inner_right_pannel{

		flex: 0;
	}

	#radio_settings:checked ~ #inner_right_pannel{

		flex: 0;
	}
 
 	#contact{

 		width: 100px;
 		height: 120px;
 		margin: 10px;
 		display: inline-block;
 		vertical-align: top;
  	}
	
	#contact img{

		width: 100px;
		height: 100px;
  	}

 	#active_contact{

  		height: 50px;
 		margin: 20px;
		text-margin:10px;
 		border: ;
		padding-left:13px;
		padding-bottom:13px;
		padding-top:13px;
		padding-right:13px;
 		background-color: #AD4C54;
 		color: white;
		text-align: center;
		position:center;
		border-radius: 7px;

   	}
	
	#active_contact img{

		width: 45px;
		height: 45px;
		float:left;
		margin:2px;
		border-radius: 50%;
		border: solid 2px white;
		position: auto;
		
  	}
	
	#message_left{

		margin: 10px;
  		padding:2px;
  		padding-right:10px;
 		background-color:transparent;
 		color: #000000;
 		float:left;
 		box-shadow: 0px 0px 10px #aaa;
  		position: relative;
  		width:60%;
  		min-width: 125px;
		border-radius:15px;
		font-size:15px;
		text-align:left;
   	}
	
	#message_left #prof_img{

		width: 30px;
		height: 30px;
		float:left;
		margin:2px;
		border-radius: 50%;
		border: solid 2px white;
  	}


	#message_right{

  		margin: 10px;
  		padding:2px;
  		padding-right:10px;
 		background-color: #E72A3A;
 		color: white;
 		float:right;
 		box-shadow: 0px 0px 10px #aaa;
  		position: relative;
  		width:60%;
  		min-width: 200px;
		border-radius:15px;
		font-size:15px;
		text-align:right;
		
   	}
	#msgr{

		margin: 13px;
		font-family:msgFont;
		text-align:right;
		padding-right:15px;
		padding-left:15px;
		font-size:12px;
		color:white;
		
	}
	#msgl{

		margin: 10px;
		font-family:msgFont;
		text-align:left;
		padding-right:15px;
		padding-left:15px;
		font-size:12px;
		color:black;
	

	}
	#tickr{

		position:bottom;


	}
	#message_right #prof_img{

		width: 30px;
		height: 30px;
		float:left;
		margin:2px;
		border-radius: 50%;
		border: solid 2px white;
  	}

  	#message_right div img{

		width: 25px;
		height: 18px;
		float:none;
		margin:0px;
		border-radius: 50%;
		border: none;
		position:absolute;
		top:30px;
		right:10px;
  	}



  	.loader_on{

  		position: absolute;
  		width: 30%;
   	}

	.loader_off{

  		display: none;
   	}

   	.image_on{

  		position: absolute;
   		height: 450px;
  		width: 450px;
   		margin:auto;
  		z-index: 10;
  		top:50px;
  		left:50px;
   	}

	.image_off{

  		display: none;
   	}


	
</style>
<body>

	<div id="wrapper">
		
		<div id="left_pannel">

			<div id="user_info" style="padding: 10px;">
				<img id="profile_image" src="ui/images/user_male.jpg" style="height: 100px;width: 100px;">
				<br>
				<span id="username">Username</span>
				<br>

				
				<br>
				<br>
				<br>
				<div>
					<label id="label_chat" for="radio_chat">Chat <img src="ui/icons/chat.png"></label>
					<label id="label_contacts" for="radio_contacts">Contacts <img src="ui/icons/contacts.png"></label>
					<label id="logout" for="radio_logout">Logout <img src="ui/icons/logout.png"></label>
				</div>

			</div>

		</div>
		<div id="right_pannel">
			<div id="header">
				<div id="loader_holder" class="loader_on"><img style="width:70px;" src="ui/icons/giphy.gif"></div>

				<div id="image_viewer" class="image_off" onclick="close_image(event)"></div>
				Admin Chat
			</div>
			
			<div id="container" style="display: flex;">
 				
				<div id="inner_left_pannel">
			 
				
				</div>

				<input type="radio" id="radio_chat" name="myradio" style="display: none;">
				<input type="radio" id="radio_contacts" name="myradio" style="display: none;">
				<div id="inner_right_pannel">
					
				</div>

			</div>
		</div>

	</div>
</body>
</html>

<script type="text/javascript">
	
	var sent_audio = new Audio("message_sent.mp3");
	var received_audio = new Audio("message_received.mp3");

	var CURRENT_CHAT_USER = "";
	var SEEN_STATUS = false;

	function _(element){

		return document.getElementById(element);
	}

	var label_contacts = _("label_contacts");
	label_contacts.addEventListener("click",get_contacts);
	
	var label_chat = _("label_chat");
	label_chat.addEventListener("click",get_chats);
	
	var logout = _("logout");
	logout.addEventListener("click",logout_user);

	function get_data(find,type){

		var xml = new XMLHttpRequest();
		var loader_holder = _("loader_holder");
		loader_holder.className = "loader_on";

		xml.onload = function (){

			if(xml.readyState == 4 || xml.status == 200){

				loader_holder.className = "loader_off";
				handle_result(xml.responseText,type);
			}

		}

		var data = {};
		data.find = find;
		data.data_type = type;
		data = JSON.stringify(data);

		xml.open("POST","api.php",true);
		xml.send(data);
	}

	function handle_result(result,type){

		if(result.trim() != ""){

			var inner_right_pannel = _("inner_right_pannel");
			inner_right_pannel.style.overflow = "visible";

			var obj = JSON.parse(result);
			if(typeof(obj.logged_in) != "undefined" && !obj.logged_in){

				window.location = "login.php";
			}else{

				switch(obj.data_type){

					case "user_info":
						var username = _("username");
						var profile_image = _("profile_image");

						username.innerHTML =  obj.username;
						profile_image.src =  obj.image;
						break;
				
					case "contacts":
						
						var inner_left_pannel = _("inner_left_pannel");
 
						inner_right_pannel.style.overflow = "hidden";
						inner_left_pannel.innerHTML =  obj.message;
						break;


					case "chats_refresh":
						SEEN_STATUS = false;
						var messages_holder = _("messages_holder");
						messages_holder.innerHTML =  obj.messages;
						if(typeof obj.new_message != 'undefined'){
							if(obj.new_message){
								received_audio.play();

								setTimeout(function(){
									messages_holder.scrollTo(0,messages_holder.scrollHeight);
									var message_text = _("message_text");
									message_text.focus();
								},100);

							}
						}

						
						break;

					case "send_message":
						sent_audio.play();
					case "chats":
						SEEN_STATUS = false;
						var inner_left_pannel = _("inner_left_pannel");
 
						inner_left_pannel.innerHTML =  obj.user;
						inner_right_pannel.innerHTML =  obj.messages;

						var messages_holder = _("messages_holder");
						
						setTimeout(function(){
							messages_holder.scrollTo(0,messages_holder.scrollHeight);
							var message_text = _("message_text");
							message_text.focus();
						},100);
						
						if(typeof obj.new_message != 'undefined'){
							if(obj.new_message){
								received_audio.play();
							}
						}

						break;
					
					case "send_image":
						alert(obj.message);
						break;
  

				}
			}
		}
	}

	function logout_user()
	{
		var answer = confirm("Apakah Anda Yakin Untuk Keluar??");
		if(answer){
			get_data({},"logout");
		}
	}

	get_data({},"user_info");
	get_data({},"contacts");
	
	var radio_contacts = _("radio_contacts");
	radio_contacts.checked = true;

	function get_contacts(e)
	{

		get_data({},"contacts");
	}

	function get_chats(e)
	{

		get_data({},"chats");
	}

	
	function send_message(e)
	{

		var message_text = _("message_text");
		if(message_text.value.trim() == ""){
			
			alert("Tulis Sesuatu Untuk Memulai Obrolan");
			return;
		}

 		get_data({

			message:message_text.value.trim(),
			userid :CURRENT_CHAT_USER

		},"send_message");

	}

	function enter_pressed(e)
	{
		if(e.keyCode == 13)
		{
			send_message(e);
		}

		SEEN_STATUS = true;
	}

	setInterval(function(){

		var radio_chat = _("radio_chat");
		var radio_contacts = _("radio_contacts");
		if(CURRENT_CHAT_USER != "" && radio_chat.checked)
		{
			
    			get_data({
    				userid:CURRENT_CHAT_USER,
    				seen:SEEN_STATUS
    			},"chats_refresh");
		}


		if(radio_contacts.checked)
		{
			
    		get_data({},"contacts");
		}
  
	},5000);

	function set_seen(e){

		SEEN_STATUS = true;
	}


</script>

<script type="text/javascript">

  
   	function collect_data(){

   		var myform = _("myform");
   		var inputs = myform.getElementsByTagName("INPUT");

   		var data = {};
   		for (var i = inputs.length - 1; i >= 0; i--) {

   			var key = inputs[i].name;

   			switch(key){

   				case "username":
   					data.username = inputs[i].value;
   					break;
				
				case "gender":
    				if(inputs[i].checked){
   						data.gender = inputs[i].value;
   					}
   					break;

   			}
   		}

   	}




   	function handle_drag_and_drop(e){

   		if(e.type == "dragover"){

   			e.preventDefault();
   			e.target.className = "dragging";

   		}else if(e.type == "dragleave"){

   			e.target.className = "";

   		}else if(e.type == "drop"){

   			e.preventDefault();
   			e.target.className = "";

    		upload_profile_image(e.dataTransfer.files);
   		}else{

   			e.target.className = "";
   		}
   	}


   	function start_chat(e){

   		var userid = e.target.getAttribute("userid");
   		if(e.target.id == ""){
   			userid = e.target.parentNode.getAttribute("userid");
   		}
   		
   		CURRENT_CHAT_USER = userid;

   		var radio_chat = _("radio_chat");
   		radio_chat.checked = true;
   		get_data({userid:CURRENT_CHAT_USER},"chats");

   	}

   	function send_image(files){

   		var filename = files[0].name;
   		var ext_start = filename.lastIndexOf(".");
   		var ext = filename.substr(ext_start + 1,3);
   		if(!(ext == "jpg" || ext == "JPG")){

   			alert("Tipe File Ini Tidak Didukung");
   			return;
   		}

     	var myform = new FormData();
   		var xml = new XMLHttpRequest();

   		xml.onload = function(){

   			if(xml.readyState == 4 || xml.status == 200){

   				handle_result(xml.responseText,"send_image");
   		 		get_data({
    				userid:CURRENT_CHAT_USER,
    				seen:SEEN_STATUS
    			},"chats_refresh");
   			}
   		}

		myform.append('file',files[0]);
		myform.append('data_type',"send_image");
		myform.append('userid',CURRENT_CHAT_USER);
 
		xml.open("POST","uploader.php",true);
		xml.send(myform);
   	}

   	function close_image(e){

   		e.target.className = "image_off";
   	}

   	function image_show(e){

   		var image = e.target.src;
   		var image_viewer = _("image_viewer");

   		image_viewer.innerHTML = "<img src='"+image+"' style='width:100%' />";
   		image_viewer.className = "image_on";
   	}



</script>