CREATE TABLE research (
    Id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    writers VARCHAR(255) NOT NULL,
    publishDate VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    journal VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL
);

CREATE TABLE courses (
    Id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    institution VARCHAR(255) NOT NULL,
    course_letters VARCHAR(255) NOT NULL,
    course_num INT(5) NOT NULL,
    course_title VARCHAR(255) NOT NULL,
    semester VARCHAR(255) NOT NULL
);

CREATE TABLE posts (
    Id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content VARCHAR(255) NOT NULL
);

INSERT INTO `research`(`Id`, `writers`, `publishDate`, `title`, `journal`, `link`) VALUES ('1','Gomes Rahul, Kamrowski Connor, Mohan Pavithra, Langlois Jordan, and Wildenberg Joe','October 2022','“IVC
filter detection using an artificial intelligence approach.”','Diagnostics','https://doi.org/10.3390/diagnostics12102475')

INSERT INTO `courses`(`Id`, `institution`, `course_letters`, `course_num`, `course_title`, `semester`) VALUES ('1','University of Wisconsin - Eau Claire','CS',330,'Programming Languages','Spring 2022; Fall 2022')

INSERT INTO `posts` (`Id`, `title`, `content`) VALUES ('1','First Post','This is the first post on the page')