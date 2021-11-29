CREATE TABLE users(
    id int(4) PRIMARY KEY,
   	type varchar(20) NOT NULL
);

INSERT INTO users(id,type) values(20193212,'student'),	
(20217654,'student'),
(20195632,'student'),	
(20219867,'student'),
(20196632,'student'),	
(20218756,'student'),
(20226452,'student'),
(20213212,'student'),	
(20221876,'student'),
(20213387,'student'),	
(20224532,'student'),
(912,'professor'),	
(654,'professor'),
(632,'professor'),	
(867,'professor'),
(637,'professor'),	
(756,'professor'),
(452,'professor'),
(212,'professor'),	
(876,'professor'),
(387,'professor'),	
(532,'professor');

CREATE TABLE courses(
    id int(4) PRIMARY KEY,
    name varchar(40) NOT NULL
);

INSERT INTO courses(id,name) values(1001,'Database'),	
(1002,'Sofware Engineering'),
(1003,'Visual Programming'),
(1004,'Assembly Language'),
(1005,'Linear Algebra'),
(1006,'Data Structure'),
(1007,'Calculus');

CREATE TABLE users_courses(
	user_id int(4),
    course_id int(4),
    PRIMARY KEY(user_id,course_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO users_courses(user_id,course_id) values(20193212,1001),	
(20217654,1002),
(20195632,1003),	
(20219867,1004),
(20196632,1005),	
(20218756,1006),
(20226452,1007),
(912,1001),	
(654,1002),
(632,1003),	
(867,1004);