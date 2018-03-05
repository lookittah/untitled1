@extends('layouts.default')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">List of contacts</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        <tr>

            <td> <a href="/card" class="badge badge-light"> example subject</a> </td>
            <td >
                <form role="form" id="delete_msg_form" class="contact-form" method="POST" >

                    <button type="button" class="btn" >Delete</button>
                </form>
            </td>
        </tr>

        </tbody>

    </table>
    @endsection
