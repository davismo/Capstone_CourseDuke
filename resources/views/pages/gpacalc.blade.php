@extends('layouts.master')

@section('title', 'GPA Calculator')

@section('content')



<h1 class="heading">GPA Calculator</h1>
<h2>{{Auth::user()->email}}</h2>
<hr>
<br>
<br>

<div class="gpa-wrapper">
    <form method="POST"  action="{{ url('/gpacalc') }}" name="GPACalcForm">
        {!! csrf_field() !!}

        <div>
            Current Cumulative GPA
            <input type="text" name="current-gpa" id="current-gpa" value="{{ old('current-gpa') }}">
        </div>

        <div>
            Current Credits Total
            <input type="text" name="current-credits" id="current-credits" value="{{ old('current-credits') }}">
        </div>

        <div>
            New Cumulative GPA(out of 4.0)
            <input type="text" name="grade" id="grade" value="{{ old('grade') }}">
        </div>

        <table class="table">
            <br>
            <th></th>
            <th>Grade</th>
            <th>Credits</th>
            <tr>
                <td>Class 1</td>
                <td><input type=text size=5 name="GR1" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR1" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 2</td>
                <td><input type=text size=5 name="GR2" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR2" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 3</td>
                <td><input type=text size=5 name="GR3" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR3" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 4</td>
                <td><input type=text size=5 name="GR4" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR4" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 5</td>
                <td><input type=text size=5 name="GR5" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR5" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 6</td>
                <td><input type=text size=5 name="GR6" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR6" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 7</td>
                <td><input type=text size=5 name="GR7" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR7" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td>Class 8</td>
                <td><input type=text size=5 name="GR8" align=TOP maxlength="5"></td>
                <td><input type=text size=5 name="CR8" align=TOP maxlength="5"></td>
            </tr>
            <tr>
                <td style="text-align: center;"><input class="btn" type="BUTTON" VALUE="Calculate" name="CalcButton" OnClick="gpacalc()"></td>
                <td colspan="2">New GPA:<textarea name="textbox" id="textbox" rows="1" cols="15"></textarea></td>
            </tr>
        </table>
    </form>

    

</div>


<script> 
    function gpacalc()
    {
    //define valid grades and their values
    var gr = new Array(9); 
    var cr = new Array(9);
    var ingr = new Array(5);
    var incr = new Array(5);

    // define valid grades and their values
    var grcount = 12; 
    gr[0] = "A"; 
    cr[0] = 4.00; 
    gr[1] = "A-";
    cr[1] = 3.66;
    gr[2] = "B+";
    cr[2] = 3.33;
    gr[3] = "B";
    cr[3] = 3.00;
    gr[4] = "B-";
    cr[4] = 2.66;
    gr[5] = "C+";
    cr[5] = 2.33;
    gr[6] = "C";
    cr[6] = 2.0;
    gr[7] = "C-";
    cr[7] = 1.66;
    gr[8] = "D+";
    cr[8] = 1.33;
    gr[9] = "D";
    cr[9] = 1.0;
    gr[10] = "D-";
    cr[10] = 0.66;
    gr[11] = "F";
    cr[11] = 0;
    // retrieve user input
    ingr[0] = document.GPACalcForm.GR1.value;
    ingr[1] = document.GPACalcForm.GR2.value;
    ingr[2] = document.GPACalcForm.GR3.value;
    ingr[3] = document.GPACalcForm.GR4.value;
    ingr[4] = document.GPACalcForm.GR5.value;
    ingr[5] = document.GPACalcForm.GR6.value;
    ingr[6] = document.GPACalcForm.GR7.value;
    ingr[7] = document.GPACalcForm.GR8.value;
    incr[0] = document.GPACalcForm.CR1.value;
    incr[1] = document.GPACalcForm.CR2.value;
    incr[2] = document.GPACalcForm.CR3.value;
    incr[3] = document.GPACalcForm.CR4.value;
    incr[4] = document.GPACalcForm.CR5.value;
    incr[5] = document.GPACalcForm.CR6.value;
    ingr[6] = document.GPACalcForm.GR7.value;
    ingr[7] = document.GPACalcForm.GR8.value;

    // Calculate GPA
    var allgr =0;
    var allcr = 0;
    var gpa = 0;
    for (var x = 0; x < 5 + 3; x++)
            {
            if (ingr[x] == "") break;
    //      if (isNaN(parseInt(incr[x]))) alert("Error- You did not enter a numeric  credits value for Class If the class is worth 0 credits then enter the number 0 in  the field."); 
            var validgrcheck = 0;
            for (var xx = 0; xx < grcount; xx++)
                    {
                    if (ingr[x] == gr[xx])
                            {
                            allgr = allgr + (parseInt(incr[x],10) * cr[xx]);
                            allcr = allcr + parseInt(incr[x],10);
                            validgrcheck = 1;
                            break;
                            }
                    }
            if (validgrcheck == 0)
                    {
                    alert("Error- Could not recognize the grade entered for Class " + eval(x +  1) + ". Please use standard college grades in the form of A A- B+ ...F.");
                    return 0;
                    }
            }

    // this if-check prevents a divide by zero error
    if (allcr == 0)
            {
            alert("Error- You did not enter any credit values! GPA = N/A");
            return 0;
            }

    gpa = allgr / allcr;

    //alert("GPA =  " + eval(gpa));
    
    var textbox3 = document.getElementById('textbox'); 
    textbox.value= "Your GPA = " + eval(gpa);
    

    return 0;
    }    
</script>

<br>
<br>
<br>

<div class="backbutton">
        <button onclick="goBack()">Go Back</button>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
</div>         


@endsection