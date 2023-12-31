@extends('admin.dashboard')

@section('title', 'List Pengguna')

@section('content')

<section class="is-list-user p-5">
    <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          List Pengguna Kelontong.id
        </p>
      </header>
  
      <div class="card has-table overflow-scroll">
          <div class="card-content">
            <table>
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                {{-- <th>Tanggal Daftar</th> --}}
                <th>Status</th>
                <th>Approve</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($users as $user)                
              <tr>
                <td data-label="No">{{$loop->iteration}}</td>
                <td data-label="Nama">{{$user->name}}</td>
                <td data-label="Nomor Telepon">{{$user->nomor_telepon}}</td>
                <td data-label="Email">{{$user->email}}</td>
                {{-- <td data-label="Tanggal Daftar">{{$user->created_at->format('d M y')}}</td> --}}
                <td data-label="Status">
                  @if($user->status === 'Aktif')
                      <span class="px-3 py-1 text-green-800 bg-green-200 rounded-lg text-xs">
                          Aktif
                      </span>
                  @elseif($user->status === 'Non Aktif')
                      <span class="px-2 py-1 text-yellow-800 bg-yellow-200 rounded-lg text-xs">
                          Non-Aktif
                      </span>
                  @endif
                </td>
                <td data-label="Approve">
                  @if($user->approve === 'approved')
                      <span class="px-3 py-1 text-green-800 bg-green-200 rounded-lg text-xs">
                          Approved
                      </span>
                  @elseif($user->approve === 'rejected')
                      <span class="px-3 py-1 text-yellow-800 bg-yellow-200 rounded-lg text-xs">
                          Rejected
                      </span>
                  @endif
                </td>
                <td class="actions-cell">
                  <div class="buttons right nowrap">
                    <a href="{{route('pengguna.edit', $user->id)}}" class="button small bg-yellow-400 hover:bg-yellow-500">
                      <span class="icon"><i class="mdi mdi-pencil"></i></span>
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
</section>

@endsection