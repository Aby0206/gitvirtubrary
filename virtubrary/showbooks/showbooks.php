<?php

include '../../logreg/config.php';

session_start();


	$sql = "SELECT * FROM `datasorted` LIMIT 25";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    //echo "id: " . $row["COL 1"]. " - Name: " . $row["COL 2"]. " " . $row["COL3"]. "<br>";
	    //echo $row["COL3"]."<br>";
	  }
	} else {
	  echo "0 results";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books</title>
	<link rel="stylesheet" type="text/css" href="./showbooks.css">
</head>
<body>

<ul id="list">

  <!-- <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book10.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book02.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book03.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book04.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book05.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book06.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book07.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book08.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book09.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book01.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book11.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book13.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book12.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book14.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book15.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book16.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book17.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book18.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book19.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book20.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book21.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book22.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book23.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book24.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book25.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book26.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book27.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book28.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book29.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book30.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book31.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book32.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book33.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book34.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book10.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book02.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book03.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book04.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book05.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book06.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book07.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book08.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book09.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book01.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book11.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book13.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book12.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book14.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book15.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book16.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book17.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book18.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book19.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book20.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book21.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book22.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book23.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book24.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book25.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book26.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book27.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book28.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book29.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book30.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book31.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book32.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book33.jpg" alt=""></li>
  <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/book34.jpg" alt=""></li> -->
</ul>
<script type="text/javascript">
	function show_error(argument) {
		console.log(JSON.stringify(argument),argument)

	}
	let array=[]
	const redirection=(index)=>{location.href="./book1.php"+'?key='+index;return false};
	window.onload=()=>
	{
	let i=0;
	while(i<25){
		i++;
		array.push(i);
		let imgel=document.createElement('img')
		imgel.src='./imgs/filenamehtml-content-holder'+i+'.jpg';
		imgel.onerror=show_error;
		let liel=document.createElement('li');
		
		liel.onclick = (event)=>{let index=i;redirection(imgel.src)};
	//	liel.onclick= redirection(i);
		liel.appendChild(imgel);
		document.getElementById('list').appendChild(liel);
	}
}

</script>
</body>
</html>