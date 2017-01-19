
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS article;
DROP TABLE IF EXISTS profile;



CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileHash CHAR(128) NOT NULL,
	profileSalt CHAR(64) NOT NULL,
	UNIQUE(profileEmail),
	PRIMARY KEY(profileId)

);


CREATE TABLE article (
	articleId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	articleContent MEDIUMTEXT,
	articleDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY(articleId)

);



CREATE TABLE comment (
	commentId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	commentArticleId INT UNSIGNED NOT NULL,
	commentProfileId INT UNSIGNED NOT NULL,
	commentDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	commentContent CHAR(256),
	INDEX(commentProfileId),
	FOREIGN KEY(commentProfileId) REFERENCES profile(profileId),
	FOREIGN KEY(commentArticleId) REFERENCES article(articleId),
	PRIMARY KEY(commentId)

);


