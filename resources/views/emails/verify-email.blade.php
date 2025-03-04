<p>Hello {{ $user->name }},</p>
<p>Click the link below to verify your email:</p>
<a href="{{ url('/verify-email/' . $user->email_verification_token) }}">Verify Email</a>