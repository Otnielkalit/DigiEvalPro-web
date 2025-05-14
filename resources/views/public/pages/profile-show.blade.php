@extends('public.layouts.master')

@section('content')
    <div class="container" style="margin-top: 120px; margin-bottom: 50px;">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-header text-white" style="background-color: #FF9800;">
                        <h5 class="mb-0">Menu</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ route('profile.show', auth()->user()) }}" class="text-decoration-none" style="color: #FF9800;">
                                    <i class="fa fa-user mr-2"></i> Profil Saya
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('cart.index') }}" class="text-decoration-none" style="color: #FF9800;">
                                    <i class="fa fa-shopping-cart mr-2"></i> Keranjang Saya
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('orders.index') }}" class="text-decoration-none" style="color: #FF9800;">
                                    <i class="fa fa-list-alt mr-2"></i> Daftar Pesanan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                <h1 class="text-center mb-5"></h1>

                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center mb-4">User Profile</h1>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $user->nohp ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>{{ ucfirst($user->role) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Verified At</th>
                                        <td>
                                            {{ $user->email_verified_at ? $user->email_verified_at->format('d M Y') : 'Not Verified' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

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
