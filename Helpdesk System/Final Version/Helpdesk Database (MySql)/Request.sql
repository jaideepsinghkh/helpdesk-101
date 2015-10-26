CREATE TABLE IF NOT EXISTS request (
request_id int(11) NOT NULL AUTO_INCREMENT,
user int(11) NOT NULL,
category_of_request varchar(255) NOT NULL,
details_request varchar(5000) NOT NULL,
contact_time varchar(255) NOT NULL,
request_date varchar(255) NOT NULL,
Status varchar(255) NOT NULL,
staff_id int(11),
  PRIMARY KEY (request_id),
  FOREIGN KEY (user) REFERENCES users(id),
  FOREIGN KEY (staff_id) REFERENCES staffs(staff_id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;