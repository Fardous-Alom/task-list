 <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Task;

Route::get('/', function(){
    return redirect()->route('tasks.index'); 
});

Route::get('/tasks', function () {
    return view('welcome',['tasks'=> Task::latest()->get()]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}', function($id){
    return view('task',['task'=> Task::findOrFail($id)]);
})->name('tasks.show');

Route::post('/tasks', function(Request $request){
    $data=$request->validate([
        'title' => 'required',
        'description' => 'required',
        'long_description' => 'required',
    ]);

  $task = new Task;
  $task->title = $data['title'];
  $task->description = $data['description'];
  $task->long_description = $data['long_description'];
  $task->save();
  return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
})->name('tasks.store');
?>