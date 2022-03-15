<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create task</div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="d-flex">
                            @csrf
                            <input type="text" class="form-control me-2" name="list" id="list" placeholder="please add task">
                            <button class="btn btn-primary" type="submit">add</button>
                        </form>
                    </div>
                </div>

                <ul class="list-group mt-4">
                    @foreach ($tasks as $index => $task)
                        <li class="list-group-item align-items-center d-flex justify-content-between">
                            {{ $index + 1}} - {{ $task->list }}
                            <div class="d-flex">
                                <a class="btn btn-success me-2" href="/tasks/{{$task->id}}">edit</a>
                                <form action="/tasks/{{$task->id}}" method="post" style="display:inline;">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-warning" type="submit">delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>