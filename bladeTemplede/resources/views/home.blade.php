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


  {{-- switch derictives --}}

  @switch($name)
    @case("shah alam")
      first
      @break
    @case(2)
      case 2
    @break
    @default
      this is default message
  @endswitch


  {{-- for derectives --}}
  @for ($i = 0;$i<10;$i++)
    {{ $i }}
  @endfor

  {{-- foreach  --}}

{{  $data['name']}}
  @foreach ($data['subject'] as $s)
    {{ $s }} <br>
  @endforeach

  {{-- forelse --}}

  @forelse ($data['subject'] as $std)
    {{ $std }} <br><br>
  @empty
    <p>No data found</p>
  @endforelse


  {{-- break and continue --}}

@foreach ($data['subject'] as $std)
 
  @continue($std == 'english')
  {{ $std }}
@endforeach

{{-- loop --}}

@foreach ($data['subject'] as $std)
  {{ $std }}
  @if ($loop->first)
  <p>{{ __("this is first loop" ) }}</p> <br>
  @endif
  @if ($loop->last)
    {{ __('this is last loop') }}
  @endif

@endforeach














</body>
</html>