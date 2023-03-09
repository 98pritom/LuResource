<?php include 'navBarIn.php'; ?>
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/cardmain.css">
<!-- <link rel="stylesheet" href="style/noticecard.css"> -->




<div class="section-header">
            <h1>Explore our smart resources</h1>
        <p class="p-header1">At home in the office or on the go, Dropbox keeps your personal and busines files</p>
        <p class="p-header2">safe and gives you the tools you need to protect the work you share.</p>
</div>

        
   

    <!-- Main -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><br><hr>
		</div>
	</div>
		
	<div class="row m-t-40">
		<div class="col-md-6 col-xs-12">
			<div class="card">
				<img class="card-img-top" src="storage/Ragib.jpg" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title fw-bolder">Danobir Dr. Syed Ragib Ali</h4>
                    <h6>Founder & Chairman, Board of Trustees, Leading University, Sylhet</h6>
                    <h6 class="text-center mt-3 mb-3 text-warning">Welcome Message</h6>
					<p class="card-text">It is my privilege to welcome faculty members, officers and staff, students and guardians to Leading University. Since its inception, the University endeavors to impart internationally standard tertiary education for the students at an affordable cost and exerts its attempt to disseminate expertise knowledge at home and abroad relentlessly. In essence, the missions and visions of this university are attributed to the production of competent and skilled manpower so as to expedite collective development of the country and it is my chance to underscore here that Leading University makes its progress on that direction. As a matter of fact, Leading University enjoys its international reputation through various prestigious employment patterns of its graduates and vows to continue for augmentation yet further. Indeed, Leading University attempts not only to create bona fide denizens of the land but it also cherishes to embed knowledge of extra-curricular activities in the mindsets of the students and as a citadel of liberal cum ultra-modern knowledge, this university seeks to make rooms for morally enlightened education.</p>
					<p class="text-center">Danobir Dr. Syed Ragib Ali</p>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 col-xs-12">
			<div class="card">
				<img class="card-img-top" src="storage/kazi.png" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title">Prof. Qazi Azizul Mowla, PhD, FIAB, AAG</h4>
                    <h6>Vice-Chancellor</h6>
                    <h6 class="text-center mt-3 mb-3 text-warning">Welcome Message</h6>
					<p class="card-text">I would like to warmly welcome all to Leading University. The vision of LU is to produce professionally competent and accomplished graduates who will be able to encounter any challenges at home and abroad, to contribute significantly to the human development. The missions of the LU are to provide internationally comparable education at a reasonable cost in a range of programs that are particularly relevant to societal needs, to offer opportunities and expertise to the students so that they can achieve their goals, to gain confidence of all stakeholders through Key Performance Indicators (KPI). Leading University is a higher education institute that boosts capacity in generating and sharing knowledge, skills and attitudes as recognised nationally and globally, making important contributions to development of the country. Leading University is characterised of a congenial academic environment where inspired intellect, high morals and social responsibilities are focused. Being in the bulk of challenges, LU addresses the multidimensional requirements of the job markets through smooth employment patterns.</p>
                    <p class="text-center">Prof. Qazi Azizul Mowla, PhD, FIAB, AAG
                        Vice-Chancellor
                        Leading University, Sylhet
                    </p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Notice -->

<!-- <div class="container mb-5">
	<h1 class="text-dark">Notice</h1>
<div class="flexbox mt-5">
		<?php
		
		$alldata = mysqli_query($conn, "SELECT * FROM `notice` ORDER BY id DESC");
		$i = 0;
		
		while ($row = mysqli_fetch_array($alldata)) {
			if (strlen($row['description']) > 100)
				$new_string = substr($row['description'], 0, 100) . '';
			else
				$new_string = $row['description'];
		$i++;
        echo "<div class='flexcard flexcardGreen'>
			<a href='noticeshow.php?id=$row[id]' class='noticeview'>
            <div class='flexcardNumber flexcardNumberGreen'>$i</div>
            <div class='flex flexcardTitle'>$row[title]</div>
            <div class='flex flexcardText'>$new_string</div>
            <div class='flex flexcardImg'><img class='flexcardimgItem'
                    src='$row[image]' alt=''></div>
			</a>
        	</div>";
		}
	
		?>
		</div> -->

<div class="container mt-5 mb-5">
	<h1 class="text-dark mb-5">Campus Location</h1>

	<div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28958.70270122546!2d91.77196291562502!3d24.869387499999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751015addbec3b7%3A0x9e87b7be58b5f67e!2z4Kay4Ka_4Kah4Ka_4KaCIOCmh-CmieCmqOCmv-CmreCmvuCmsOCnjeCmuOCmv-Cmn-Cmvw!5e0!3m2!1sbn!2sbd!4v1675790916594!5m2!1sbn!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

</div>

	</div>

<?php include 'footer.php'; ?>