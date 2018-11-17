create database arkademy;
use arkademy;
create table product_categories(id int(9) primary key auto_increment not null, name varchar(50) not null, created_date timestamp not null);
create table products(id int(9) primary key auto_increment not null, name varchar(50) not null, category_id int(9), created_date timestamp not null,FOREIGN KEY (category_id) REFERENCES product_categories(id));

insert into product_categories values ("1", "Peralatan Mandi", "2014-11-22 12:45:34"), ("2", "Minuman Kemasan","2014-11-22 12:46:34"), ("3", "Produk Susu", "2014-11-22 12:47:34");

insert into products values ("1", "Sabun Wangi", "1", "2014-12-22 12:45:34"), ("2", "Minuman Cola", "2", "2014-12-22 12:45:36"), ("3", "Prenagon Gold", "3", "2014-12-22 12:46:34"), ("5", "Aquaa", "2", "2014-12-22 12:47:34"), ("6", "The Botol", "2", "2014-12-22 12:48:34"), ("7", "Sampo", "1", "2014-12-22 12:48:40");