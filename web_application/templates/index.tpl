{config_load file="test.conf" section="setup"}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left">{$headerText}</h1></div>
      
    </div>
    <div class="row">
        {include file="leftnav.tpl"}
        <div class="col-md-9">
            <h4 class="text-primary">News &amp; Updates</h4>
            <hr>
            
            {foreach $news as $n}  
                {if isset($newsID)}
                    {if $n.id eq $newsID}
                <div class = "bpcms_news_box">
                    <h4 class="text-info">{$n.title}<small> posted on {$n.date}</small></h4>
                    <p class="text-justify">{$n.content}</p>
                    
                </div>
                    {/if}
                {else}
                     <div class = "bpcms_news_box">
                    <h4 class="text-info">{$n.title}<small> posted on {$n.date}</small></h4>
                    <p class="text-justify" id="smallNews">{$n.content}</p>
                    <a href="?act=index&news={$n.id}">&gt;&gt; See full post!</a>
                </div>
                {/if}
            {foreachelse}
                <div class="col-md-12">
                <div class="alert alert-info" role="alert"><span class="text-primary"><strong>No news post found. :(</strong></span></div>
                </div>
            {/foreach}
        </div>
    </div>
