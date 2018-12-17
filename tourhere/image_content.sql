use project;

create table image_content(
	num int(4) not null primary key auto_increment,
	userId varchar(50) not null,
    userimage varchar(50) not null,
    userTxt varchar(200),
    postingtime timestamp
)default charset=utf8;