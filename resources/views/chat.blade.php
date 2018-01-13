<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Chat online with any clients</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<style>
		.list-group{
			overflow-y: scroll;
			max-height: 200px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row" id="app">
			<div class=" offset-4 col-4">
				<li class="list-group-item active">Chatroom</li>
				<ul class="list-group" v-chat-scroll>
				  
				  <message
					v-for="value,index in chat.message"
					:key=value.index
					color='success'
					:user = chat.user[index]

				  >
				  	@{{ value }}
				  </message>
				  
				</ul>
				<input type="text" class="form-control" placeholder="Type your message here" v-model='message' @keyup.enter='send'>
			</div>
			
		</div>
	</div>

	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>