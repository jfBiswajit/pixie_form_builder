<form
{{-- If the user provides an id key then create the id attribute and add the id --}}
@isset($data['ids'])
    id={{ $data['ids'][0] }}
@endisset
