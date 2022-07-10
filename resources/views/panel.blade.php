<a name="add" id="add-contact" href="/new_contact" class=" btn btn-lg " role="link"
   aria-pressed="true">
   Add contact
</a>

<a href="/logout">LOG OUT</a>

@if(Session::has('message'))
   {{Session::get('message')}}
   @endif





