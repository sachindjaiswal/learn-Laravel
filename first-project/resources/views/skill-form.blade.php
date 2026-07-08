<div>
    <!-- An unexamined life is not worth living. - Socrates -->
     <h1>Mention your skill</h1>
     <form action="backendSkill" method="POST">
      @csrf
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="node" id="node">
        <label for="node">node</label>
        <input type="checkbox" name="skill[]" value="java" id="java">
        <label for="java">java</label>
        
        
        <h1>Mention your gender</h1>
        
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">female</label>
        
        <button>Add new user </button>
      </form>
</div>
