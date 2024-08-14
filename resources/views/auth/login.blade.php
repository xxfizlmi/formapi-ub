@extends('templates.head')
<body class="bg-sky-600">
    <div class="h-screen grid justify-center content-center">
        <div class="bg-blue-950 flex justify-center p-10 space-x-8 ">
            <div class=" flex flex-initial"><img src="{{asset('img/logo_formapi.ub.png')}}" alt="" width="300"
                    class="flex-initial"></div>
            <div class=" content-center flex-initial">
                <form action="{{route('proseslogin')}}" method="post">
                @csrf
                    <div class="grid space-y-5 text-center text-white">
                        <h1>Login Account</h1>
                        <div class="px-3  bg-white rounded-full">
                            <input type="text" name="email" id="" placeholder="Username" class="py-1">
                        </div>
                        <div class="px-3  bg-white rounded-full">
                            <input type="text" name="password" id="" placeholder="Password" class="py-1">
                        </div>
                        <a href="{{route("forgot-password")}}" class="text-white text-right">Forgot Password</a>
                        <button class=" bg-sky-600 rounded-full p-1">Login</button>
                        <a href="{{route("register")}}" class="text-white text-center">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>

</html>