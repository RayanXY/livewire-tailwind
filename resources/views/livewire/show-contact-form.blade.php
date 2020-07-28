<table class="text-left w-full border-collapse">

   <thead>
      <tr>
         <!--<th class="bg-green-200 py-2 px-3 text-sm font-bold uppercase border-b border-green-300">ID</th>-->
         <th class="bg-green-200 py-2 px-3 text-sm font-bold uppercase border-b border-green-300">Name</th>
         <th class="bg-green-200 py-2 px-3 text-sm font-bold uppercase border-b border-green-300">E-mail</th>
         <th class="bg-green-200 py-2 px-3 text-sm font-bold uppercase border-b border-green-300">Actions</th>
      </tr>
   </thead>

   <tbody>
      @foreach ($contacts as $contact)
         <tr class="hover:bg-green-100">
            <!--<td class="py-2 px-3 border-b border-green-300">{{ $contact->id }}</td>-->
            <td class="py-2 px-3 border-b border-green-300">{{ $contact->name }}</td>
            <td class="py-2 px-3 border-b border-green-300">{{ $contact->email }}</td>
            <td class="py-2 px-3 border-b border-green-300">
               <div x-data="{ edit: false }" @keydown.escape="edit = false">
                  <!-- Edit -->
                  <button class="py-1 px-5 text-white rounded bg-blue-600 hover:bg-blue-700" @click="edit = true">Edit</button>
                  <div x-show="edit" @click.away="edit = false">
                     Editing
                  </div>
               </div>
               <!-- Delete Confirmation -->
               <div x-data="{ confirmDelete: false }" @keydown.escape="confirmDelete = false">
                  <button class="py-1 px-3 text-white rounded bg-red-600 hover:bg-red-700" @click="confirmDelete = true">Delete</button>
                  <div class="bg-black bg-opacity-50 items-center flex w-full h-full justify-center absolute top-0 left-0" x-show="confirmDelete" @keydown.escape="confirmDelete = false" @click.away="confirmDelete = false">
                     <div class=" py-8 px-12 bg-white rounded h-auto shadow-xl" @click.away="confirmDelete = false">
                        <h2 class="text-center text-xl font-bold mb-4">Are you sure?</h2>
                        <button class="py-1 px-3 text-xl rounded text-white bg-red-600 hover:bg-red-700" wire:click="delete({{ $contact->id }})">Delete</button>
                        <button class="py-1 px-3 text-xl rounded border border-green-500" @click="confirmDelete = false">Cancel</button>
                     </div>
                  </div>
               </div>
            </td>
         </tr>
      @endforeach
   </tbody>

</table>