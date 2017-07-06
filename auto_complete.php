<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auto fill using php sql</title>
<style>
* {
	margin: 0;
	padding: 0;
}
body {
	padding: 10px;
	background: #eaeaea;
	text-align: center;
	font-family: arial;
	font-size: 12px;
	color: #333333;
}
.container {
	width: 1000px;
	height: auto;
	background: #ffffff;
	border: 1px solid #cccccc;
	border-radius: 10px;
	margin: auto;
	text-align: left;
}
.header {
	padding: 10px;
}
.main_title {
	background: #cccccc;
	color: #ffffff;
	padding: 10px;
	font-size: 20px;
	line-height: 20px;
}
.content {
	padding: 10px;
	min-height: 100px;
}
.footer {
	padding: 10px;
	text-align: right;
}
.footer a {
	color: #999999;
	text-decoration: none;
}
.footer a:hover {
	text-decoration: underline;
}
.label_div {
	width: 120px;
	float: left;
	line-height: 28px;
}
.input_container {
	height: 30px;
	float: left;
}
.input_container input {
	height: 20px;
	width: 200px;
	padding: 3px;
	border: 1px solid #cccccc;
	border-radius: 0;
}
.input_container ul {
	width: 206px;
	border: 1px solid #eaeaea;
	position: absolute;
	z-index: 9;
	background: #f3f3f3;
	list-style: none;
}
.input_container ul li {
	padding: 2px;
}
.input_container ul li:hover {
	background: #eaeaea;
}
#country_list_id {
	display: none;
}</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	var pr=-1;
	var cc = '';
	$('#country_id').keydown(function(key) {
		switch(parseInt(key.which,10)) {

		case 38:
		{
			pr--;
			cc = $('#go'+pr).val();
			$('#country_idd').val(cc);

		}
			break;

		case 40:
		{
			pr++;
			cc = $('#go'+pr).val();
			$('#country_idd').val(cc);

		}

				break;
				case 13:
				{

					$('#country_id').val(cc);
					$('#country_idd').val('');
					$('#country_list_id').hide(00);
					cc='';
					pr=-1;

				}

						break;
		}
	});
});
</script>
</head>

<body>
    <div class="container">

        <h1 class="main_title">Autofill using php sql</h1>
        <div class="content">
            <form>
                <div class="label_div">Type a keyword : </div>
                <div class="input_container">

                    <input type="text" autocomplete="off" id="country_id" onkeyup="autocomplet()"  /><br>
										<input type="text" autocomplete="off" id="country_idd" disabled  />
                    <ul id="country_list_id"></ul>
                </div>
            </form>
        </div>

    </div>
</body>
</html>
