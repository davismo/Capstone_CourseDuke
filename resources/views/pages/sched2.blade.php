@extends('app')

@section('content')
	<body>

		<div id="selection" class="selection">
			<div class="list1">
				<textarea name="message1" rows="10" cols="30">
					Test 1
				</textarea>
			</div>
			<div class="list2">
				<textarea name="message2" rows="10" cols="30">
					Test 2
				</textarea>
			</div>
		</div>

		<div class="Backbutton">
            <button onclick="goBack()">Go Back</button>

            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>
	</body>
@endsection