<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <table>
            <tr>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <td> Mail from:{{$from}}</td>
            </tr>
            <tr>
                <td>Subject:{{$subject}}</td>
            </tr>
            <tr>
            <td>
                <p> Dear {{$name}}</p>
                <p> We want to inform that lead  assigned to you by <span>{{$sender->name}}</span>  , lead deatil  given below </p>
                <p>message:{{$lead_detail->message}}</p>
                <p>lead id:{{$lead_detail->id}} </p>
                <p> name:{{$lead_detail->name}} </p>
                <p> email:{{$lead_detail->email}} </p>
                <p>phone:{{$lead_detail->phone_number}}</p>
            </td>
            </tr>
            <tr>
                <td>{{$data}}</td>
            </tr>
        </table>
    </body>
</html>