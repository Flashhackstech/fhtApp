@extends('layouts.app')

@section('content')
<div class="flex justify-center">
	@if (session('status'))
		{{session('status')}}
	@endif
	<form action="{{route('login')}}" method="post" class="w-1/2 md:max-w-md lg:max-w-md bg-white dark:bg-slate-700 dark:text-sky-200 m-2 shadow-md p-6  px-8 pt-6 pb-8 rounded-lg">
		@csrf
    <div class="mb-4">
		<label class="block  text-gray-500 text-sm font-bold mt-4 mb-2" for="email">
		Email
		</label>
		<input class="@error('email') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{old('email')}}" id="email" type="text" placeholder="example@abc.com" >
	</div>
	@error('email')<div class="text-red-500 text-sm mb-4">{{$message}}</div>@enderror
	
	<div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mt-4 mb-2" for="password">
		Password
      </label>
      <input class="@error('password') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="**********">
    </div>
	@error('password')<div class="text-red-500 text-sm mb-4">{{$message}}</div>@enderror
	
    <div class="flex items-center justify-between">
      <button class="bg-sky-500 hover:bg-sky-800 text-sky-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4" type="submit" value="submit">
        Log In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-sky-500 hover:text-sky-800 mt-4" href="#">
        Forgot Password?
      </a>
	  </div>
	  </form>
</div>

@endsection