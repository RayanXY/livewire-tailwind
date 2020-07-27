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
               <button class="py-1 px-2 text-white rounded bg-red-600 hover:bg-red-700" wire:click="delete({{ $contact->id }})">Delete</button>
            </td>
         </tr>
      @endforeach
   </tbody>

</table>