<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi</h1>
 
        @foreach($sound as $s)
          <h1>{{ $s->senger }}</h1>  
                  <audio controls>
        <source src=" asset('storage/' .song->songs) }}" type="audio/mpeg">
        مرورگر شما از پخش‌کننده صوتی پشتیبانی نمی‌کند.
    </audio>
        @endforeach
</body>
</html>
