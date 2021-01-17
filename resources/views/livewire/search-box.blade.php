
<div class="container mx-auto flex justify-center mb-16 mt-5">
    <form class="m-4">
      <div class="flex">
          <div class="mr-3">
            <input type="date" name="date" class="rounded-lg p-4  border-t mr-0 border-b  border-l text-gray-800  bg-white focus:outline-none focus:ring focus:border" />
          </div>
          <div>
            <input wire:model="query" name="query" class="rounded-l-lg p-4 border-t mr-0 border-b  border-l text-gray-800  bg-white focus:outline-none focus:ring focus:border" placeholder="Your query"/>
            <button class="px-6 rounded-r-lg p-4 -blue-300 bg-gray-800  text-white font-bold uppercase border-gray-800 border-t border-b border-r">Search</button>
          </div>
      </div>
     
      
    </form>
</div>