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

		 * @param int/null $newCommentId id of this comment or null if a new tweet
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
	} catch(\RangeException $range) {
		//rethrow the exception to the caller
		throw(new \RangeException($range->getMessage(), 0, $invalidArgument));
	} catch(\TypeError $typeError) {
		//rethrow the exception to the caller
		throw(new \TypeError($typeError->getMessage(), 0, $typeError));
	} catch(\Exception $exception) {
		//rethrow the exception to the caller
		throw(new \Exception($exception->getMessage(), 0, $exception));
	}
}

/**
 * accessor method for comment id
 *
 * @return int/null value of comment id
 **/
public function getCommentId() {
	return ($this->CommentId);
}


/**
 * mutator method for tweet id
 *
 * @param int/null $newCommentId new value of comment id
 * @throws \RangeException if $newCommentId is not positive
 * @throws \TypeError if $newCommentId is not an integer
 **/
public function setCommentId(int $newCommentId = null) {
	// base case: if the comment id is null, this is a new comment without a mySQL assigned id (yet)
	if($newCommentId === null) {
		$this->commentId = mull;
		return;
	}

	// verify the comment id is positive
	if($newCommentId <= 0) {
		throw(new \RangeException("comment id is not positive"));
	}

	// convert and store the comment id
	$this->commentId = $newCommentId;
}


/**
 * accessor method for comment profile id
 *
 * @return int value of comment profile id
 **/
public function getCommentProfileId() {
	return($this->commentProfileId);
}


/**
 * mutator method for comment profile id
 *
 * @param int $newCommentProfileId new value of comment profile id
 * @throws \RangeException if $newProfileId is not positive
 * @throws \TypeError if $newProfileId is not an integer
 **/
public function setCommentProfileId(int $newCommentProfileId) {
	// verify the profile id is positive
	if($newCommentProfileId <= 0) {
		throw(new \RangeException("comment profile id is not positive"));
	}

	// convert and store the profile id
	$this->commentProfileId = $newCommentProfileId;
}


/**
 * accessor method for comment content
 *
 * @return string value of comment content
 **/
public function getCommentContent() {
	return($this->commentContent);
}


/**
 * mutator method for comment content
 *
 * @param string $newCommentContent new value of comment content
 * @throws \InvalidArgumentException if $newCommentContent is insecure
 * @throws \RangeException if $newCommentContent is > 256 characters
 * @throws \TypeError if $newCommentContent is not a string
 **/
	public function setCommentContent (string $newCommentContent) {
		// verfiy the comment content is secure
		$newCommentContent = trim($newCommentContent);
		$newCommentContent = filter_var($newCommentContent,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newCommentContent) === true) {
			throw(new \InvalidArgumentException("tweet content is empty or insecure"));
		}

		// verify the comment content will fit in the database
		if(strlen($newCommentContent) > 256) {
			throw(new \RangeException("comment content too large"));
		}

		// store the comment content
		$this->commentContent = $newCommentContent;
	}


/**
 * accessor method for comment date
 *
 * @return \DateTime value of comment date
 */
public function getCommentDate() {
	return($this->commentDate);
}


/**
 * mutator method for comment date
 *
 * @param \DateTime/string/null $newCommentDate comment as a DateTime object or string (or null to load the current time)
 * @throws \InvalidArgumentException if $newCommentDate is not a valid object or string
 * @throws /RangeException if $newCommentDate is a date that does not exist
 **/

public function setCommentDate($newCommentDate = null) {
	// base case: if the date is null, use the current date and time
	if($newCommentDate === null) {
		$this->commentDate = new \DateTime();
		return;
	}

	// store the comment date
	try {
		$newCommentDate = self::validateDateTime($newCommentDate);
	} catch(\InvalidArgumentException $invalidArgument)
	{
		throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
	} catch(\RangeException $range) {
	throw(new \RangeException($range->getMessage(), 0, $range));
	}
	$this->commentDate = $newCommentDate;
}


/**
 * inserts this comment into mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/

public function insert(\PDO $pdo) {
	// enforce the commentId is null
	if($this->commentId !== null) {
		throw (new \PDOException(("not a new comment"));
	}

	// create query template

}


