@foreach($tasks as $task)
<article class="brick entry format-standard animate-this margin-top">

    <div class="entry-text">
        <div class="entry-header">
            <h5 class="entry-title"><a href="#">{{$task->task}}</a> <span class="red">({{$task->user->name}})</span></h5>
        </div>
        <h3>date <span class="blue">create {{$task->datecreate}}</span></h3>
        <h3>date <span class="red">result {{$task->dateresult}}</span></h3>
        <div class="entry-excerpt">
            {{$task->task}}
        </div>
    </div>

</article>
@endforeach