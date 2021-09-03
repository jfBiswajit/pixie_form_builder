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

{{-- Create a select input field and show all provided options. And make option selected for active value  --}}
@if ($data['type'] == 'select')
    <select
    name="{{ $data['name'] }}"
    {{ $data['required'] ? 'required' : '' }}>
      
      <option value="" selected disabled> Please select one </option>
      @foreach ($data['values'] as $key => $val)
          <option {{ $data['active'] == $key ? 'selected' : '' }} value="{{ $key }}"> {{ $val }} </option>
      @endforeach
    </select>
@endif

{{-- Create a radio input field. If the active value is provided active value has to be selected --}}
@if ($data['type'] == 'radio')
    @foreach ($data['values'] as $key => $val)
        <input
        type="radio"
        name="{{ $data['name'] }}"
        value="{{ $val }}"
        {{ $data['active'] == $key ? 'checked' : '' }}
        >
    @endforeach
@endif
