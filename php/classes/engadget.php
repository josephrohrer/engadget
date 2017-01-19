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
		 * @var int $commentArticleId
		 */
		private $commentArticleId;
	/**
		private $commentProfileId;

		private $commentDate;

		private $commentContent;

		private $commentParentCommentId;




	}
	}