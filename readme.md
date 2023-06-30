hostname:localhost
port:5432
username:postgres
password:1234

table creation
CREATE TABLE Address (
  id SERIAL PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  gender VARCHAR(100) NOT NULL,
  city VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);


dummmy data
insert into Address (name,gender,city,email) values ('umairasad','male','lahore','aumairasad@gmail.com')








