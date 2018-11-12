@extends('layout')

@section('content')
    
    <form class="mt-3 text-white" action="/profile" method="post">
        <?php echo csrf_field() ?>

        <h3 class="ml-3">Enter Your Profile Information</h3>
        <div class="form-group">

        <?php if($err = $errors->first('name')):?>
           <span class="error"> <?php echo $err?> </span>
        <?php endif; ?>        
    
            <input type="text"
                class="form-control" 
                name="name" 
                value="" 
                placeholder="Name"
            />
        

        <?php if($err = $errors->first('handle')):?>
           <span class="error"> <?php echo $err?> </span>
        <?php endif; ?>

            <input type="text"
                class="form-control" 
                name="handle" 
                value="" 
                placeholder="Handle"
            />

        <?php if($err = $errors->first('userpic')):?>
           <span class="error"> <?php echo $err?> </span>
        <?php endif; ?>          

            <input type="text"
                class="form-control" 
                name="userpic" 
                value="" 
                placeholder="userpic"
            />
       
        </div>
    
        <input class="btn btn-primary ml-5" 
               type="submit" 
               name="submit" 
               value="Submit"
        />
      
    </form>
    

@endsection