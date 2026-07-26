<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
     <form action="/login" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter Your name">
        <br>
        <input type="password" name="password" placeholder="Enter Your password">
        
        <button>Log in</button>
     </form>
</div>
