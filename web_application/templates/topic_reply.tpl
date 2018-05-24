
<form class="form-register" action="./functions/topic_reply.php" method="post"> 
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">Reply to the topic:</label>
                          <textarea class="form-control" rows="5" id="about" name="postText"></textarea>
                        </div>
                    </div>
                
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-3" style="padding:0px;">       
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit Reply</button>
                    </div>
                    <div class = "col-md-9" style="padding:0px; padding-left:12px;">
                        As there is no WYSIWYG editor, you can use HTML format to style the code.
                    </div>
                <input type="text" value="{$uid}" name="uid" hidden/>
                <input type="text" value="{$topicID}" name="topicID" hidden/>
                <input type="text" value="{$boardID}" name="boardID" hidden/>
                </div>
</form>