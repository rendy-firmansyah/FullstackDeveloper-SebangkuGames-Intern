@extends('admin.dashboard')

@section('title', 'List Pengguna')

@section('content')

<section class="modal-card-body">
    <form action="{{ route('pengguna.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')
        <div class="input-1 mb-3">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
            <div class="mt-2">
                <input id="name" name="name" type="text" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$user->name}}">
            </div>
        </div>
        <div class="input-3 mb-3">
            <label for="nomor_telepon" class="block text-sm font-medium leading-6 text-gray-900">Nomor Telepon</label>
            <div class="mt-2">
                <input id="nomor_telepon" name="nomor_telepon" type="numeric" autocomplete="nomor_telepon" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$user->nomor_telepon}}">
            </div>
        </div>
        <div class="input-3 mb-3">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
                <input id="email" name="email" type="numeric" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$user->email}}">
            </div>
        </div>

        <div class="input-4 mb-3">
            <label for="approve" class="block text-sm font-medium leading-6 text-gray-900">Approve</label>
            <div class="mt-2">
                <select id="approve" name="approve" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="approved" {{ $user->approve == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ $user->approve == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>
        </div>

    <button type="submit" class="py-3 w-full text-white border bg-blue-500 hover:bg-blue-700 rounded-lg mt-4">Submit</button>
  </form>
</section>

</section>

@endsection