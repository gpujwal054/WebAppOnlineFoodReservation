 
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

function item(){
  var items1 = firebase.database().ref("item").child(document.getElementById("food_name").value);
  items1.child("Food Name").set(document.getElementById("food_name").value);
  items1.child("Category").set(document.getElementById("category").value);
  items1.child("Price").set(document.getElementById("price").value);
  items1.child("Description").set(document.getElementById("desc").value);
  items1.child("Image").set(document.getElementById("img").value);
  items1.child("Keyword").set(document.getElementById("kwrd").value);

}
function tabs(){
  var tables1 = firebase.database().ref("tables").child(document.getElementById("tab_nums").value);
  tables1.child("Table Number").set(document.getElementById("tab_nums").value);
  tables1.child("Table Location").set(document.getElementById("tab_location").value);
}

