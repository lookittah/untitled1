@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1> contact</h1>

            <p class="lead">Please use this form to contact the site owner.</p>
        </div>
        <div class="card-body"></div>

        <form action="/contact" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="subject">
                    </div>

                </div>
            </form>
            <div class="form-group">
                <label for="body"> Message</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
    </div>
@endsection

