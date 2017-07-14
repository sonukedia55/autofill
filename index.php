<!Doctype html>
<html>
  <head>
  <style>
  *{
    margin: 0px;
    width: 100%;
  }
  .container{
    width: 100%;
  }
  .input{
    margin-top:50px;
    margin-left: 30%;
    width: 50%;
  }
  input{
    width: 150px;
    height: 30px;
  }
  ul{
    list-style: none;
    width: 160px;
    background-color: #f9f9f9;
    text-align: center;
    padding:0px;
  }
  li{
    padding: 2px;
    text-align: left;
  }
  #country_list{
    width:160px;
    display: none;
  }
  </style>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript">
    $(function(){

          var pr=-1;
      	 var cc = '';
          $('#country_idd').fadeOut();

      	$('#country_id').keyup(function(key) {

      		switch(parseInt(key.which,10)) {

      		case 38:
      		{
      			pr--;
            cc = $('#go'+pr).val();
            $('#country_idd').val(cc);
            $('#country_idd').fadeIn();

      		}break;

      		case 40:
      		{
            pr++;
            cc = $('#go'+pr).val();
            $('#country_idd').val(cc);
            $('#country_idd').fadeIn();

      		}break;

      		case 13:
      			{
              $('#country_id').val(cc);
              $('#country_idd').val('');
              $('#country_list').fadeOut();
              $('#country_idd').fadeOut();

              cc='';
              pr=-1;


      			}break;
      		}
      	});
});
  </script>
</head>
<body>
  <div class="container">
    <div class="input">
      <input type="text" autocomplete="off" onkeyup="autocomplet()" placeholder="enter name" id="country_id"/><br>
      <input type="text" autocomplete="off" id="country_idd" disabled/>
      <ul id="country_list"></ul>
    </div>
  </div>
 </body>
</html>
