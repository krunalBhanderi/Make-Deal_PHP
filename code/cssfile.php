.div1{
	/*background-image:url('bg7.jpg');*/
   	border:1px solid red;
    border-radius: 5px;
    height:100%;
	width:100%;	
	/*background-repeat:repeat-x;*/
	background-size:cover;
	overflow:auto;
}

.indiv1{
	/*background-image:url("bg7.jpg");*/
	border-radius:6px;
	height:98%;
	width:100%;
	padding-left:2px;
	opacity:1;
	overflow:auto;
}
.indiv2{
	background-color:#f0f0f0;
	border-radius:6px;
	height:90px;
	width:100%;
	padding-left:2px;
	opacity:0.8;
	margin-top:5px;
	overflow:auto;
}
.indiv3{
	border:2px solid #AFEEEE;
	border-radius:6px;
	height:100%;
	width:55%;
	opacity:1;
	margin-top:20px;
	overflow:auto;
	float:center;
}
.input1{
	border:10px solid #AFEEEE;
	border-radius:5px;
	background-color:#FAFAD2;
	box-sizing:border-box;
	margin:5px;
	height:70px;
	width:30%;
	padding:auto;
	font-size:25px;
}
.input2{
	border:10px solid #AFEEEE;
	border-radius:5px;
	background-color:#FAFAD2;
	box-sizing:border-box;
	margin:5px;
	padding:auto;
	height:70px;
	width:50%;
	font-size:25px;
}

.tablecss{
	height:600px;
	width:70%;
	text-align:center;
	border-radius:20px;	
	
}
/*.tablecss:hover{
	box-shadow:0 20px 40px 0 rgba(0, 0, 0, 0.2), 0 20px 40px 0 rgba(0, 0, 0, 0.19);
	}*/
.tablecss1{
	box-shadow:0 20px 40px 0 rgba(0, 0, 0, 0.2), 0 20px 40px 0 rgba(0, 0, 0, 0.19);	
	height:800px;
	width:1735px;
	margin-top:20px;
}
.header_table{

}
.imgclass{
	height:150px;
	width:150px;
	border-radius:100px;
	box-shadow: 20px 7px 1px grey;
}
/*.imgclass:hover{
	background-color:#B0B0B0;
	box-shadow:0 20px 40px 0 rgba(0, 0, 0, 10.2), 0 20px 40px 0 rgba(0, 0, 0, 0.19);
}*/
.fontclass{
	font-size:12;
}

.inside_div1_table{
	width:99%;
	padding-top:20px;
}
/*tr:hover{
	box-shadow:0 20px 40px 0 rgba(0, 0, 0, 0.2), 0 20px 40px 0 rgba(0, 0, 0, 0.19);
	opacity:1;
}*/
.post_add_button{
	height:70px;
	width:15%;
	font-size:25px;
	border-radius:5px;
	border:10px solid red;
}
.post_add_button:hover{
		background-color: grey;
}

/* LOGIN HOVER DROPDOWN LIST */

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding:20px;
    font-size: 25px;
   }

.dropdown {
    position: absolute;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    font-size: 25px;
    padding: 20px 20px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
/* DROPDOWN LIST OVER **********************************
***********************************************************/
label
{
	border:1px solid grey;
	font-size:22px;
	color:blue;
	margin-top:2px;
	text-shadow:1px 1px black;
}
img
{
	border:1px solid grey;
	border-radius:10px;
	-webkit-filter: saturate(7);
	filter: saturate(7);
	box-shadow: 10px 10px 5px grey;
}

header{
	background-color: rgb(255,255,255);
	height:200px;
	box-shadow: 10px 10px 5px grey;
}
footer
{
	height:300px;
	background-image:url("footer.jpg");
	box-shadow: 10px 10px 5px grey;
	background-size:cover;
	margin-top:20px;
	/*background-image: url("footer.jpg");
	background-repeat: no-repeat;*/
}
body
{
	text-align:center;
	background-color: white;
	/*background-image: url('bg3.jpg');*/
	background-repeat: no-repeat;
	background-size: cover;
	/*background-image: linear-gradient(  #2e6620 ,  #8af56e ,#2e6620);*/
	/*background-image: linear-gradient(to bottom right, #20fe15 ,  #b6fcb3 );*/
	background-opacity:0.2;
}

/* ###############################
		login page css
	###############################
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar{
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}