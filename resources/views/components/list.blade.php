@props([
    'type' => 'ul'      // default value is 'ul'
])

@php
    $options = [
         'ul' => 'list-disc',
         'ol' => 'list-decimal',
         'group' => 'border border-gray-300 divide-y',
     ];
     $style = $options[$type] ?? $options['ul']
@endphp

<ul {{ $attributes->merge(['class' => "$style list-inside"]) }}>  // replace list-disc with $style
    {{ $slot }}
</ul>
