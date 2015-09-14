@extends('layouts.master')

@section('title', 'Seasons')

@section('content')
    <div class="row">
        <div class="col-md-1 mb-md">
            <button id="create_season" class="btn btn-primary">Create new season</button>
        </div>
    </div>

    <div id="create_season_container" class="{!! (isset($display)) ? '' : 'hidden' !!}">
        {!! Form::open(
                array(
                    'url' => '/dashboard/seasons',
                    'method' => 'POST',
                    'class' => 'col-md-6 col-md-offset-3',
                    'id' => 'create_location_form'
                ))
        !!}
            <div class="row">
                <p class="bg-danger errors"></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', '',
                            array(
                                'class' => 'form-control',
                                'id' => 'name',
                                'placeholder' => 'Enter name'
                            ))
                        !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('date_started', 'Date started', array('class' => 'control-label')) !!}
                        {!! Form::text('date_started', '',
                            array(
                                'class' => 'input-sm form-control',
                                 'id' => 'date_started',
                                 'placeholder' => 'Enter date started'
                            ))
                        !!}
                        {{--<% if(errors.date_started) { %>
                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        <small class="help-block"><%= errors.date_started.message %></small>
                        <% } %>--}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('date_ended', 'Date ended', array('class' => 'control-label')) !!}
                        {!! Form::text('date_ended', '',
                            array(
                                'class' => 'input-sm form-control',
                                'id' => 'date_ended',
                                'placeholder' => 'Enter date ended'
                            ))
                        !!}
                        {{--<% if(errors.date_ended) { %>
                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        <small class="help-block"><%= errors.date_ended.message %></small>
                        <% } %>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="checkbox mt-0">
                        <label>
                            {!! Form::checkbox('default', '', false) !!}
                            Make default
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('note', 'Note') !!}
                        <textarea name="note" id="note" class="form-control" placeholder="Enter a note"></textarea>
                    </div>
                </div>
            </div>
            <div class="row pull-right">
                <div class="col-md-12">
                    {!! Form::submit(
                                'Submit',
                                array(
                                    'id' => 'finish_seasons',
                                    'class' => 'btn btn-primary'
                                ))
                    !!}
                    or
                    <a href="javascript;" id="cancel_seasons">Cancel</a>
                </div>
            </div>

        {!! Form::close() !!}
    </div>

    @if(count($seasons))
        <div id="locations_list" class="col-sm-12" style="margin-top: 15px;">
            @include('dashboard.seasons.partials._seasons_list')
        </div>
    @endif

    <script src="{{ URL::asset('/js/seasons/seasons.js') }}"></script>
@endsection