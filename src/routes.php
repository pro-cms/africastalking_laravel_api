<?php
Route::get('ujumbe', function(){
	echo 'Hello from the africastalking package package!';
});

Route::get('ujumbee','zepson\africastalking\SmsController@done');
