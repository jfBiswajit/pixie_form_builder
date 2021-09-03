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

{{-- If the type input key value is text then create a text input field and show the existing value --}}
@if ($data['type'] == 'text')
    <input type="text" placeholder="Start typing here"
    name="{{ $data['name'] }}"
    value="{{ $data['values']['prev_value'] ?? '' }}"
    {{ $data['required'] ? 'required' : '' }}>
@endif
