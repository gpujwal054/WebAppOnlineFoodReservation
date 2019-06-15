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
  var admin_id = document.getElementById("admin_signUp");
  var category = firebase.database().ref("category");
  var category_id = document.getElementById("cats");
  var sub_cat = firebase.database().ref("sub-category");
  var subcat_id = document.getElementById("subcat");
  var adminSignUp = firebase.database().ref("adminSignUp");
  var adminSignUp_id = document.getElementById("btnSignUp");
  var text = firebase.database().ref("textArea");
  var text_id = document.getElementById("termsConditions");

function item(){
  var items1 = firebase.database().ref("item").child(document.getElementById("food_name").value);
  items1.child("Food Name").set(document.getElementById("food_name").value);
  items1.child("Category").set(document.getElementById("category").value);
  items1.child("Price").set(document.getElementById("price").value);
  items1.child("Description").set(document.getElementById("desc").value);
  items1.child("Image").set(document.getElementById("fileButton").value);
  items1.child("Keyword").set(document.getElementById("kwrd").value);
}
function tabs(){
  var tables1 = firebase.database().ref("tables").child(document.getElementById("tab_name").value);
  tables1.child("Table Name").set(document.getElementById("tab_name").value);
  tables1.child("Number of chairs").set(document.getElementById("nums_chair").value);
  tables1.child("Table Location").set(document.getElementById("tab_location").value);
}
function cats(){
  var category1 = firebase.database().ref("category").child(document.getElementById("cat_name").value);
  category1.child("Category Name").set(document.getElementById("cat_name").value);
  category1.child("Description").set(document.getElementById("desc").value);
  category1.child("Image").set(document.getElementById("fileButton").value);
  category1.child("Keywords").set(document.getElementById("kwrd").value);
}
function subcat(){
  var sub_cat1 = firebase.database().ref("sub-category").child(document.getElementById("subCat_name").value);
  sub_cat1.child("Sub-category name").set(document.getElementById("subCat_name").value);
  sub_cat1.child("Category Name").set(document.getElementById("cat_name").value);
  sub_cat1.child("Description").set(document.getElementById("desc").value);
  sub_cat1.child("Image").set(document.getElementById("fileButton").value);
  sub_cat1.child("Keywords").set(document.getElementById("kwrd").value);
}

// Login authentication
firebase.auth().onAuthStateChanged(function(user){
  if (user) {
    // user is signed in
    document.getElementById("user_div").style.display="block";
    document.getElementById("user_div").style.display="none";

    var user = firebase.auth().currentUser;

    if (user != null) {
      var email_id = user.email;
      var email_verified = user.emailVerified;

      if (email_verified) {
        document.getElementById("verify_btn").style.display = "none";
      } else {
        document.getElementById("verify_btn").style.display = "block";
      }
      document.getElementById("user_para").innerHTML = "Welcome :" + email_id + "<br/> Verified:" + email_verified;
  
    } else {
      document.getElementById("user_div").style.display = "none";
      document.getElementById("login_div").style.display = "block";
    }
  }
});

function termsConditions(){
  var text1 = firebase.database().ref("Terms and Conditions").child("Terms and conditions").set(document.getElementById("terms").value);
}

function login(){
  var userEmail1 = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
    window.alert("Error:"+errorMessage);
    // ...
  });
}

function create_account(){
  var userEmail1 = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().createUserWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
    window.alert("Error:"+errorMessage);
    // ...
  });
}

function logout(){
  firebase.auth().signOut();
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


