@component('mail::message')
    <div>
        #Contact information <br>
        <strong> Name: </strong> {{$data['name']}} <br>
        <strong> Email: </strong> {{$data['email']}} <br>
        <strong> Subject: </strong> {{$data['subject']}} <br>
        <strong> Message: </strong> {{$data['message']}}
    </div>

@endcomponent
