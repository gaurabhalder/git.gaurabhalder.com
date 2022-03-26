@extends('layouts.app')
@section('content')
<div class="tile">
    <form action="{{ url('admin/infos') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">General Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="header">Site Name</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter site name"
                    id="header"
                    name="header"
                    value="{{ infos::get('header') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="title">Site Title</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter site title"
                    id="title"
                    name="title"
                    value="{{ infos::get('title') }}"
                />
            </div>
             <div class="form-group">
                <label class="control-label" for="phone">Phone Number</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter store default phone"
                    id="phone"
                    name="phone"
                    value="{{ infos::get('phone') }}"
                />
            </div>
            
            <div class="form-group">
                <label class="control-label" for="footer">Phone Number</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter Footer"
                    id="footer"
                    name="footer"
                    value="{{ infos::get('footer') }}"
                />
            </div>

        
        </div>
       
    </form>
</div>
@endsection