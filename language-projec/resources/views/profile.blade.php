<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">                                    
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{app()->getLocale()}}
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="/az/profile">az</a></li>
          <li><a href="/en/profile">en</a></li>
          <li><a href="/tr/profile">tr</a></li>
        </ul>
      </div>
</div>
    <h1>{{__('profile.welcome')}}</h1>
    <a href="#">{{__('profile.profile')}}</a>
    <a href="/{{app()->getlocale()}}/contact">{{__('profile.contact')}}</a>
    <a href="/{{app()->getlocale()}}/about">{{__('profile.about')}}</a>
</body>
</html>