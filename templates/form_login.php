
<!-- En donde lo incluya tiene que estar el header.php -->
    <!--Form Login -->
<div class="mt-5 w-25 m-auto">
    <form method="POST" action="verify">
        <div class="form-group mt-5">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group form-check"> </div>
        <button type="submit" class="btn btn-dark">Log in</button>
    </form>
</div>