<header >

    <?php if(Auth::check()): ?>
        <div class=login>

            Hi, <?php echo request()->user()->name?>!
            
        </div>
        @include('logout')
    <?php else: ?>
        
            <a href="/login"> Log In</a>

    <?php endif; ?>


    <div class="logo">

        <i class="fab fa-tumblr fa-2x" ></i>

        <input type="text" placeholder="Search Tumblr">

    </div> 

    <?php if(Auth::check()): ?>

        <div class=forms>
            <a href="/profile"> Update Profile</a>
            <a href="/post">Post a Picture!</a>
            <a href=<?php echo $loggedUser->id?>>View my posts!</a>
            
        </div>

    <?php endif; ?>

    <div class="usertools">

        <i class="fas fa-home"></i>
        <i class="far fa-compass fa-2x"></i>
        <i class="fas fa-envelope"></i>
        <i class="far fa-smile-wink fa-2x"></i>
        <i class="fas fa-bolt fa-2x"></i>
        <i class="fas fa-user fa-2x"></i>

    </div>

    <div class=pencil>
 
        <i class="fas fa-pen fa-2x"></i>

    </div>  



 
    
</header>