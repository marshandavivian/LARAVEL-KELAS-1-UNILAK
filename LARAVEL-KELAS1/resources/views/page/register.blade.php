@extends('layouts.master')

@section('title')
<h1>Buat Account Baru!</h1>
@endsection
@section('content')
<h3>Sign Up Form</h3>
<form action="/welcome" method="post">
    @csrf
    <label>First name:</label> <br />
    <input type="text" name="firstname" /> <br />
    <br /> 

    <label>Last name:</label> <br />
    <input type="text" name="lastname" /> <br />
    <br />

    <label>Gender:</label> <br />
    <input type="radio" value="1" name="gender" /> Male <br />
    <input type="radio" value="2" name="gender" /> Female <br />
    <input type="radio" value="3" name="gender" /> Other <br />
    <br />

    <label>Nationality:</label> <br />
    <select name="nationality">
        <option value="1">Indonesian</option>
        <option value="2">Malaysian</option>
        <option value="3">Singaporean</option>
    </select>
    <br />
    <br />

    <label>Language Spoken:</label> <br />
    <input type="checkbox" value="1" name="languagespoken" /> Bahasa Indonesia <br />
    <input type="checkbox" value="2" name="languagespoken" /> English <br />
    <input type="checkbox" value="3" name="languagespoken" /> Other <br />
    <br />

    <label>Bio:</label> <br />
    <textarea name="bio" cols="35" rows="9"></textarea> <br />

    <input type="submit" value="Sign Up"> <br> <br>

</form>
@endsection