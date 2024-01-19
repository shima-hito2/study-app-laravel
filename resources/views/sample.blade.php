<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- <form action='http://localhost:8888/regist' method='POST'>
        @csrf
        <input type='text' name='test' />
        <button type='submit'>送信</button>
    </form> --}}
    <form method="POST" action='http://localhost:8888/regist'>
        <div>
            <h1 class='text-center font-bold '>新規作成</h1>
            <div class="mt-4">
                <label for="title" :value="__('名前')" />
                <input id="title" class="" type="text" name="title" :value="old('name')" />
            </div>

            <div class="mt-4">
                <label for="detail" :value="__('メールアドレス')" />
                <input id="detail" type="text" name="detail" :value="old('email')" />
            </div>

            <div class="mt-4">
                <label for="code" :value="__('メールアドレス')" />
                <input id="code" type="text" name="code" :value="old('email')" />
            </div>

            <div class="flex items-center justify-center my-4">
                <button>
                    編集を完了する
                </button>
            </div>
    </form>
</body>

</html>
