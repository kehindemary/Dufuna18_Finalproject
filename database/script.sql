	create DATABASE menu_order;
	use menu_order;
	CREATE TABLE orders (
    	order_id int PRIMARY KEY AUTO_INCREMENT not null,
	firstname varchar(30) NOT null,
	lastname varchar(50) not null,
	email varchar(50) not null,
    	gender ENUM('male','female') not null,
	phoneno varchar(11) not null,
    	address1 varchar(200) not null,
    	address2 varchar(100) not null,
    	city varchar(50) not null,
    	state1 varchar(20) not null,
    	menu varchar(50) not null,
    	quantity int(10) not null,
    	order_status boolean not null,
    	order_date  datetime not null);
    	use menu_order;
	CREATE TABLE admin_login (
    	admin_id int PRIMARY KEY AUTO_INCREMENT not null,
	username varchar(20) NOT null,
	password1 varchar(50) not null);
 	use menu_order;
	INSERT INTO admin_login (username,password1)VALUES('admin', MD5('dufuna18'));

