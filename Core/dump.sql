use blog;

SET FOREIGN_KEY_CHECKS = 0;
drop table if exists user;
drop table if exists post;
drop table if exists likes;
SET FOREIGN_KEY_CHECKS = 1;

create table user
(
    id       INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login    varchar(255) unique not null,
    password varchar(32),
    name     varchar(255)
) DEFAULT CHARSET = utf8
  ROW_FORMAT = COMPACT;

create table post
(
    id       INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title    varchar(255),
    content  text,
    is_background tinyint(1),
    image    varchar(255),
    color    varchar(7),
    created_at datetime default date(now()),
    tag_name varchar(50),
    user_id int(6) unsigned,
    FOREIGN KEY (user_id) REFERENCES user (id)
) DEFAULT CHARSET = utf8
  ROW_FORMAT = COMPACT;

create table likes
(
    id      INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    post_id INT(6) UNSIGNED,
    user_id INT(6) UNSIGNED,
    FOREIGN KEY (post_id) REFERENCES post (id),
    FOREIGN KEY (user_id) REFERENCES user (id)
) DEFAULT CHARSET = utf8
  ROW_FORMAT = COMPACT;



