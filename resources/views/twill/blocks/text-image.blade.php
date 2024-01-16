@twillBlockTitle('Text Image')
@twillBlockIcon('image-text')

@php
$wysiwygOptions = [['header' => [1, 2, 3, 4, 5, 6, false]], 'bold', 'italic', 'underline', 'strike', 'blockquote',
'code-block', 'code', 'link', 'clean', 'table'];
@endphp

<div class="wrapper">

    <div class="col--double col--double-wrap">
        <x-twill::medias name="image" label="Image" :max="1" />
    </div>

    <div class="col--double col--double-wrap">
        <x-twill::wysiwyg :toolbar-options='$wysiwygOptions' name="text" type="textarea" label="Text" :maxlength="250"
            :rows="4" />
    </div>

</div>

<x-twill::input name="button" label="Button" />
<x-twill::input name="url" label="Button URL" />

<x-twill::checkbox
    name="reverse"
    label="Show in reverse"
/>
