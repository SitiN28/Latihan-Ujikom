<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Ujikom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .login-box {
        width: 500px;
        border: solid 1px;
        padding: 30px;
    }

    form div{
        margin-bottom: 15px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
    <div class="login-box">
        <form action="{{ url('login') }}" method="post">
            @csrf
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </div>
            {{-- <div class="text-center">
                Don't Have an Account?  <a href="register">Sign Up</a>
            </div> --}}
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>