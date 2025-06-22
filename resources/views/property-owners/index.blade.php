@extends('layouts.app')

@section('title', 'Property Owners')

@section('content')
    <div class="text-end">
        <button type="button" class="btn bg-gradient-dark bg-brand-secondary mb-0"
            onclick="loadModal('{{ route('property-owners.create') }}')">
            <i class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Add New
        </button>
    </div>
    <div class="card mt-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark bg-brand shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Property Owners</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                {!! $dataTable->table(['class' => 'table align-items-center mb-0', 'style' => 'width: 100%; height: 100%;']) !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
