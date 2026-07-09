<div>

   @if($errors -> any())
   @foreach($errors->all() as $error)
   <div>
      {{$error}}
   </div>
   @endforeach
   @endif
     <h2>Add new user</h2>
     <form action="addUsers" method="POST">
        @csrf
         <div class="input-wrapper">
            <input type="text" placeholder="Enter a username" name="username" value="{{old('username')}}" ><br>
            <span>@error('username'){{$message}}@enderror

            </span><br>
            <input type="text" placeholder="Enter a email" name="email" ><br>
            <input type="text" placeholder="Enter a city" name="city" ><br>
            <input type="submit" name="submit" value="submit">

         </div>
     </form>
</div>
 


