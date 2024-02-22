<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
     require_once('bheader.php');
     ?>
     <h2 style="margin-top: 120px; text-align: center; color: powderblue;"> Administrators </h2>


<section style="margin-top:80px; ">
    <div class="container" >
    	<div class="row">
    	    
    		<div class="col-md-4" >
    		    <div class="card profile-card-1">
    		        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
    		        <img src="images/zahid.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Zahid Amin<small>Engineer</small></h2>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                    </div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Member</strong></p>
    		</div>

    		<div class="col-md-4" >
    		    <div class="card profile-card-1">
    		        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
    		        <img src="images/mahwesh.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Mahwesh Qadir<small>Engineer</small></h2>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                    </div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Member</strong></p>
    		</div>

    		<div class="col-md-4" >
    		    <div class="card profile-card-1">
    		        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
    		        <img src="images/aadil.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Aadil shafi<small>Engineer</small></h2>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                    </div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Member</strong></p>
    		</div>
    
    </div>
  
</div>

</section>
	<h1 style="margin-top: 100px;">About Us</h1>
	<p>Welcome to the HireMe Up, your premier destination for bridging the gap between talented students and prospective employers. Our platform is designed to revolutionize the way students and companies connect, ensuring a seamless, efficient, and transparent process for campus placements.</p>
	<img src="images/a1.jpg" style="width: 1350px;" height="500px">
	<h2>Our Vision</h2><p>
At Campus Placement System, we envision a future where every deserving student finds their perfect opportunity, and every company discovers their ideal talent pool. Our goal is to empower students to showcase their skills, passions, and achievements, while simplifying the recruitment journey for employers.
	</p>
<h2>Who We Are</h2><p>
We are a dedicated team of innovators who understand the dynamics of the modern recruitment landscape. Our platform brings together cutting-edge technology and insightful solutions to create a space where talent meets opportunity. With a deep appreciation for the aspirations of students and the requirements of recruiters, we've developed a robust system that caters to both sides of the placement equation.
</p>
<h2>What We Offer</h2>
<p>Efficiency: Our platform streamlines the entire placement process, from job postings to interview scheduling. This efficiency benefits students by simplifying applications and recruiters by saving valuable time.

Transparency: We believe in fairness and transparency. Our system ensures that students have access to a diverse range of job opportunities, and recruiters can make well-informed decisions about their potential hires.

Innovation: Our technology-driven approach constantly evolves to match the changing dynamics of the job market. We implement the latest tools to enhance user experience and provide valuable insights through data analytics.

Collaboration: We foster collaboration between educational institutions and industries. By creating a space where academia and the corporate world meet, we contribute to producing job-ready graduates who meet the demands of today's competitive job market</p>
<h2>Why Choose Us</h2>
<p>Comprehensive Platform: We offer an all-in-one platform that covers everything from creating student profiles to managing job listings, interview schedules, and feedback.

User-Centric: Our user-friendly interface ensures that both students and recruiters can navigate the platform effortlessly, making the placement process smooth and enjoyable.

Inclusivity: We cater to a wide range of industries and job roles, ensuring that students from various disciplines find opportunities that align with their skills and aspirations.

Data-Driven Insights: Our analytics tools provide valuable data and trends, helping institutions and recruiters make informed decisions and refine their recruitment strategies.</p>
<h2>JOIN US</h2>
<p>Whether you're a student looking to kickstart your career journey or a company seeking fresh talent, Campus Placement System is your trusted partner. Together, let's shape the future by connecting potential with opportunity.</p>

<?php 
require_once('footer.php');
?>
</body>
</html>
<style type="text/css">
	@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
body{
    font-family: 'Open Sans', sans-serif;
}
*:hover{
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}
section{
    float:left;
    width:100%;
    background: #fff;  /* fallback for old browsers */
    padding:30px 0;
}

/*Profile Card 1*/
.profile-card-1 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  color: #ffffff;
  text-align: center;
  height:368px;
  border:none;
}
.profile-card-1 .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(5px);
  filter: blur(5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-1 .card-content {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.profile-card-1 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-1 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-1 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-1 i {
  display: inline-block;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    border: 1px solid #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-1 .icon-block{
    float:left;
    width:100%;
    margin-top:15px;
}
.profile-card-1 .icon-block a{
    text-decoration:none;
}
.profile-card-1 i:hover {
  background-color:#fff;
  color:#2E3434;
  text-decoration:none;
}


</style>