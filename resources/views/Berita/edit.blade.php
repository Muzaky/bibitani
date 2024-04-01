<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body
class="bg-gray-200 flex justify-center items-center h-screen select-none"
>

<button class="bg-white">Open Modal
</button>
<div
id="delbutton" 
class="fixed left-0 top-0 bg-black bg-opacity-40 w-screen h-screen flex items-center justify-center opacity-0 
hidden transition-opacity duration-500">
    <div class="bg-white rounded shadow-md p-8 w-[25%] gap-5 flex-col overflow-hidden bg-opacity-0">
        <div class="flex p-8 gap-5 pb-0">
            <div class="bg-red-500 rounded-full text-red-600 min-w-10 h-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="1.5" 
                stroke="currentColor" 
                class="w-6 h-6">
                <path 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            </div>
    
            <div class="flex-grow">
                <h1 class="font-bold text-lg mb-2 text-gray-700">Menghapus Data</h1>
                <p class="text-gray-600">Apakah anda ingin menghapus data ?</p>
            </div>
        </div>

        <div class="bg-gray-200 py-3 px-6 justify-end">
            <button class="bg-white rounded px-4 py-2 text-black cursor-pointer hover:bg-gray-300">Batal</button>
            <button class="bg-red-700 rounded px-4 py-2 text-white cursor-pointer hover:bg-red-400">Hapus</button>
        </div>
        
    </div>

    </div>
    

   





</div>

<script>
    function showDelButton(){
        let delbutton = document.getElementById('delbutton')
        delbutton.classList.remove('hidden')
        delbutton.classList.add('flex')
        setTimeout(() => {
            delbutton.classList.add('opacity-100')
        }, 20);
    }
    function hideDelButton(){
        let delbutton = document.getElementById('delbutton')
        delbutton.classList.add('opacity-0')
        setTimeout(() => {
            delbutton.classList.add('hidden')
            delbutton.classList.remove('flex')
        }, 500);
    }
</script>
    
</body>
</html>