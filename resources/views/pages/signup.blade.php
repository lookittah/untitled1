@extends('layouts.default')
<br>
@section('content')

    <form action="action_page.php" style="border:1px solid #ccc">
        <div class="container">
            <div>
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            </div>
            <table class="table">


                <tbody>
                <tr>


                    <td><label for="name"><b>Name</b></label> </td>
                    <td> <input type="text" placeholder="Enter name" name="name" required> </td>
                </tr>
                <tr>
                    <td><label for="email"><b>Email</b></label> </td>
                    <td><input type="text" placeholder="Enter Email" name="email" required> </td>
                </tr>
                <tr>
                    <td> <label for="psw"><b>Password</b></label> </td>
                    <td><input type="password" placeholder="Enter Password" name="psw" required> </td>
                </tr>
                <tr>
                    <td> <label for="psw-repeat"><b>Repeat Password</b></label> </td>
                    <td><input type="password" placeholder="Repeat Password" name="psw-repeat" required> </td>
                </tr>
                <tr>
                    <td><label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>
                    </td>

            <td>By creating an account you agree to our <a href="/" style="color:dodgerblue">Terms & Privacy</a>.</td>
                </tr>

            <tr class="clearfix">
                <td>   <button type="button" class="cancelbtn">Cancel</button> </td>
                <td>   <button type="submit" class="signupbtn">Sign Up</button> </td>
            </tr>
                </tbody>
            </table>
        </div>
    </form>

@endsection