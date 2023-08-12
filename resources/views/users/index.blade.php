<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #FDF6F8;
        }
        .table {
            background-color: #FEE2E6;
            border-radius: 30px;
        }
        .table th, .table td {
            border: none;
        }
        .table th {
            background-color: #FFB6C1;
            color: white;
        }
        .butterfly-icon {
            font-size: 24px;
            vertical-align: middle;
        }
    </style>
</head>
<body class="antialiased">
<div class="container py-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">الايميل</th>
            <th scope="col">تاريخ الانشاء</th>
            <th scope="col">اجراءات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ Carbon\Carbon::parse($user->created_at)->format('Y-m-d h:i A') }}</td>
                <td>
                    <a class="btn btn-outline-danger" href="{{ url('user/'.$user->id) }}">
                         حذف
                    </a>
                    <a class="btn btn-outline-primary" href="{{ url('user/'.$user->id) }}">
                        تعديل
                    </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
