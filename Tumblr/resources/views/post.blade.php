@extends('layout')

@section('content')
    
    <form class="mt-3 text-white" action="/post" method="post">
        <?php echo csrf_field() ?>

        <h3 class="ml-3">Enter Your Post</h3>

        <?php if($err = $errors->first('blogintro')):?>
           <span class="error"><?php echo $err?> </span>
        <?php endif; ?>

        <div class="form-group">
    
            <input type="text"
                class="form-control" 
                name="blogintro" 
                value="" 
                placeholder="Enter your blog title!"
            />

        <?php if($err = $errors->first('handle')):?>
           <span class="error"><?php echo $err?> </span>
        <?php endif; ?>

            <input type="text"
                class="form-control" 
                name="handle" 
                value="" 
                placeholder="Handle"
            />
            
        <?php if($err = $errors->first('mainblogpic')):?>
           <span class="error"><?php echo $err?> </span>
        <?php endif; ?>        

            <input type="text"
                class="form-control" 
                name="mainblogpic" 
                value="" 
                placeholder="Enter your pic address!!"
            />

        <?php if($err = $errors->first('blogquote')):?>
           <span class="error"><?php echo $err?> </span>
        <?php endif; ?>        

            <input type="text"
                class="form-control" 
                name="blogquote" 
                value="" 
                placeholder="Enter your quote!!"
            />

        <?php if($err = $errors->first('hashtags')):?>
           <span class="error"><?php echo $err?> </span>
        <?php endif; ?>        

            <input type="text"
                class="form-control" 
                name="hashtags" 
                value="" 
                placeholder="Enter your hashtags!!"
            />            
               
        </div>
    
        <input class="btn btn-primary ml-5" 
               type="submit" 
               name="submit" 
               value="Submit"
        />

        
       
    </form>
    

@endsection