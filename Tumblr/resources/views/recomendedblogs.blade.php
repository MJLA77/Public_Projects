<div class="blogstitle">

    <p>RECOMMENDED USERS</p>            

</div>

<?php foreach ($recommendedblogs as $recommended):?>  

<div class="blogs">


  
    <div class=blogdeets>

        
        <div class="blogpic">

            <a href="/<?php echo $recommended->id?>">
            <img src=<?php echo $recommended->recblogimage?> alt=""> 
            
        </div>
    
        <div class="blogtitle">

            <p><?php echo $recommended->recblogtitle?></p>
            <p id="blogdesc" ><?php echo $recommended->recblogdesc?></p>
            </a>
        </div>
    
    </div>

</div>
<?php endforeach; ?>