<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<section class="section1">
    <main>
        <h1 class="register-heading">Register</h1>

        <form class="register-form" method="POST" action="create-user">
            @csrf
            <div class="label-input">
                <label for="name" class="register-label">
                    Name
                </label>
                <input class="register-input" type="text" name="name" id="name" value="{{old('name')}}"
                       required>
                @error('name')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div class="label-input">
                <label for="email" class="register-label">
                    Email
                </label>
                <input class="register-input" type="text" name="email" id="email" value="{{old('email')}}"
                       required>
                @error('email')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <button class="register-button" type="submit">submit</button>
            </div>
        </form>
    </main>
</section>
</body>
</html>
