@component('mail::message',  ['email' => $email, 
								'name'=>$name, 
								'msg'=>$msg])
# Customer Contact Us Email


@component('mail::panel')
Name : {{ $name }}<br>

Email : {{ $email }}<br>

Message : {{ $msg }}<br>

@endcomponent

@component('mail::button', ['url' => 'mailto:'.$email])
Reply to customer
@endcomponent

Thanks,<br>
<!-- {{ config('app.name') }} -->
@endcomponent
