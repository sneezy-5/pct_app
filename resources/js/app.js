require('./bootstrap');

/*import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();*/


var subtbn =document.querySelector('.send');

subtbn.addEventListener('click', ()=>{
	axios.post('/message',{
		'message':document.querySelector('.message').value,
		'room_id':document.querySelector('.room_id').value,
	});
});





function createOrReturnPrivateChat(id){
			
payload = {
	'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>',
	"user2_id": id,
}

$.ajax({
	type: 'POST',
	dataType: "json",
	url: "{{ route('massage.chat') }}", // production
	data: payload,
	timeout: 5000,
	success: function(data) {
		console.log("SUCCESS", data)
		
		if(data['response'] == "Successfully got the chat."){
			chatroomId = data['chatroom_id']
			OnGetOrCreateChatroomSuccess(chatroomId, id)
		}
		else if(data['response'] != null){
			alert(data['response'])
		}
	},
	error: function(data) {
		console.error("ERROR...", data)
		alert("Something went wrong.")
	},
});
}


function OnGetOrCreateChatroomSuccess(chatroomId, id){
	var url = "{{ route('room')}}?room_id=" + chatroomId 
	var win = window.location.replace(url)
	// window.open(url) // for new tab
	win.focus()
}


const CHAT_NOTIFICATION_INTERVAL=4000

	const notificationSocket = new WebSocket(
		'ws://'
		+ window.location.host
		
	);

	/*
		Retrieve the number of unread chat notifications. (This is the red dot in the notifications icon)
		Called every CHAT_NOTIFICATION_INTERVAL
	*/
	function getUnreadChatNotificationsCount(){
		if("{{auth()->user()->chech()}}"){
			notificationSocket.send(JSON.stringify({
				"command": "get_unread_chat_notifications_count",
			}));

			notificationSocket.onmessage = function(e) {
		console.log(e.data);

		const data = JSON.parse(e.data);
		//document.querySelector('.control').innerHTML="a"
		}
		   
		}
	}

	/*
		Retrieve the next page of chat notifications
		Called when the user scrolls to the bottom of the popup menu.
	
	function getNextChatNotificationsPage(){
		var pageNumber = document.getElementById("id_chat_page_number").innerHTML
		// -1 means exhausted or a query is currently in progress
		if("{{request.user.is_authenticated}}" && pageNumber != "-1"){
			notificationSocket.send(JSON.stringify({
				"command": "get_chat_notifications",
				"page_number": pageNumber,
			}));
		}
	}*/
	
	/*
		Retrieve any new chat notifications
		Called every CHAT_NOTIFICATION_INTERVAL seconds
   
	function getNewChatNotifications(){
		//newestTimestamp = document.getElementById("id_chat_newest_timestamp").innerHTML
		//console.log("NEWEST TS: " + newestTimestamp)
		if("{{request.user.is_authenticated}}"){
			notificationSocket.send(JSON.stringify({
				"command": "get_new_chat_notifications",
				"newest_timestamp": newestTimestamp,
			}));
		}
	} */

	/*
		Retrieve the number of unread chat notifications. (This is the red dot in the notifications icon)
		Called every CHAT_NOTIFICATION_INTERVAL
	*/
	function getFirstChatNotificationsPage(){
		if("{{request.user.is_authenticated}}"){
			notificationSocket.send(JSON.stringify({
				"command": "get_chat_notifications",
				"page_number": "1",
			}));
			getUnreadChatNotificationsCount()
		}
	}

	/*
		Start the functions that will be executed constantly
	*/
	function startChatNotificationService(){
		if("{{request.user.is_authenticated}}" == "True"){
			//setInterval(getNewChatNotifications, CHAT_NOTIFICATION_INTERVAL)
			setInterval(getUnreadChatNotificationsCount, CHAT_NOTIFICATION_INTERVAL)
		}
	}

	startChatNotificationService()

	/**
		Helpers for assigning ids to important elements.
	**/
	function assignChatDiv1Id(notification){
		return "id_chat_div1_" + notification['notification_id']
	}

	function assignChatImgId(notification){
		return "id_chat_img_" + notification['notification_id']
	}

	function assignChatTitleId(notification){
		return "id_chat_title_" + notification['notification_id']
	}

	function assignChatroomMessageId(notification){
		return "id_chat_message_" + notification['notification_id']
	}

	function assignChatDiv2Id(notification){
		return "id_chat_div2_" + notification['notification_id']
	}

	function assignChatTimestampId(notification){
		return "id_timestamp_" + notification['notification_id']
	}

	function assignChatCardId(notification){
		return "id_notification_" + notification['notification_id']
	}

	function setChatInitialTimestamp(){
		// ('%Y-%m-%d %H:%M:%S.%f')
		var today = new Date();
		var date = today.getFullYear() + "-01-01 01:00:00.000000"
		//document.getElementById("id_chat_newest_timestamp").innerHTML = date
	}

	setChatInitialTimestamp()
