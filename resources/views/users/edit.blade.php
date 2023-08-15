<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink and Butterfly Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f5f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            max-width: 1000px;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }



        .form-group label {
            color: #ff66b2;
            font-weight: bold;
        }



        .btn-pink {
            background-color: #ff66b2;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-pink:hover {
            background-color: #ff3385;
        }
    </style>
</head>
<body>
<div class="form-container">

    <form>
        <div class="mb-3 form-group" method="post" action="{{ route('user.update', ['id' => $user->id]) }}">
            @csrf
            @method('put')
            <label for="name">الاسم</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3 form-group">
            <label for="email">الايميل</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <button type="submit" class="btn btn-pink">Update</button>
    </form>
</div>
</body>
</html>
