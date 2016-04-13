@extends('layouts.master')

@section('head-scripts')

<script type="text/javascript">
function onlyOneCheckBox() {
    var checkboxgroup = document.getElementById('checkboxgroup').getElementsByTagName("input");
    var limit = 3;
    for (var i = 0; i < checkboxgroup.length; i++) {
        checkboxgroup[i].onclick = function() {
            var checkedcount = 0;
                for (var i = 0; i < checkboxgroup.length; i++) {
                checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
            }
            if (checkedcount > limit) {
                alert("You can only select a maximum of " + limit + " sectors.");
                this.checked = false;
            }
        }
    }
}
</script>

@endsection

@section('content')

<div class="wrapper" id="wrapper">	
	<h1 class="heading">Schedule Creation</h1>
	<h2>{{Auth::user()->name}}</h2>

	<hr>
    <br>

	<form method="POST" id="schedule-form" action="/auth/register" class="schedule-form" name="schedule-form">
        {!! csrf_field() !!}

        <h3>Academics</h3>

        <!-- Left Side Container -->

        <section class="left-container">
            
            <div>
                Major:
                <input type="text" name="major" id="major" value="ISAT">
            </div>

            <div>
                Concentration:
                <select name="concentration" id="concentration">
                    <option value="pleaseSelect">--Please Select--</option>
                    <option value="biotechnology">Applied Biotechnology</option>
                    <option value="energy">Energy</option>
                    <option value="engineering">Engineering/Manufacturing</option>
                    <option value="environment">Environment</option>
                    <option value="ikm">Information Knowledge Management</option>
                    <option value="telecom">Telecommunications</option>
                </select>    
            </div>

            <div name="sectors" id="checkboxgroup">
                <ul class="sectors-list"> Sectors:
                    <li><input  type="checkbox" name="sectors" value="biotechnology">Applied Biotechnology</input></li>
                    <li><input  type="checkbox" name="sectors" value="energy">Energy</input></li>
                    <li><input  type="checkbox" name="sectors" value="engineering">Engineering/Manufacturing</input></li>
                    <li><input  type="checkbox" name="sectors" value="environment">Environment</input></li>
                    <li><input  type="checkbox" name="sectors" value="ikm">Information Knowledge Management</input></li>
                    <li><input  type="checkbox" name="sectors" value="telecom">Telecommunications</input></li>
                </ul>
            </div>

            <script type="text/javascript">
                onlyOneCheckBox()
            </script>
        </section>

        <!-- Right Side Container -->

        <section class="right-container">
            <div>
                Academic Year:
                <select name="academic-year" id="academic-year">
                    <option value="pleaseSelect">--Please Select--</option>
                    <option value="freshman">Freshman</option>
                    <option value="sophomore">Sophomore</option>
                    <option value="junior">Junior</option>
                    <option value="senior">Senior</option>
                </select>
            </div>
        
            <div>
                Semester:
                <select name="semester" id="semester">
                    <option value="fall">Fall</option>
                    <option value="spring">Spring</option>
                    <option value="summer">Summer</option>
                </select>
            </div>

            <div>
                Current Credit hours:
                <input type="text" name="chours" id="chours" value="{{ old('chours') }}" size="3">
            </div>

            <div>
                <ul class="grad-date">Exp. Graduation Date:
                    <li>
                        <select name="grad-semester" id="grad-semester">
                            <option value="pleaseSelect">--Please Select--</option>
                            <option value="winter">Winter</option>
                            <option value="spring">Spring</option>
                            <option value="summer">Summer</option>
                        </select>
                    </li>    
                    <li>20<input type="text" name="grad" id="grad" value="{{ old('grad') }}" maxlength="2" size="2"></li>
                </ul>
            </div>

            <div class="transfer">
                <label for="transfer">Tranfer Student?</label>
                <input  type="checkbox" name="tranfer" id="transfer" value="transfer"></li>
                <div class="clear"></div>
            </div>

            <br>
            <br>

        </section>

    </form>
    
    <div class="schedule-bottom">
        <hr>
        <h3>Preferences</h3>

            <div>
                Maximum Difficulty
                <select name="difficulty" id="difficulty">
                    <option value="easy">Easy</option>
                    <option value="moderate">Moderate</option>
                    <option value="difficult">Difficult</option>
                </select>
            </div>    
        
        <br>    

        <div class="nextpage">
            <button type="nextpage" class="btn"><a href="{{ url('/sched2') }}">Next Page</a></button>
        </div>

        <div class="backbutton">
            <button class="btn" onclick="goBack()">Go Back</button>

            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>

    </div>

</div>



@endsection        