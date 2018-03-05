@extends('layouts.default')

@section('content')

<form action="action_page.php">

    <table class="table">


        <tbody>
        <tr class="container">


            <td> <label for="uname"><b>Username</b></label> </td>
            <td> <input type="text" placeholder="Enter Username" name="uname" required> </td>
        </tr>
        <tr class="container">
        <td> <label for="psw"><b>Password</b></label> </td>
            <td><input type="password" placeholder="Enter Password" name="psw" required> </td>
        </tr>
        <tr class="container">
            <td><button type="submit">Login</button></td>

        </tr>
        <tr class="container">
        <td> <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        </td>

        </tr>


    <tr class="container" style="background-color:#f1f1f1">
        <td>  <button type="button" class="cancelbtn">Cancel</button> </td>
       <td> <span class="psw">Forgot <a href="/signup">password?</a></span> </td>
    </tr>
        </tbody>

    </table>
</form>

@endsection