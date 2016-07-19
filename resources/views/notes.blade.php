 <!DOCTYPE html>
 <html>
 <head>
 	<title>Payment module</title>
 </head>
 <body>
 	<h2>NOTES</h2>
 	<ul>
 		@foreach ($notes as $note)
 		<li>
 			{{ $note->note }}
 		</li>
 		@endforeach
 	</ul>
 	<form method="POST">
 		{!!csrf_field()!!}
 		<button type="submit">Create</button>
 	</form>
 </body>
 </html>