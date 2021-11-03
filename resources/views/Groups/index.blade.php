@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<h2>MY GROUPS LIST</h2>
<a href="/groups/create" class="card-link btn-primary">Tambah group</a>  
<div class="row">

@foreach ($groups as $group)

<div class="col-sm-4">
<div class="card border-success mb-3" style="max-width: 18rem;">
<div class="card-header bg-success text-white">Group Detail</div>
<div class="card-body bg-success text-dark p-2 bg-opacity-10" >
    <a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{ $group['description'] }}.</p>
      <hr>
        <a href="" class="card-link btn-primary">Tambah anggota teman</a>  
          @foreach ($group->friends as $friend)
            <li> {{$friend->nama}} </li>
          @endforeach

      <hr>


    <a href="/groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit group</a>
    <form action="/groups/{{ $group['id'] }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete group</button>
</form>
  </div>
</div>
</div>

@endforeach
<div>
    {{ $groups->links() }}
</div>
@endsection

</div>
