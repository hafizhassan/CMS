@extends('layouts.default')

@section('title')
@parent
Create Page
@stop

@section('content')
<div class="well">
	<form class="form-horizontal" action="{{ URL::route('pages.store') }}" method="post">   
        
        {{ Form::token() }}
    
        <div class="control-group {{ ($errors->has('title')) ? 'error' : '' }}" for="title">
            <label class="control-label" for="title">Page Title</label>
            <div class="controls">
                <input name="title" value="{{ Request::old("title") }}" type="text" class="input-xlarge" placeholder="Page Title">
                {{ ($errors->has('title') ? $errors->first('title') : '') }}
            </div>
        </div>

        <div class="control-group {{ ($errors->has('icon')) ? 'error' : '' }}" for="icon">
            <label class="control-label" for="icon">Page Icon</label>
            <div class="controls">
                <input name="icon" value="{{ Request::old("icon") }}" type="text" class="input-xlarge" placeholder="Page Icon">
                {{ ($errors->has('icon') ? ' '.$errors->first('icon') : '(optional)') }}
            </div>
        </div>

        <div class="control-group {{ ($errors->has('body')) ? 'error' : '' }}" for="body">
            <label class="control-label" for="body">Page Body</label>
            <div class="controls">
                <textarea name="body" value="{{ Request::old("title") }}" type="text" class="input-xlarge" placeholder="Page Body" rows="5"></textarea>
                {{ ($errors->has('body') ? $errors->first('body') : '') }}
            </div>
        </div>

        <div class="control-group {{ ($errors->has('show_title')) ? 'error' : '' }}" for="show_title">
            <label class="control-label" for="show_title">Show Title</label>
            <div class="controls">
                <div class="switch" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'>">
                    <input name="show_title" type="checkbox" {{ (Request::old("show_title", 'on') == true) ? 'checked' : '' }} >
                </div>
                {{ ($errors->has('show_title') ? $errors->first('show_title') : '') }}
            </div>
        </div>

        <div class="control-group {{ ($errors->has('show_nav')) ? 'error' : '' }}" for="show_nav">
            <label class="control-label" for="show_nav">Show On Nav</label>
            <div class="controls">
                <div class="switch" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'>">
                    <input name="show_nav" type="checkbox" {{ (Request::old("show_nav", 'on') == true) ? 'checked' : '' }} >
                </div>
                {{ ($errors->has('show_nav') ? $errors->first('show_nav') : '') }}
            </div>
        </div>

        
        
        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="Create New Page"> 
        </div>
    </form>
</div>

@stop