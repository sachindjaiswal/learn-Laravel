<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
     <h2>Add new user</h2>
     <form action="addUsers" method="POST">
        @csrf
         <div class="input-wrapper">
            <input type="text" placeholder="Enter a username" name="username" ><br>
            <input type="text" placeholder="Enter a email" name="email" ><br>
            <input type="text" placeholder="Enter a city" name="city" ><br>
            <input type="submit" name="submit" value="submit">

         </div>
     </form>
</div>
 


