 
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
  var admin = firebase.database().ref("admins");
  var admin_id = document.getElementById("admin");

function item(){
  var items1 = firebase.database().ref("item").child(document.getElementById("food_name").value);
  items1.child("Food Name").set(document.getElementById("food_name").value);
  items1.child("Category").set(document.getElementById("category").value);
  items1.child("Price").set(document.getElementById("price").value);
  items1.child("Description").set(document.getElementById("desc").value);
  items1.child("Keyword").set(document.getElementById("kwrd").value);
}
function tabs(){
  var tables1 = firebase.database().ref("tables").child(document.getElementById("tab_name").value);
  tables1.child("Table Name").set(document.getElementById("tab_name").value);
  tables1.child("Number of chairs").set(document.getElementById("nums_chair").value);
  tables1.child("Table Location").set(document.getElementById("tab_location").value);
}
function admin_signUp(){
  var admin1 = firebase.database().ref("admin").child(document.getElementById("admin_name").value);
  admin1.child("Full Name").set(document.getElementById("admin_name").value);
  admin1.child("Email").set(document.getElementById("admin_email").value);
  admin1.child("Password").set(document.getElementById("admin_pass").value);
}


