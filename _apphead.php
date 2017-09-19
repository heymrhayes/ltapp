<!DOCTYPE html>
<html>
<head>
    <meta name="google-signin-client_id" content="466686405732-8e9j1kgs5bo1uu41pc4gkltlhonbka70.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/platform.js"></script>
    <!-- bootswatch cosmo theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      
    
      var id_token;
      var permissions = [];
      var user = {};
      
      function onSignIn(googleUser) {
            console.log(googleUser);
            console.log( "signedin");
            // Useful data for your client-side scripts:
            var profile = googleUser.getBasicProfile();
            var name = profile.getName();
            console.log("Name: " + name);
            $("#userFullName").prepend(name);
            $("#user").show();

            user["email"] = profile.getEmail();
            user["username"] = profile.getEmail().split("@")[0];
            
            if (user["username"] == 'dphayes') {
              user["username"] = 'jbsolin';
            }
    
            id_token = googleUser.getAuthResponse().id_token;            
            loadProfileValues(user['username']);
            $("#signInMessage").hide();
        };

        gapi.load('auth2', function() {
            console.log("gapi.load");
            gapi.auth2.init({
              client_id: '466686405732-8e9j1kgs5bo1uu41pc4gkltlhonbka70.apps.googleusercontent.com'

            }).then(function(auth2) {
                auth2.isSignedIn.listen(signinChanged);
                console.log( "signed in: " + auth2.isSignedIn.get() );  
                if(!auth2.isSignedIn.get()) {
                  // var button = document.querySelector('#signInButton');
                  //   button.addEventListener('click', function() {
                  //     auth2.signIn();
                  //   });
                 $("#signOut").hide();
                }
                else {
                   showScreen('#home');
                   $("#signOut").show();
                   //$("#signInButton").hide();
                }
                
                
                
            });
        });
        
        
        function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
            console.log('User signed out.');
            
            $("#user").hide();
            showScreen('#home');
            id_token = "";
            $("input").val("");
          });
          $("#signInMessage").show();
        }
    </script>
    
    <script>
    var auth2; // The Sign-In object.
    var googleUser; // The current user.
    
    /**
     * Calls startAuth after Sign in V2 finishes setting up.
     */
    var appStart = function() {
      console.log('appStart');
      gapi.load('auth2', initSigninV2);
    };
    
    /**
     * Initializes Signin v2 and sets up listeners.
     */
    var initSigninV2 = function() {
      console.log('initSigninV2');
      auth2 = gapi.auth2.init({
          client_id: '466686405732-8e9j1kgs5bo1uu41pc4gkltlhonbka70.apps.googleusercontent.com'
        //   ,
        //   scope: 'profile'
      });
    
      // Listen for sign-in state changes.
      auth2.isSignedIn.listen(signinChanged);
    
      // Listen for changes to current user.
      auth2.currentUser.listen(userChanged);
    
      // Sign in the user if they are currently signed in.
      if (auth2.isSignedIn.get() == true) {
        auth2.signIn();
      }
    
      // Start with the current live values.
      refreshValues();
    };
    
    /**
     * Listener method for sign-out live value.
     *
     * @param {boolean} val the updated signed out state.
     */
    var signinChanged = function (val) {
      console.log('Signin state changed to ' + val);
      if (val) {
        $("#signOut").show();
        showScreen("#home");
      }
      //document.getElementById('signed-in-cell').innerText = val;
    };
    
    /**
     * Listener method for when the user changes.
     *
     * @param {GoogleUser} user the updated user.
     */
    var userChanged = function (user) {
      console.log('User now: ', user);
      googleUser = user;
      refreshValues();
      //updateGoogleUser();
    //   document.getElementById('curr-user-cell').innerText =
    //     JSON.stringify(user, undefined, 2);
    };
    
    /**
     * Updates the properties in the Google User table using the current user.
     */
    var updateGoogleUser = function () {
      if (googleUser) {
        document.getElementById('user-id').innerText = googleUser.getId();
        document.getElementById('user-scopes').innerText =
          googleUser.getGrantedScopes();
        document.getElementById('auth-response').innerText =
          JSON.stringify(googleUser.getAuthResponse(), undefined, 2);
      } else {
        document.getElementById('user-id').innerText = '--';
        document.getElementById('user-scopes').innerText = '--';
        document.getElementById('auth-response').innerText = '--';
      }
    };
    
    /**
     * Retrieves the current user and signed in states from the GoogleAuth
     * object.
     */
    var refreshValues = function() {
      if (auth2){
        console.log('Refreshing values...');
    
        googleUser = auth2.currentUser.get();
    
        // document.getElementById('curr-user-cell').innerText =
        //   JSON.stringify(googleUser, undefined, 2);
        // document.getElementById('signed-in-cell').innerText =
        //   auth2.isSignedIn.get();
        
        if (auth2.isSignedIn.get()) {
            console.log("auth2.isSignedIn.get()",auth2.isSignedIn.get());
            $("#signedIn").show();
            $("#signIn").hide();
        }
        else {
            $("#signedIn").hide();
            $("#signIn").show();        
        }
    
        updateGoogleUser();
      }
    }

    function showScreen(strSelector) {
       console.log(strSelector);
          $("#notification").hide();
          $(".screen").hide();
          $(strSelector).show();
    }



    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
    
    // table export extension
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>


    <!-- Latest compiled and minified Locales -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>-->
    <link rel="stylesheet" href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css" >
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LT Apps</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="#home">Today<span class="sr-only">(current)</span></a></li>
        
        <li><a href="#myStudents">My Students</a></li>
        <li><a href="#myTasks">My Tasks</a></li>
        <li><a href="#resources">Resources</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Create<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#commLog">Communications Log</a></li>
            <li><a href="#demerit">Demerit</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Search<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#studentSearch">Student Search</a></li>
            <li><a href="#staffSearch">Staff Search</a></li>
            <li><a href="#communicationLogSearch">Communication Log Search</a></li>
            <li><a href="#absenceSearch">Student Absence Search</a></li>
            <!--<li><a href="#demerit">Demerit</a></li>-->
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">My Entries<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#myCommunicationLogEntries">Communications Log</a></li>
            <li><a href="#myDemeritEntries">Demerits</a></li>
          </ul>
        </li>
        <li><a style="background-color:green; color: white;" target="blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeNl9iwtazJmHZxGN6gsG4RSJh2RRIGPDOuAk-e2d4N8_kL1A/viewform">Feedback</a></li>
        
      </ul>

      
      
      <ul id="user" class="nav navbar-nav navbar-right" style="display:none;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" id="userFullName"><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#profile">Profile</a></li>
            <li><a href="#myDepartments">Departments</a></li>
            <li><a href="#myCourseSections">Course Sections</a></li>
            <!--<li><a href="#">Something else here</a></li>-->
            <li class="divider"></li>
            <li id="signOut"><a href="#home" onclick="signOut();">Logout <span class="glyphicon glyphicon-log-out" style="color:#1a6ecc;" aria-hidden="true"></span></a></li>
            
            <!--<li><a href="#">Separated link</a></li>-->
            <!--<li class="divider"></li>-->
            <!--<li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
        
        <!--<li id="signIn"><div id="signInButton" class="g-signin2" data-onsuccess="onSignIn"></div></li>-->
      </ul>
    </div>
  </div>
</nav>
