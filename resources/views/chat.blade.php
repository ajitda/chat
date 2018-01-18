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
			<div class=" offset-3 col-6">
				<li class="list-group-item active">Chatroom <span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span></li>

				<ul class="list-group" v-chat-scroll>
				  
				  <message
					v-for="value,index in chat.message"
					:key=value.index
					:color=chat.color[index]
					:user = chat.user[index]
					:time = chat.time[index]

				  >
				  	@{{ value }}
				  </message>
				  
				</ul>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
				<input type="text" class="form-control" placeholder="Type your message here" v-model='message' @keyup.enter='send'>
			</div>
			
		</div>
	</div>

	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>