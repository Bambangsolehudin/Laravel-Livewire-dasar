<div>
    @foreach($posts as $post)
    <div class="p-4 my-4 bg-white shadow-xl">
        <div class="">
        <span class="text-xl font-bold">{{$post->user->name}}</span>
        <span class="text-gray-500">{{$post->created_at->diffForHumans()}}</span>
        <button 
        wire:click = "showUpdateForm({{$post->id}})"
        class="p-2 bg-teal-600 hover:teal-400 text-white rounded-md">edit</button>

        <button 
        onclick="return confirm('Apakah Yakin ?') || event.stopImmediatePropagation()"
        wire:click = "Delete({{$post->id}})"
        class="p-2 bg-red-600 hover:red-400 text-white rounded-md">Delete</button>
        </div>
        @if($updateStateId !== $post->id)
        <span class="">{{$post->body}}</span>
        @endif

        @if($updateStateId == $post->id)
            <textarea    
            wire:model="body"
            
            class=" shadow appearance-none border rounded w-full py-2 
                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"   
            rows="3"
            
            >

        </textarea>
        <button
            wire:click="update({{$post->id}})"
            class=" mt-2 bg-blue-500 px-4 py-2 text-white hover:bg-blue-400 rounded-md">
            Save
        </button>



        @endif
    </div>
    

        

    

    @endforeach
</div>
