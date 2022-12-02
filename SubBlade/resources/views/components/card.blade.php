<div>
{{ $title }}
{{ $subtitle }}
{{ $description }}
</div>
<div>
    {{ $addNumber(10) }}
    <h2 {{ $attributes->merge(['class'=>"dclass"]) }}>Hello</h2>
</div>
<hr>