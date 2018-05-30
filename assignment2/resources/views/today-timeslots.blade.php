<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Today timeslots</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Slot Id</th>
                <th scope="col">Timeslot</th>
                <th scope="col">Subject</th>
                <th scope="col">ClassID</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($times as $item)
                    <tr>
                        <td>{{$item->time_slot_id}}</td>
                        <td>{{$item->time}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->class_id}}</td>
                        <td><a href="#">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>