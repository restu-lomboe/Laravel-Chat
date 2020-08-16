@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="accordion col-md-3" id="accordionExample" style="position: fixed; bottom:10px; right:0;">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="float-left"> Online Chats <span class="badge badge-success ml-3"><chat-user-list-component /></span> </span>
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <chat-box-component />
        </div>
      </div>
    </div>
</div>
@endsection
