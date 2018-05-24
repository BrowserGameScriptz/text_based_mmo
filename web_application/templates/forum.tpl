{config_load file="test.conf" section="setup"}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left">{$headerText}</h1></div>
      
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-primary">BackpackCMS Community Forum</h4>
            <hr>
            <div class = "row" style="margin-left:20px">
            {if isset($topicID)}
                {foreach $forumTopics as $fT}
                    {if $fT.id eq $topicID}
                        <div class="row">
                                   <h4 class="text-primary">{$fT.title} forum board</h4>
                        </div>
                        <!--- Forum Post design --->
                        <div class = "row">
                            <div class = "col-md-3">
                                 <span class="text-info">
                                    {foreach $users as $u}
                                        {if $fT.topic_creator eq $u.id} 
                                            {if $u.admin eq 3}
                                                <span style="color:red;">
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                            {if $u.admin eq 2}
                                                    <span style="color:green;">
                                                    {$u.first_name} {$u.last_name}
                                                    </span>
                                            {/if}
                                     
                                            {if $u.admin eq 1}
                                                <span style="color:yellow;">
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                     
                                            {if $u.admin eq 0}
                                                <span>
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                        {/if}
                                    {/foreach}
                                </span>
                            </div>
                            <div class="col-md-9">
                                    {$fT.topic_text|nl2br}
                            </div>
                        </div>
                        <!--- Forum Post design end--->
                    {/if} 
                    {foreach $forumPosts as $fP}
                        {if $fP.belongs_to eq $topicID}
                        <!--- Forum Post design --->
                        <div class = "row " id="{$fP.id}" style="margin-top:20px">
                            <hr>
                            <div class = "col-md-3">
                                 <span class="text-info">
                                    {foreach $users as $u}
                                        {if $fP.post_maker eq $u.id} 
                                             {if $fT.topic_creator eq $u.id} 
                                            {if $u.admin eq 3}
                                                <span style="color:red;">
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                            {if $u.admin eq 2}
                                                <span style="color:green;">
                                                 {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                     
                                            {if $u.admin eq 1}
                                                <span style="color:yellow;">
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                     
                                            {if $u.admin eq 0}
                                                <span>
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                        {/if}
                                        {/if}
                                    {/foreach}
                                    <br> posted on {$fP.date}
                                </span>
                            </div>
                            <div class="col-md-9">
                                    {$fP.post_text|nl2br}
                            </div>
                        </div>
                        <!--- Forum Post design end--->
                    {/if} 
                    
                       
                    {/foreach}       
                {/foreach}   
                    {if isset($uid)}
                            {include file="topic_reply.tpl"}
                    {/if}
            {else}
                {if isset($boardID)}
                    {foreach $forumBoards as $fB}
                                    {if $fB.id eq $boardID}
                                        <div class="row">
                                            <h4 class="text-primary">{$fB.name} forum board
                                            <small class="pull-right">
                                            
                                             {if isset($uid)}
                                                  <a href="?act=topic_create&board={$boardID}">CREATE TOPIC</a>
                                            {/if}
                                            </small>
                                            
                                            </h4>
                                            
                                            
                                        </div>
                                    {/if} 
                     {/foreach}
                          {foreach $forumTopics as $fT}
                                {if $fT.belongs_to eq $boardID}
                                    <div class="row" style="margin-left:20px;margin-top:20px;">
                                            <span class="text-info"><a href="?act=forum&board={$boardID}&topic={$fT.id}">{$fT.title}</a>, posted on {$fT.date}</span>
                                            <br>
                                            <span class="text-info">by 
                                            {foreach $users as $u}
                                                {if $fT.topic_creator eq $u.id} 
                                                    {if $fT.topic_creator eq $u.id} 
                                            {if $u.admin eq 3}
                                                <span style="color:red;">
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                            {if $u.admin eq 2}
                                                    <span style="color:green;">
                                                    {$u.first_name} {$u.last_name}
                                                    </span>
                                            {/if}
                                     
                                            {if $u.admin eq 1}
                                                <span style="color:yellow;">
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                     
                                            {if $u.admin eq 0}
                                                <span>
                                                {$u.first_name} {$u.last_name}
                                                </span>
                                            {/if}
                                        {/if}
                                                {/if}
                                            {/foreach}

                                            </span>
                                            <br>

                                    </div>
                    
                               {/if}
                        {/foreach}
                    {else}
                        {foreach $forumCats as $fC}  
                            <div class = "bpcms_news_box">
                                <h4 class="text-info">{$fC.name}</h4>
                                {if isset($forumBoards)} 
                                    {foreach $forumBoards as $fB}
                                        {if $fB.cat eq $fC.id}
                                            <div class="row" style="margin-left:40px">
                                                <span class="text-info"><a href="?act=forum&board={$fB.id}">{$fB.name}</a></span>
                                                <br>
                                                {$fB.description}
                                            </div>
                                        {/if}                      
                                    {/foreach}
                                {/if}
                            </div>              
                        {/foreach}
                {/if}
            {/if}
        </div>

        </div>
    </div>
