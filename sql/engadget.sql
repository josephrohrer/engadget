
DROP TABLE IF EXISTS profile;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS article;



CREATE TABLE profile (
	profileId
	profileEmail VARCHAR(128) NOT NULL,
	profileHash
	profileSalt


);



CREATE TABLE comment (
	commentId
	commentArticleId
	commentProfileId
	commentDate
	commentContent
	commentParentId


);


CREATE TABLE article (
	articleId
	articleContent
	articleDate

);


