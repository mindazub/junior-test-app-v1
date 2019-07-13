@extends('layouts.admin')

@section('content')



<div class="card" style="width: 18rem;">

    @if(! $employee->photo == 'photo')
        <img class="profile-user-img img-responsive img-circle" src="/images/anonymous.png" alt="Employee default picture">
    @else
        <img class="profile-user-img img-responsive img-circle" src="{{ Storage::url($employee->photo) }}" alt="Employee profile picture">
    @endif

    <div class="card-body">
        <h2 class="card-title">{{ $employee->firstName }} {{ $employee->lastName }}</h2>
        <h5 class="card-title"><b>Website:</b> <br> {{ $employee->website }}</h5>
        <p class="card-title"><b>Phone:</b> <br> {{ $employee->phone }}</p>
        <p class="card-title"><b>Email:</b> <br> {{ $employee->email }}</p>
        @if(isset($employee->company->name))
        <p class="card-title"><b>Company:</b> <br> {{ $employee->company->name }}</p>
        @else
            <p class="card-title"><b>Company:</b> <br> No company </p>
        @endif
        <div class="btn-group" role="group" aria-label="all buttons">
            <a type="button"
               class="btn btn-sm btn-primary"
               href="{{ route('employee.index', app()->getLocale()) }}"
            ><i class="fa fa-angle-left"></i> Back</a>
            <a type="button"
               class="btn btn-sm btn-info btn-secondary"
               href="{{ route('employee.edit', [app()->getLocale(), $employee]) }}"
            >Edit</a>
            <form style="display: flex;" action="{{ route('employee.destroy', [app()->getLocale(), $employee]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <input class="btn btn-sm btn-danger btn-secondary" type="submit"
                       value="{{ __('Delete') }}">
            </form>
        </div>
    </div>
</div>






@endsection
