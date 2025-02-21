<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FROM</title>
    <link rel="stylesheet" href="/assets/css/signup.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="frm">
            @csrf
            <h1 class="heading">Điền thông tin</h1>
            <div class="form-group">                                                                           
                <label>Name</label>
                <input type="text" class="form-control" name="name">             
            </div>
            <div class="form-group">
                <label>Age</label>                                                                                                                                                                                                                                                                                                                
                <input type="text" class="form-control" name="age">
            </div>
            <div class="form-group">
                <label >Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">             
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">      
            </div>
            <div class="form-group">                                                                                                                                                                      
                <label>Web</label>
                <input type="url" class="form-control" name="web">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>

            <div>
                @if (count($errors)>0)
                    <div class="alter-danger">
                        <ul>
                            @foreach ($errors -> all () as $error)
                            <p>{{$error}}</p>
                                
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="btn">
                <button type="submit" class="btn-primary">OK</button>
            </div>
            <div class="display-infor">
                @if(isset($user))
                    <p>Your Name: {{$user['name']}} </p>
                    <p>Your Age: {{$user['age']}} </p>
                    <p>Your Date: {{$user['date']}} </p>
                    <p>Your Phone: {{$user['phone']}} </p>
                    <p>Your Web: {{$user['web']}} </p>
                    <p>Your Address: {{$user['address']}} </p>
                @endif
            </div>
        </form>

    </div>

</body>
</html>