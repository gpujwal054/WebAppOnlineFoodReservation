var firebaseConfig = {
	apiKey: "AIzaSyAV8j1EPH4DZRHqXe6BqBd7Uhod1kThqgw",
	authDomain: "onlinefoodreservation-1259e.firebaseapp.com",
	databaseURL: "https://onlinefoodreservation-1259e.firebaseio.com",
	projectId: "onlinefoodreservation-1259e",
	storageBucket: "onlinefoodreservation-1259e.appspot.com",
	messagingSenderId: "224923572874",
	appId: "1:224923572874:web:fa270093766d1426"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	var uploader = document.getElementById('uploader');
	var fileButton = document.getElementById('fileButton');
	fileButton.addEventListener('change',function(e){
	var file = e.target.files[0];
	var storageRef = firebase.storage().ref('images/' + file.name);
	var task = storageRef.put(file);
	task.on('state_changed', function progress(snapshot){
		var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
		uploader.value = percentage;
		},
		function error(err){},
		function complete(){}
		);
	});