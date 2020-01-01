<h4><small>RECENT POSTS</small></h4>
<hr>
<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Task</button>
<form class="m-1" method="POST" action="/live/Task/add">
    <div class="row">
        <div class="col-md-3">
            <input type="text" name="task_name" class="form-control" placeholder="Task name...">
        </div>
        <div class="col-md-3">
            <input type="text" name="date_begin" id="time-begin" class="form-control" placeholder="Time begin...">
        </div>
        <div class="col-md-3">
            <input type="text" name="date_end" id="time-end" class="form-control" placeholder="Time end...">
        </div>
        <div class="col-md-3">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </div>
</form>
<hr>
<h2>List task created</h2>
<h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
<h5><span class="label label-success">Lorem</span> <span class="label label-danger">Food</span> <span
        class="label label-primary">Ipsum</span></h5><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
    aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
    officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<hr>
<script>
    $(document).ready(function(){
        $(function () {
            $("#time-begin, #time-end").datepicker();
            $("#time-begin, #time-end").datepicker("option", "dateFormat", 'dd/mm/yy');
        });
    })
</script>