@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">People</div>

                <div class="card-body">
                    <a href="{{ route('person.create') }}" class="btn btn-primary mb-3">Add Person</a>

                    <table class="table">
                        <thead>
                            <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Surname') }}</th>
                            <th>{{ __('Birthday') }}</th>
                            <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $person)
                                <tr>
                                    <td>{{ $person->id }}</td>
                                    <td>{{ $person->name }}</td>
                                    <td>{{ $person->surname }}</td>
                                    <td>{{ $person->b_date }}</td>
                                    <td>
                                        <a href="{{ route('person.edit', ['person' => $person->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
