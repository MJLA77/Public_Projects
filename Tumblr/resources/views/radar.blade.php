<div class="blogstitle">

<p>RADAR</p>            

</div>
<?php foreach ($radarBlogs as $onYourRadar):?>
<div class="blogs">


    <div class=blogdeets>

    
        <div class="blogpic">

            <img src=<?php echo $onYourRadar->radarBlogAvatar?> alt=""> 

        </div>

        <div class="blogtitle">

            <p class=raderuseralias><?php echo $onYourRadar->radarUserAlias?></p>

            <p id="blogdesc"><?php echo $onYourRadar->radarBlogDesc?></p>

        </div>

        <div class="plussign">

            <i class="fas fa-plus-square"></i>

        </div>    

    </div>

    <div class="radarimage">  

        <img src= <?php echo $onYourRadar->radarBlogImg?> alt="">

    </div>   
</div>
<?php endforeach; ?>