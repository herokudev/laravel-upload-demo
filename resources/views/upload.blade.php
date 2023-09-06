<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class=" bg-orange-200 p-10 w-[600px] h-[350px] ml-[20%] mt-[10%]">
        <h1 class=" text-blue-950 font-bold text-3xl ml-[20%]">File upload demo!!</h1>
        <form class="mt-10" method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
            @csrf
            <div class="ml-[25%]">
                <div>
                    <input type="file" name="file">
                </div>
                <div>
                    <button class="mt-10 w-[200px] h-[40px] bg-blue-950 rounded-3xl text-white" type="submit">Upload File</button>
                </div>
            </div>

        </form>
    </main>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

</body>
</html>
