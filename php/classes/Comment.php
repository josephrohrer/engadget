<?php

/**
 * Created by PhpStorm.
 * User: Joseph Rohrer
 * Date: 1/19/17
 * Time: 8:15 AM
 * This is my attempt of pretending like I know what I'm doing.
 */
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
		 * id of the Profile that sent this comment; this is a foreign key
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


		/**
	 	* constructor for this Comment

		 * @param int|null $newCommentId id of this comment or null if a new tweet
		 * @param int $newCommentProfileId id of the Profile that created the comment
		 * @param string $newCommentContent string containing actual comment data
		 * @param \DateTime|string|null $newCommentDate date and time comment was made or null if set to current date and time
		 * @throws \InvalidArgumentException if data types are not valid
		 * @throws \RangeException if data values are out of bounds
		 * @throws \TypeError if data types violate type hints
		 * @throws \Exception if some other exception occurs
		 **/
		public function __construct(int $newCommentId = null, int $newCommentProfileId, string $newCommentContent, $newCommentDate = null) {
			try {
				$this->setCommentId($newCommentId);
				$this->setCommentProfileId($newCommentProfileId);
				$this->setCommentContent($newCommentContent);
				$this->setCommentDate($newCommentDate);
			} catch(\InvalidArgumentException $invalidArgument) {
				// rethrow the exception to the caller
				throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
			} catch


	 */

	}
	}