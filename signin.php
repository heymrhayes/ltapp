<!DOCTYPE html>
<html>
<head>

    <meta name="google-signin-client_id" content="466686405732-8e9j1kgs5bo1uu41pc4gkltlhonbka70.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- bootswatch cosmo theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #signedIn {display:none;}
    </style>
</head>
<body>
    <div id="notSignedIn" class="container">
        <div class="jumbotron">
          <h1>Lane Tech Data Applications</h1>
          <p>You'll have to log in with your @cps.edu account to access the applications.</p>
          <p><div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div></p>
        </div>
    </div>
    <div id="signedIn" class="container">
        
        <div class="alert alert-success">

              <strong>Logged in!</strong> You're logged in to the Lane Tech Data Applications..
        </div>
        <div>
        <p>
            <a href="admin.php">Admin</a><br>
            
            <a href="teacher.php">Teacher</a>
        </p>
            
        <p><a href="#" onclick="signOut();">Sign out</a></p>
        </div>
    </div>
    <script>
      var id_token;
      if (typeof gapi != "undefined" && gapi.auth2.getAuthInstance().isSignedIn.get()) {
            $("#notSignedIn").hide();
            $("#signedIn").show();
      }
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        
        $("#notSignedIn").hide();
        $("#signedIn").show();
        
      }
      
      
      
      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
      }
    </script>
 


</body>