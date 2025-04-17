@extends('public.layouts.master')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 class="text-center mb-4">User Profile</h1>

                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="mb-3">{{ $user->name }}</h3>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Email:</strong> {{ $user->email }}
                            </li>
                            <li class="list-group-item">
                                <strong>Phone:</strong> {{ $user->nohp ?? '-' }}
                            </li>
                            <li class="list-group-item">
                                <strong>Role:</strong> {{ ucfirst($user->role) }}
                            </li>
                            <li class="list-group-item">
                                <strong>Email Verified At:</strong>
                                {{ $user->email_verified_at ? $user->email_verified_at->format('d M Y') : 'Not Verified' }}
                            </li>
                        </ul>

                        <div class="mt-4 text-center">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
