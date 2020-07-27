<form wire:submit.prevent="submit">
   
   <div class="mb-4">
      <label class="block text-sm font-bold mb-2" for="name">Name</label>
      <input class="bg-green-100 hover:bg-white border rounded w-full py-2 px-3 leading-tight focus:bg-white focus:outline-none focus:border-green-200" 
         id="name" type="text" placeholder="Your Name" wire:model="name">
      @error('name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
   </div>
   
   <div class="mb-4">
      <label class="block text-sm font-bold mb-2" for="email">E-mail</label>
      <input class="bg-green-100 hover:bg-white border rounded w-full py-2 px-3 leading-tight focus:bg-white focus:outline-none focus:border-green-200" 
         id="email" type="text" placeholder="Your E-mail" wire:model="email">
      @error('email') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
   </div>

   <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">Save Contact</button>

</form>