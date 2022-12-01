<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $name = $data['name'] }}
    @if($data['name']== 'shah alam')
        <p>yes</p>
        @endif

    @unless ($data['name'] != 'shah alam')
      yes
    @endunless

  @if($data['name']== "shah alam")
  yes this is shah alam.
  @elseif($data['name']== "rakib")
  rakib
  @else
  nothing
  @endif


  {{-- isset directive --}}

  @isset($data['name'])
  
  <p>{{ $data['name'] }}</p>
  @endisset


  {{-- empty derective --}}
  @empty($data['name'])
  empty
  @endempty


  {{-- production derictive --}}
  @production
    ho
  @endproduction

  {{-- environment directives --}}
  @env(['local','staging'])
  this is local

    
  @endenv
</body>
</html>