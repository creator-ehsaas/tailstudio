create table contact (
    id int unsigned auto_increment primary key,
    name varchar(255),
    phone_no varchar(255),
    email varchar(255),
    msg varchar(255),
    reg_date timestamp default current_timestamp on update current_timestamp
)