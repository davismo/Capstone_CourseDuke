@extends('layouts.master')
@section('content')
	<h1>Work In Progress...</h1>

	<div class="gpa-wrapper" style="text-align: center;">
		<form Name="GPACalcForm" style="text-align: center;">
			<table BORDER=5 BGCOLOR=#C0C0C0 style="width: 100%;">
				<br>
				<th></th>
				<th>Grade</th>
				<th>Credits</th>
				<tr>
					<td>Class 1</td>
					<td><input type=text SIZE=5 NAME="GR1" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR1" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 2</td>
					<td><input type=text SIZE=5 NAME="GR2" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR2" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 3</td>
					<td><input type=text SIZE=5 NAME="GR3" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR3" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 4</td>
					<td><input type=text SIZE=5 NAME="GR4" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR4" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 5</td>
					<td><input type=text SIZE=5 NAME="GR5" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR5" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 6</td>
					<td><input type=text SIZE=5 NAME="GR6" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR6" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 7</td>
					<td><input type=text SIZE=5 NAME="GR7" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR7" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr>
					<td>Class 8</td>
					<td><input type=text SIZE=5 NAME="GR8" ALIGN=TOP MAXLENGth=5></td>
					<td><input type=text SIZE=5 NAME="CR8" ALIGN=TOP MAXLENGth=5></td>
				</tr>
				<tr style="text-align: center;">
					<td COLSPAN=3><input type="BUTTON" VALUE="Calculate" NAME="CalcButton" OnClick="gpacalc()"></td>
				</tr>
			</table>
		</form>

		<div class="gpa-area">
			GPA Area: 
			<textarea name="textbox" id="textbox" rows="" cols=""></textarea>
		</div>

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
		var grcount = 11; 
		gr[0] = "A+";
		cr[0] = 5;
		gr[1] = "A"; 
		cr[1] = 4; 
		gr[2] = "A-";
		cr[2] = 3.66;
		gr[3] = "B+";
		cr[3] = 3.33;
		gr[4] = "B";
		cr[4] = 3;
		gr[5] = "B-";
		cr[5] = 2.66;
		gr[6] = "C+";
		cr[6] = 2.33;
		gr[7] = "C";
		cr[7] = 2;
		gr[8] = "C-";
		cr[8] = 1.66;
		gr[9] = "D";
		cr[9] = 1;
		gr[10] = "F";
		cr[10] = 0;
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



@endsection

