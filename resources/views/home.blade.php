@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                 <div class="table-responsive">
                  <div class="col text-right">
                  <a href="{{ route('create') }}" class="btn btn-sm btn-success">New Contact</a>
                </div> 
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email </th> 
            <th scope="col">Phone </th> 
            <th>Actions</th>           
          </tr>
        </thead class="list">
        <tbody>
         @foreach($contacts as $contact)
          <tr>
            <td>
               {{ $contact->fristname}}
            </td>         
            <td>
             {{ $contact->lastname}}
            </td>
            <td>
              {{ $contact->email}}
            </td>
            <td>
              {{ $contact->phone }}
            <td>
              <form action="{{ url('/contacts/'.$contact->id)}}" method="POST">
                @csrf
                @method('delete')
                 <a href="" class="btn btn-sm btn-primary">Editar</a>
              <button type="submit" class="btn btn-sm btn-danger" >Eliminar</button>
              </form>   
             </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
