firebase.initializeApp({
    apiKey: "AIzaSyDcoaTJr1K6PfTy8ylKI_9-m4j7VtPH8t8",
  authDomain: "nodemce.firebaseapp.com",
  databaseURL: "https://nodemce.firebaseio.com",
  projectId: "nodemce",
  storageBucket: "nodemce.appspot.com",
  messagingSenderId: "284670480170",
  appId: "1:284670480170:web:0b9a03e6f635b4cbcf9853",
  measurementId: "G-G7STTWM1NK"
});

  
  //listen for submit event//(1)
  document
    .getElementById('registrationform')
    .addEventListener('submit', formSubmit);
  
  //Submit form(1.2)
  function formSubmit(e) {
    e.preventDefault();
    // Get Values from the DOM
    let number = document.querySelector('#number').value;
    let email = document.querySelector('#email').value;
    let c_id = document.querySelector('#c_id').value;
    let contact = document.querySelector('#contact').value;
    let status = document.querySelector('#status').value;
  
    //send message values
    sendMessage();
  
    //Show Alert Message(5)
    document.querySelector('.alert').style.display = 'block';
  
    //Hide Alert Message After Seven Seconds(6)
    setTimeout(function() {
      document.querySelector('.alert').style.display = 'none';
    }, 7000);
  
    //Form Reset After Submission(7)
    document.getElementById('registrationform').reset();
  }
  
  //Send Message to Firebase(4)

  function sendMessage() {
   
 
  var db = firebase.firestore();
 
  db.collection("complaints").doc().set({
    num: number,
    ID: c_id,
    email: email,
    contact: contact,
    col_flag: status,
})
.then(function() {
    console.log("Document successfully written!");
})
.catch(function(error) {
    console.error("Error writing document: ", error);
});



 

  }