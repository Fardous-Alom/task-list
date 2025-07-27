<form method='POST' action='{{ route('tasks.store') }}'>
@csrf
 <div>
    <h1>Create a new task</h1>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" >
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"  rows="5"></textarea>
    </div>
    <div>
        <label for="long_description">Long Description:</label>
        <textarea id="long_description" name="long_description"  rows="10"></textarea>
    </div>
    <button type="submit">Create Task</button>
 </div>
</form>