<html>
   
   <head>
      @livewireStyles
      <link href={{ asset('css/tw.css') }} rel="stylesheet">
   </head>

   <body class="bg-green-400">

      <div class="flex items-center justify-center my-8 h-screen">
         <div class="w-2/5 mx-auto">
            <div class="bg-white shadow-md rounded px-6 pt-6 pb-8 mb-5">
               <h2 class="text-center text-xl font-bold -mt-2 mb-1">Contacts</h2>
               @livewire('show-contact-form')
            </div>
            <div class="bg-white shadow-md rounded px-6 pt-6 pb-8">
               <h2 class="text-center text-xl font-bold">Add Contact</h2>
               @livewire('contact-form')
            </div>
         </div>
      </div>
      
      @livewireScripts

   </body>

</html>