@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                    All Questions
                    <div class="ml-auto">
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Question</a>
                    </div>
                    </div>
                </div>

                <div class="card-body">
                   <form action="{{ route('questions.store') }}" method="post">
                       {{ csrf_field() }}
                       <div class="form-group">
                           <label for="question-title">Question Title</label>
                           <input type="text" name="title" id="question-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}">
                           @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{$error->first('title')}}</strong>
                                </div>
                           @endif
                       </div>
                       <div class="form-group">
                           <label for="question-body">Explain you question</label>
                           <textarea name="body" id="question-body" cols="30" rows="10" class="form-control{{ $errors->has('body') ? ' is-invalid' : ''}}"></textarea>
                           @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{$error->first('body')}}</strong>
                                </div>
                           @endif
                       </div>
                       <div class="form-group">
                           <button type="submit" class="btn btn-outline btn-lg">Ask this question</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
