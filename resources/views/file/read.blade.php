<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-4xl font-bold">All Songs</h1>
 
        @foreach($sound as $s)
        <div class="m-5 p-5 border-2 border-green-500 flex flex-col gap-3">
          <h1>{{ $s->senger }}</h1>  
          @if($s->songs)
        <audio controls src="{{ asset('storage/' . $s->songs) }}">
        <!-- <source  src="{{ asset('storage/' . $s->songs) }}" type="audio/mpeg"> -->
        Your browsar dos not supported the audio element.
    </audio>
    @endif
    </div>
        @endforeach
</body>
</html>
