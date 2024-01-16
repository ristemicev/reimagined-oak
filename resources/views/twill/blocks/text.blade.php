@twillBlockTitle('Text')
@twillBlockIcon('text')

@php
$wysiwygOptions = [['header' => [1, 2, 3, 4, 5, 6, false]], 'bold', 'italic', 'underline', 'strike', 'blockquote',
'code-block', 'code', 'link', 'clean', 'table'];
@endphp

<x-twill::wysiwyg
    :toolbar-options='$wysiwygOptions'
    name="text"
    type="textarea"
    label="Text"
    :maxlength="250"
    :rows="4"
/>


<x-twill::checkbox
    name="text-center"
    label="Center text"
/>

