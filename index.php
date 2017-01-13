<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8" />

		<!-- load custom css here -->
		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<title>Data Design Project - Engadget</title>
	</head>

	<main>
		<header>
			<h1>Data Design Project</h1>
			<img src="images/logo.png" alt="Engadget logo">

		</header>
			<h2>User Persona</h2>
				<ol>
					<p><strong>Name: </strong>George Jetson<br>
					<strong>Age: </strong>34</p>

					<p><strong>Profession: </strong> George is a Product Development Manager for a company called "Big Dipper." Big Dipper is a start-up company whose first product is going to be building a robot named Rosie. Rosie is a robotic maid and housekeeper that will assist a family with everyday tasks including cooking, cleaning, and babysitting. </p>

					<p><strong>Technology: </strong> Big Dipper provided George with a new 15" Macbook Pro (dongles in tow) updated to Mac OS Sierra and an iPhone 7 Plus with iOS 10.</p>

					<p><strong>Attitudes and Behaviors: </strong> George hates websites that are hard to use. He likes that Engadget is easy to use and that users are able to comment on articles. He also likes that the users who read Engadget are also the people who would potentially buy his robot.</p>

					<p><strong>Frustrations and Needs:</strong> George is frustrated with how hard it is to communicate with a mass amount of people about a product. He could email every single person who is interested in Rosie but that would take up all of his time. He needs a medium where he can answer questions from customers and not have to answer the same things over and over again.</p>

				</ol>

			<h2>Use Case</h2>
				<ol>George has to stay up on the latest and greatest technology devices for his job, as well as for fun. He reads <a href="http://www.engadget.com">Engadget.com</a> regularly to keep up, as well as to research some of his competition.
					<br><br>Rosie debuted at the 2017 Consumer Electronics Show and was featured by multiple news and media outlets. Engadget.com did a write-up on Rosie and George would like to see the initial reactions and comments that potential customers have on the site. He can also interact with potential customers and answer questions that they might have.
				</ol>

			<h2>Interaction Flow</h2>
				<ol>
					<li>George navigates to Engadget.com and is already logged in.</li>
					<li>George navigates to the article about Rosie.</li>
					<li>George reads comments about the article.</li>
					<li>George replies to comments.</li>

				</ol>

			<h2>Conceptual Model</h2>
			<ul class="Conceptual-Model">
				<strong>PROFILE</strong>
				<p>profileId (Primary Key)<br>
					profileEmail</p>
				<strong>COMMENTS</strong>
				<p>commentID<br>
					commentUser<br>
					commentDate<br>
					commentLikes<br>
					commentReply</p>

			</ul>
		<!-- This is a comment -->
	</main>

</html>