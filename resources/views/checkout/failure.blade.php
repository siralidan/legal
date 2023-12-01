<x-app-layout>
    <div class="p-10 text-center justify-center min-h-screen">
        <div class="w-[400px] mx-auto bg-red-500 py-8 px-3 rounded-xl text-white rounded">
            <h1>Your payment was not successful!!</h1>
            <p>{{$message ?? ''}}</p>
        </div>
    </div>

</x-app-layout>
