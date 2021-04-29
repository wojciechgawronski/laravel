@component('mail::message')
# Introduction
<p>Hello World!</p>
<p>test</p>

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
