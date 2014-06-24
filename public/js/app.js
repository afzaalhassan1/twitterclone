$(document).ready(function() {
  $("#goTweet").click(function(e) {
    e.preventDefault();
    
    newTweet = $("#newTweet").val();
    $("#newTweet").val('');

    data = {
      tweet: newTweet
    }

    $.post('/tweets/create', data, function(response) {
      newTweetId = response;

      $.get('/tweets/getTweet/' + newTweetId, function(response) {

        response = JSON.parse(response);

        newTweetHtml = '<div class="panel panel-default"> \
            <div class="panel-heading">Username</div> \
            <div class="panel-body"> \
              <p>';
        newTweetHtml += response.tweet;
        newTweetHtml += '</p> \
              <div class="row"> \
                <div class="col-md-2">';
        newTweetHtml += response.tweet_time;

        newTweetHtml += '</div> \
                <div class="col-md-2 col-md-offset-8"> \
                  <button class="btn btn-primary giveTweet" type="button">Reply</button> \
                </div> \
              </div> \
            </div> \
          </div>'

        $('#allTweets').prepend(newTweetHtml);
      });
    });
  });

  $(".giveReplies").click(function(e) {
    e.preventDefault();
    alert('work');
    replyModal = $("#replyModal").modal();

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