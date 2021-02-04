@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://github.com/wiliamhw'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
