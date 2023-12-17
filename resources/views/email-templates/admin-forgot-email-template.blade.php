<p>Dear {{$admin->name}}</p>
<p>
    Reset your password  with {{$admin->email}}.
    You can reset by click below:
    <br>
    <a href="{{$actionLink}}" target="_blank" style="color: #fff; border-color:#22bc66; border-style:solid;border-width:5px 10px;background-color:#22bc66; display:inline-block; text-decoration:none;border-radius:3px;box-shadow:0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none;box-sizing:border-box">Reset password</a>
    <br>
    <b>This link will expire in 15 minutes</b>
    <br>
    If it not your request. Ignore this mail.
</p>