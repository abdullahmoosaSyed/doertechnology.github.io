<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@400;500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap');


/* -------------------------RAndom Styling-------------------------------- */
:root{
    --success:#2ecc71;
    --error:#ff1a1a;
    --body:#f9fafb;
    --button:#3498db;
}
html{
	scroll-behavior: smooth;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
   
}

body{
	font-family: 'roboto',sans-serif;
	word-spacing: 1px;
    letter-spacing: 1px;
	overflow-x: hidden;
	background: #232526;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
p{
	font-size: 1rem;
	line-height: 1.6;
	font-weight: 500;
	
}
a{
	text-decoration:none ;
	
	
}

a:hover{
	text-decoration:none ;

}

li{
	list-style: none;
}

/* ------------------------------------------Header part------------------------------------ */


.header{
	width: 100%;
	height: 100vh;
	background:linear-gradient(to right, rgba(51, 51, 51, 0.301), rgba(54, 54, 54, 0.432)),url(img/ej-yao-D46mXLsQRJw-unsplash.jpg); 
	background-size: 100% 100%;
	background-repeat: no-repeat;
	background-position:bottom;
	background-attachment: fixed;
	clip-path: polygon(100% 0%, 100% 64%, 50% 99%, 0 64%, 0 0);
	position: relative;
	border: 1px solid #333;
}

.header::before{
	content: "";
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
    background: linear-gradient(to right,  rgba(20, 20, 20, 0.479), rgba(48, 44, 117, 0.534)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    z-index: -1;
    
}


.header-section{
	color: #fff;
	width: 100%;
	height: inherit;
	text-align: center;
	position: relative;
	transition: all .2s;
	
}


.center-div{
	position: absolute;
	width: 100%;
	height: auto;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-webkit-transform: translate(-50%,-50%);
}

.header-button a{
	 border: 1px solid #fff;
	 border-radius: 100px;
	 margin: 0px 5px;
	 padding: 12px 35px;
	 outline: none;
	 color: #fff;
	 font-size: 1rem;
	 font-weight: normal;
	 line-height: 1.4;
	 text-align: center;
	 box-shadow: 0 0 30px rgba(34, 34, 70, 0.521);
	 transition: all .5s;
}

.header-button a:hover{
	background: #ccc;  /* fallback for old browsers */
    transform: scale(2.5);
	color: rgb(24, 11, 34);
	box-shadow: 0 0 60px rgba(10, 10, 10, 0.726);
	font-weight: bold;
	
}

.center-div p{
	font-size: 1.3rem;
	padding: 10px 0 20px 0;
}



/* ------------------------------------------Navbar part------------------------------------ */



.navbar::before{
	content: "";
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
    background: rgba(71, 102, 143, 0.014) ;
	z-index: -1;
	
}

.nav-item a{
	color: #fff;
	font-weight: normal;
	margin-left: 20px;
    transition: ease-in .2s;
}
.nav-item a:hover{
	border-bottom: 2px solid lightblue;
}
.navbar-brand{
	font-family: 'lato', sans-serif;
	
}

/* ------------------------------------------Why us part------------------------------------ */


.header-extradiv{
	width: 100%;
	height: auto;
	margin: 100px 0;
	text-align: center;
}

.extra-div h2{
	font-size: 1rem;
	margin: 20px 0 15px 0;
	font-weight: bold;
	line-height: 1.1;
	word-spacing: 4px;
}
.extra-div{
	background: #2e2e2e;
	border:medium none;
	padding: 100px;
	border-radius: 3px;
	transition: .3s;
	box-shadow: 0 0 7px 0 rgba(68, 67, 129, 0.144);
	color: #ddd;
	outline:none;
	border: 1px solid rgba(68, 67, 129, 0.582) ;
	cursor: pointer;
	position: relative;
	width: 100px;
	
}

.fa-3x{
	color:#fff;
	/* box-shadow: 0 0 10px 0 rgba(68, 67, 129, 0.658); */
	position: absolute;
	top: 30%;
	left:50% ;
	transform: translate(-50%,-30%);
}

.content{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-60%);
	
}

.content span{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translateX(-50%);
}

.extra-div:hover{
	box-shadow: 10px 10px 30px 0 rgba(68, 67, 129, 0.658);
	
}




.about-item .header-button a{
    color: #aaa;
    box-shadow: 0 0 5px rgba(29, 28, 104, 0.521);
}



/*----------------------------------------- service section------------------------------ */

.services{
	background:linear-gradient( rgba(51, 51, 51, 0.897),rgba(51, 51, 51, 0.849)),url(img/assign.jpg);  
	background-size: 100% 100%;
	
	height: 110vh;
	

}



.section-title{
	text-align: center;
	color: #ddd;
	text-transform: uppercase;
	font-size: 20px;
	padding-top: 40px;
}

.border{
	width: 160px;
	height: 2px;
	background-color:#2d9ae2;
	margin: 10px auto;
}



.flex-container {
	display: flex;
	height: 400px;
	justify-content:center;
	flex-wrap:wrap;
	align-items: center;
	margin-top: 40px;
  }
  
  .flex-container > div {
	color: #f1f1f1;
	width: 350px;
	margin:5px 30px;
	text-align: center;
	height:150px ;
	font-size: 40px;
	padding: 0 0;
    
  }
.icon-container{
	padding-bottom: 15px;
}
  /* .special{
	  padding: 50px 0 !important;
	  width: 300px !important;
  } */
 /* ---------------------------------------about section starts here----------------------------- */

.about-section{
	color: #aaa;
	height: 60vh;
	
	width: 100%;
	display: inline-block;
    
}

.section-title .section-subtitle{
    margin-bottom: 7px;
    padding-left: 7px;
    font-size: 16px;
    line-height: 1;
    text-transform: uppercase;
    color:#aaaaaa;
    text-align: center;
	font-weight: 700;
	text-align: center;
}

.section-main-title{
    margin-top: 0;
    margin-bottom: 37px;
    font-size: 30px;
    line-height: 1.27;
	font-weight: 300;
	text-align: center;
	
}
 
.section-main-title strong{
	font-weight: 600;
	margin-left: 5px;
}  

.composition{
	position: relative;
	
}
.composition_photo:hover{
	transform: scale(1.1);
	box-shadow: 0 2.5rem 2rem #292828b4;
	z-index: 20;
	outline: 10px solid #cececfe3 ;
}
.composition_photo{
	box-shadow: 0 1.5rem 2rem #4140408c;
	border-radius: 2px;
	position: absolute;
	z-index: 10;
	transition: all .3s ease ;
	outline-offset: 5px;
}
.composition_photo_p1{
   left:50% ;
   top:1.4rem ;
}
.composition_photo_p2{
	left:0 ;
	top:2rem ;
 }
 .composition_photo_p3{
	left:20% ;
	top: 10rem;
 }
.about-item{
	/* text-align: center; */
	position: relative;
}

p.about-content{
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	font-size: 16px;
	position: absolute;
	top: 2rem;
}





                               /*Contact starts here  */
.contact{
     width: 100%;
     display: flex;
     min-height:120vh;
     align-items: center;
     justify-content: center;
     position: relative;
	 margin-top: 300px;
	 background: linear-gradient(rgba(0, 0, 0, 0.63),rgba(0, 0, 0, 0.63)),url(img/contact.jpg);
	 background-position: center;
	 background-size: 100% 100%;
	 background-repeat: no-repeat;
 }
 .contact-heading{
    text-align: center;
    margin-top: 70px;
    color: #ccc;
    opacity: 0.7;
    margin-bottom: 70px;
    position: absolute;
    top:2%;
    left: 50%;
    transform: translate(-50%,-50%);
   }
   .contact-heading h1{
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 35px;
    margin-bottom: 10px;
    font-weight:600;
  }
  .contact-heading h6{
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 10px;
    margin-bottom: 10px;
    font-weight:lighter;
  }
  form{
    width: 50%;
    margin: 0 auto;
  
  }
  form label{
    font-size: 16px;
	margin-bottom: 15px;
	color: #ccc;
  }
  input,
  select,
  textarea{
    width: 100%;
    padding: 1rem;
    margin-bottom:6px;
    border: none;
    margin-top: 6px;
  }
  input[type="submit"]{
    width: initial;
    background-color:  #7e8181;
    color:black;
    padding: 10px 10px;
    border-radius: .4rem;
    font-size: 1rem;
    transition: background-color 0.6s;
    cursor: pointer;
  }
  input[type="submit"]:hover{
    background-color: black;
    color:#677779 ;
    
  }
  


footer {
    text-align: center;
    padding: 10px;
    background-color: #343a40;
	color: rgb(146, 141, 141);
	height: 200px;
	position: relative;
  }

footer .footer-bottom{
	background-color: #343a40;
	color: 686868;
	height: 120px;
	position: absolute;
	bottom: 30px;
	text-align: center;
	width: 100%;
	left: 0;
	padding-top: 10px;
}
.footer-bottom a{
	text-decoration: none;
	color: #ccc;
}

@media only screen and(max-width:960px){
	.services-box{
		max-width:45%;
	}
	.center-div h1 {
		font-size: 2.5rem;
	}
	.services{
		background:linear-gradient( rgba(51, 51, 51, 0.897),rgba(51, 51, 51, 0.849)),url(img/assign.jpg);  
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		height: 380vh;
	}

}

@media only screen and (max-width: 768px) {
	/* For mobile phones: */
	.services-box {
	  max-width: 100%;
	}
	.center-div h1 {
		font-size: 1.2rem;
		margin: 0;
	}
	.header{
		
		background:linear-gradient(to right, rgba(51, 51, 51, 0.753), rgba(46, 46, 46, 0.76)),url(img/ej-yao-D46mXLsQRJw-unsplash.jpg); 
		background-size: cover;
		background-repeat: no-repeat;
		background-position: bottom ;
		
		
	}

	.nav-item{
		text-align: center !important;
	}
	.nav-item a:hover{
		border-bottom: none;
		
	}
	
	.center-div{
		top: 35%;
		margin: 0 10px;
		padding: 0 20px;
	}
	.services{
		background:linear-gradient( rgba(51, 51, 51, 0.897),rgba(51, 51, 51, 0.849)),url(img/assign.jpg);  
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		height: 330vh;
	}
	.section-title{
		padding-top: 20px;
	}
	.about-section{
		color: #aaa;
		height: 120vh;
		
		width: 100%;
		display: inline-block;
		
	}
	
	
	.composition{
		display: none;
	}
	.header::before{
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: linear-gradient(to right,  rgba(17, 17, 17, 0.829), rgba(2, 2, 51, 0.781)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		z-index: -1;
		
	}

	.contact{
		background: linear-gradient(rgba(0, 0, 0, 0.63),rgba(0, 0, 0, 0.63)),url(img/contact.jpg);
		background-position: bottom;
		background-size: cover;
		background-repeat: no-repeat;
	    margin-top: 30px;
	}
	}
  

@media only screen and(max-width:480px){
	.services-box{
		max-width: 100%;
	}
	.center-div h1 {
		font-size: 1rem;
	}
	.header{
		
		background:linear-gradient(to right, rgba(51, 51, 51, 0.644), rgba(204, 204, 204, 0.521)),url(img/ej-yao-D46mXLsQRJw-unsplash.jpg); 
		background-size: cover;
		background-repeat: no-repeat;
		background-position:center;
		
	}
	.header-section::before{
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: linear-gradient(to right,  rgba(51, 51, 51, 0.644), rgba(29, 28, 104, 0.521)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		z-index: -1;
		
	}
	.nav-item{
		text-align: center !important;
	}

	.center-div h1{
		top: 20%;
		margin: 0 5px;
	}
	.services-section{
		background:linear-gradient( rgba(51, 51, 51, 0.897),rgba(51, 51, 51, 0.849)),url(img/assign.jpg);  
		background-size: 100% 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
}

























</style>