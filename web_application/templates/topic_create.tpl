<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left">{$headerText}</h1></div>
      
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-primary">Create a new forum topic</h4>
            <hr>
            
            <form class="form-register" action="./functions/topic_create.php" method="post"> 
                 <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">Topic title:</label>
                          <input class="form-control" id="about" name="topicTitle"/>
                        </div>
                    </div>
                
                </div>
                
                <div class = "form-group">
                    <div class = "col-md-12" style="padding:0px">
                        <div class="form-group">
                          <label for="comment">Topic text:</label>
                          <textarea class="form-control" rows="5" id="about" name="topicText"></textarea>
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
                <input type="text" value="{$boardID}" name="boardID" hidden/>
                </div>
            </form>
        </div>
    </div>
