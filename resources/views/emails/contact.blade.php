
<x-mail::message>
    # Contact Form Message

    <h2>Name: {{$data['name']}}</h2>
    <h2>Email: {{$data['email']}}</h2>
    <h2>Message: {{$data['message']}}</h2>

    <x-mail::button :url="''">
        Button 
    </x-mail::button>

    Thanks, <br>
    {{config('app.name')}}
</x-mail::message>