@component('mail::message')

<h2 style="text-align: center;">Formulaire de contact</h2>

Nouvelle prise de contact. Les données transmises sont les suivantes:

@component('mail::table')

<p><b>Nom:</b> {{ $data['lastname'] }}</p>
<p><b>Prénom:</b> {{ $data['firstname'] }}</p>
<p><b>Email:</b> {{ $data['email'] }}</p>
<p><b>Message:</b> {{ $data['message'] }}</p>

@endcomponent

Message envoyé depuis le site www.kb-avocats.ch
@endcomponent
