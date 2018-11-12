<?php 
foreach ($blogData as $newIncomingBlog):?>  
<div class="blogfeed"> 

    <div class=blogfeedheader>

        <p class="blogintroduction"> <?php echo $newIncomingBlog->blogintro ?></p>
        <p class="blogdesc"><?php echo $newIncomingBlog->blogdesc?></p>

            
            <!-- is getting the handle which is part of my profile which belongs to the user -->
            <p class="follow"> <?php echo $newIncomingBlog->user->profile->handle?></p> 
            
            <p class="date"> <?php $newIncomingBlog->created_at->format('M j') ?></p>
        
        <div class="blogrightbuttons">

            <p class="blogx"><i class="fas fa-times"></i> </p>
            <p class="blogcompass"><i class="far fa-compass fa-2x"></i></p>  

        </div>
    </div>  

    <div class="blogpicanddetails">

        <img src="<?php  echo $newIncomingBlog->mainblogpic?>" alt="">

    </div>

    <div class=blogfeedfooter >

        <p class="blogquote"><?php echo $newIncomingBlog->blogquote?></p>
        <p class="hashtags"> <?php  echo $newIncomingBlog->hashtags?> </p>  
    
        <div class=footerdetails>

            <div class="notetrack" >

                <p>228 notes</p>
      
            </div>

            <div class="blogfooterlinks">

                <i class="fas fa-share"></i>
                <i class="far fa-comment"></i>
                <i class="fas fa-retweet"></i> 

                <div class=likes> 
                    
                    <i class="far fa-heart"></i>
                    
                </div>
                
            </div>   



        </div>

    </div>  
                          
</div>
<?php endforeach; ?> 