@extends('layouts.app', ['page' => 'settings'])

@section('title', __('messages.edit_expense_category'))
    
@section('content')
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">business</i></a></li>
                <li class="breadcrumb-item">{{ __('messages.settings') }}</li>
                <li class="breadcrumb-item"><a href="{{ route('settings.expense_categories') }}">{{ __('messages.expense_categories') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.edit_expense_category') }}</li>
            </ol>
        </nav>
        <h1 class="m-0">{{ __('messages.edit_expense_category') }}</h1>
    </div>
 
    <div class="row">
        <div class="col-lg-3">
            @include('application.settings._aside', ['tab' => 'expense_categories'])
        </div>
        <div class="col-lg-9">
            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col card-form__body card-body bg-white">
                        <div class="form-row align-items-center mb-4">
                            <div class="col">
                                <p class="h4 mb-0">
                                    <strong class="headings-color">{{ __('messages.edit_expense_category') }}</strong>
                                </p>
                            </div>
                        </div>

                        <form action="{{ route('settings.expense_categories.update', $expense_category->id) }}" method="POST">
                            @include('layouts._form_errors')
                            @csrf
                            
                            @include('application.settings.expense_category._form')

                            <div class="form-group text-right mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('messages.update_category') }}</button>
                                <a href="{{ route('settings.expense_categories.delete', $expense_category->id) }}" class="btn btn-light text-danger delete-confirm">
                                    <i class="material-icons icon-16pt">delete</i>
                                    {{ __('messages.delete') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

