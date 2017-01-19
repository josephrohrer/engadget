
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS article;
DROP TABLE IF EXISTS profile;



CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileHash CHAR(128) NOT NULL,
	profileSalt char(64) NOT NULL,
	UNIQUE(profileEmail),
	PRIMARY KEY(profileId)

);


CREATE TABLE article (
	articleId,
	articleContent MEDIUMTEXT,
	articleDate

);



CREATE TABLE comment (
	commentId
	commentArticleId
	commentProfileId
	commentDate
	commentContent
	commentParentId


);


