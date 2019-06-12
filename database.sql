DROP TABLE IF EXISTS 'users';

CREATE TABLE 'users' (
　　'id' int(11) NOT NULL AUTO_INCREMENT,
　　'username' varchar(64) NOT NULL,
　　'password' varchar(64) NOT NULL,
　　'email' varchar(64) NOT NULL,
　　PRIMARY KEY ('id'),
　　UNIQUE KEY 'username' ('username')
　　) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
　　
INSERT INTO 'users' ('id','username','password','email')
VALUES(1,'Kobe','113355','kobe@example.com'),
      (2,'Paul','224466','paul@example.com');