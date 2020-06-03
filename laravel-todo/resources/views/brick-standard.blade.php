@foreach($tasks as $task)
   <li id="{{$task->id}}" class="@if($task->result){{'checked'}}@endif">{{$task->task}}@if($task->result)<span id="{{$task->id}}" class="close">×</span>@endif</li>
@endforeach