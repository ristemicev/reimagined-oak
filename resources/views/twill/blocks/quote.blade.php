@twillBlockTitle('Quote')
@twillBlockIcon('text')

<x-twill::input
    name="quote"
    type="textarea"
    label="Quote text"
    :maxlength="250"
    :rows="4"
/>

<x-twill::checkbox
    name="text-center"
    label="Center quote"
/>
