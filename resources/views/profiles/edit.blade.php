<x-app>
    <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
            Name
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="name" id="name" required value="{{$user->name}}">

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username">
            Username
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="username" id="username" required value="{{$user->username}}">

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div>
            <div class="mb-6">

                <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="avatar">
                avatar
                </label>

                <input class="border border-grey-400 p-2 w-full" type="file" name="avatar" id="avatar">

                @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

            </div>

            <img src="{{ $user->avatar }}" alt="Your Avatar" width="40">
        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
            email
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="email" id="email" required value="{{$user->email}}">

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
            password
            </label>

            <input class="border border-grey-400 p-2 w-full" type="password" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>


        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password_confirmation">
            confirm password
            </label>

            <input class="border border-grey-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </div>
    </form>
</x-app>