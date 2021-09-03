<form
{{-- If the user provides an id key then create the id attribute and add the id --}}
@isset($data['ids'])
    id={{ $data['ids'][0] }}
@endisset

{{-- if the user provides a class key then create a class attribute and show all classes --}}
@isset($data['classes'])
    class=
    "@foreach ($data['classes'] as $class)
    {{ $class }}
    @endforeach"
@endisset>
