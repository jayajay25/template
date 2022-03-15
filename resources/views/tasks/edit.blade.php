<x-app-layout>
    <h1>My Tasks</h1>
    
    <form action="/tasks/{{$task->id}}" method="post">
        @method('put')
        @csrf
        <input type="text" name="list" id="list" value="{{$task->list}}" placeholder="please add task">
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</x-app-layout>