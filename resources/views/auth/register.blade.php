@extends('templates.head')
<body class="bg-sky-600">
    <div class="h-screen grid justify-center content-center">
        <div class="bg-blue-950 flex justify-center p-10 space-x-8 ">
            <div class=" flex flex-initial"><img src="{{asset('img/logo_formapi.ub.png')}}" alt="" width="300"
                    class="flex-initial"></div>
            <div class=" content-center flex-initial">
                <form action="{{route('prosesRegister')}}" method="post">
                @csrf
                    <div class="grid space-y-5 text-center text-white">
                        <h1>Register Account</h1>
                        <div class="px-3  bg-white rounded-full">
                            <input type="text" name="nama_lengkap" id="" placeholder="Nama lengkap" class="py-1">
                        </div>
                        <div class="px-3  bg-white rounded-full">
                            <input type="email" name="email" id="" placeholder="Email" class="py-1">
                        </div>
                        <div class="px-3  bg-white rounded-full">
                            <input type="text" name="password" id="" placeholder="Password" class="py-1">
                        </div>
                        <button class=" bg-sky-600 rounded-full p-1">Register</button>
                        <a href="{{route("login")}}" class="text-white text-center">Punya Akun</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>

</html>