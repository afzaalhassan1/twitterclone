<div class="row">
  <div class="col-md-4">
    <h3><?php echo $user_data['username']; ?></h3>
    <form class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only">Enter your Tweet</label>
        <input type="text" class="form-control" placeholder="Enter your Tweet" id="newTweet">
      </div>
      <button type="submit" class="btn btn-primary" id="goTweet">GO TWEET!</button>
      <br />
      <a href="/user/logout">Logout</a>
    </form>
  </div>
  <div class= "col-md-8">
    <h3>TWEETS!</h3>
    <?php foreach ($tweets as $tweet): ?>
      <div class="panel panel-default">
        <div class="panel-heading">Username</div>
        <div class="panel-body">
          <p><?php echo $tweet['tweet']; ?></p>
          <div class = "row">
            <div class="col-md-2"><?php echo $tweet['tweet_time']; ?></div>
            <div class="col-md-2 col-md-offset-8">
              <button type="button" class="btn btn-primary" id="giveTweet">Reply</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>