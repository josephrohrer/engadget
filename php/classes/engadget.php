<?php

/**
 * Created by PhpStorm.
 * User: Joseph Rohrer
 * Date: 1/19/17
 * Time: 8:15 AM
 * This is my attempt of pretending like I know what I'm doing.
 */
class Comment implements \JsonSerializable {
	use ValidateDate;
		/**
		 * id for this Comment; this is the primary key
		 * @var int $commentId
		**/
		private $commentId;
		/**
		 *
		 * @var int $commentArticleId
		 **/
		private $commentArticleId;
		/**
		 * id of the Profile that sent this Tweet; this is a foreign key
	 	 * @var int $commentProfileId;
	 	 **/
		private $commentProfileId;
		/**
		 * date and time this comment was sent, in a PHP Datetime object
		 * @var \DateTime $commentDate
	 	 **/
		private $commentDate;
		/**
		 * actual textual content of this comment
		 * @var string $commentContent
		 **/
		private $commentContent;

		private $commentParentCommentId;




	}
	}