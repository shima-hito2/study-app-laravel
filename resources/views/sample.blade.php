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
    <form method="POST" action='http://localhost:8888/deleteSubject'>
        <div>
            <h1 class='text-center font-bold '>新規作成</h1>
            <div class="mt-4">
                <label for="title" />
                <input id="title" class="" type="text" name="id" :value="old('name')" />
            </div>

            <div class="mt-4">
                <label for="detail" />
                <input id="detail" type="text" name="detail" :value="old('email')" />
            </div>

            <div class="mt-4">
                <label for="code" />
                <input id="code" type="text" name="code" :value="old('email')" />
            </div>

            <div class="mt-4">
                <label for="style" />
                <input id="style" type="text" name="style" :value="old('email')" />
            </div>

            <div class="mt-4">
                <label for="subject_id" />
                <input id="subject_id" type="text" name="subject_id" :value="old('email')" />
            </div>

            <div class="flex items-center justify-center my-4">
                <button>
                    編集を完了する
                </button>
            </div>
    </form>
</body>

</html>
