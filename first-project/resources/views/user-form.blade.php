<!-- <div>

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
 

 -->


<div>

   <h1>{{session('message')}}</h1>
   <form action="/user" method="post">
      @csrf
      <!-- <input type="hidden" name="_method" value="PATCH"> -->
      <input type="text" name="user" placeholder="Enter your name">
      <br>
      <br>
      <input type="password" name="password" placeholder="Enter your password">
      <br>
      <input type="submit" name="Submit" value="Submit">
   </form>
</div>