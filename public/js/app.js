$(document).ready(function() {
  $("#goTweet").click(function(e) {
    e.preventDefault();
    
    newTweet = $("#newTweet").val();

    data = {
      tweet: newTweet
    }

    $.post('/tweets/create', data);
  });

  $("#giveTweet").click(function(e) {
    e.preventDefault();
    alert("Nah Nah");
  });

  $("#signin_button").click(function(e) {
    e.preventDefault();

    usernameData = $("#usernameInput").val();
    passwordData = $("#passwordInput").val();
    
    data = {
      username: usernameData,
      password: passwordData
    }

    $.post('/user/signin', data, function(response) {
      if (response=='good') {
        window.location = '/tweets';
      } else {
        alert("Bad password, Login again!");
      }
    });
  });
});