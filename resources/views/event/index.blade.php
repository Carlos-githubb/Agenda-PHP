@extends('layouts.app')
@section('content')
<div class="container">
    <div id= "agenda">
        Calendario
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form action= "" 

                    <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Write the title of the Event">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>>
                    <div class="form-group">
                    <label for="">Descriptcion</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="Start">start</label>
                    <input type="text" class="form-control" name="start" id="s" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                    <label for="end">End</label>
                    <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                </form>
            </div>
            <div class="modal-footer">

                 <button type="button" class="btn btn-success" id= "btnSave">Save</button>
                 <button type="button" class="btn btn-warning" id= "btnModify">Modify</button>
                 <button type="button" class="btn btn-danger" id= "btnDelete">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection