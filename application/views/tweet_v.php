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
    <div id="allTweets">
      <?php foreach ($tweets as $tweet): ?>
        <div class="panel panel-default">
          <div class="panel-heading">Username</div>
          <div class="panel-body">
            <p><?php echo $tweet['tweet']; ?></p>
            <div class = "row">
              <div class="col-md-2"><?php echo $tweet['tweet_time']; ?></div>
              <div class="col-md-2 col-md-offset-8">
                <button type="button" class="btn btn-primary giveReplies">Reply</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="replyModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Reply to Tweet</h4>
        </div>
        <div class="modal-body">
          <form class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only">Enter your Reply</label>
              <input type="text" class="form-control" placeholder="Enter your Reply" id="replyModal">
            </div>
          </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="giveReplies">Post</button>
        </div>
      </div>
    </div>
  </div>
  <div class= "col-md-8">
    <div id="allReplies">
      <?php foreach ($tweets as $tweet): ?>
        <div class="panel panel-default">
          <div class="panel-heading">Username</div>
          <div class="panel-body">
            <p><?php echo $tweet['tweet']; ?></p>
            <div class = "row">
              <div class="col-md-2"><?php echo $tweet['tweet_time']; ?></div>
              <div class="col-md-2 col-md-offset-8">
                <button type="button" class="btn btn-primary giveReplies">Reply</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>