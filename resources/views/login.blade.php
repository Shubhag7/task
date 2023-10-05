<form action="" method="post">
    @csrf
    <input type="email" name="email" placeholder="email" required> <br>
    <input type="password" name="password" placeholder="password" required> <br>
    <button type="submit" value="login" >Login</button>
</form>