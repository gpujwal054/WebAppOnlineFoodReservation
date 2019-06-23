	// Your web app's Firebase configuration
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
	var items = firebase.database().ref("items");
	var items_id = document.getElementById("item");
	var tables = firebase.database().ref("tables");
	var tables_id = document.getElementById("tabs");
	var category = firebase.database().ref("category");
	var category_id = document.getElementById("cats");
	var sub_cat = firebase.database().ref("sub-category");
	var subcat_id = document.getElementById("subcat");
	var text = firebase.database().ref("textArea");
	var text_id = document.getElementById("termsConditions");
	var img;

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
		function error(err){console.log(error);},
		function complete(){
			task.snapshot.ref.getDownloadURL().then(function(downloadURL){
				//Get your url from here
				console.log('File available at',downloadURL);
			img = downloadURL;	
			});
		}
		);
	});
function item(){
	var items1 = firebase.database().ref("item").child(document.getElementById("food_name").value);
	items1.child("item_name").set(document.getElementById("food_name").value);
	items1.child("category").set(document.getElementById("category").value);
	items1.child("sub_category").set(document.getElementById("sub-category").value);
	items1.child("price").set(document.getElementById("price").value);
	items1.child("description").set(document.getElementById("desc").value);
	items1.child("image").set(img);
	items1.child("keyword").set(document.getElementById("kwrd").value);
}
function tabs(){
	var tables1 = firebase.database().ref("tables").child(document.getElementById("tab_name").value);
	tables1.child("table_name").set(document.getElementById("tab_name").value);
	tables1.child("number_of_chairs").set(document.getElementById("nums_chair").value);
	tables1.child("table_location").set(document.getElementById("tab_location").value);
}
function cats(){
	var category1 = firebase.database().ref("category").child(document.getElementById("cat_name").value);
	category1.child("category_name").set(document.getElementById("cat_name").value);
	category1.child("description").set(document.getElementById("desc").value);
	category1.child("image").set(img);
	category1.child("keywords").set(document.getElementById("kwrd").value);
}
function subcat(){
	var sub_cat1 = firebase.database().ref("sub-category").child(document.getElementById("subCat_name").value);
	sub_cat1.child("sub_category_name").set(document.getElementById("subCat_name").value);
	sub_cat1.child("category_name").set(document.getElementById("category").value);
	sub_cat1.child("description").set(document.getElementById("desc").value);
	sub_cat1.child("image").set(img);
	sub_cat1.child("keywords").set(document.getElementById("kwrd").value);
}

function termsConditions(){
	var text1 = firebase.database().ref("Terms and Conditions").child("Terms and conditions").set(document.getElementById("terms").value);
}

function login(){
	var email = document.getElementById("userEmail").value;
	var password = document.getElementById("userPassword").value;
	firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
	  // Handle Errors here.
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  window.alert("Error")
	  // ...
	});
}

function btnSignUp(){
	var email=document.getElementById("userEmail").value;
	var password=document.getElementById("userPassword").value;
	firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
// Handle Errors here.
	var errorCode = error.code;
	var errorMessage = error.message;
	window.alert("User sign up successful");
});
}

function logout(){
	firebase.auth().signOut().then(function(){
		window.alert("Sign out successful");
	}).catch(function(error){
		window.alert("Sign out error");
	});
}

function send_verification(){
	var user = firebase.auth().currentUser;
	user.sendEmailVerification().then(function() {
		// Email sent.
		window.alert("Verification Sent");
	}).catch(function(error) {
		// An error happened.
		window.alert("Error:" + error.message);
	});
}

