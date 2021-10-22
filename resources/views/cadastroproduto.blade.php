<html>
    <head>
<link href="../css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<div class="flex justify-center items-center h-screen w-full bg-blue-400">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Register</h1>
        <form action="produtoscontroller" method="post">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Nome Produto</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="nomeproduto" id="nomeproduto">
                
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Custo Produto</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="custoproduto" id="custoproduto">
                
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Preço</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="preco" id="preco">
            </div>
            
            <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Create Account</button>
        </form>
        <a class="block w-full text-center no-underline mt-4 text-sm text-gray-700 hover:text-gray-900" href="/login">Already have an account?</a>
    </div>
</div>
    </body>
</html>