<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Update task</div>
                    <div class="card-body">
                        <form action="/tasks/{{$task->id}}" method="post" class="d-flex">
                            @method('put')
                            @csrf
                            <input type="text" class="form-control me-2" name="list" id="list" value="{{$task->list}}">
                            <button class="btn btn-secondary" type="submit">Update</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>   
</x-app-layout>