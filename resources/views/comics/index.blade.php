@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titolo Comics</th>
                <th scope="col">Links Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->title}}</th>
                        <td>
                            <a href="#"> {{-- link al comic --}}
                                <button type="button" class="btn btn-primary">
                                    Clicca per visualizzare il prescelto!
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
          </table>
    </div>
@endsection