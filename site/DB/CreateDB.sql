CREATE DATABASE IF NOT EXISTS codIT
CHARACTER SET utf8
COLLATE utf8_general_ci;
USE codIT

CREATE TABLE IF NOT EXISTS Users (
    user_id INT(5) NOT NULL AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    password VARCHAR(128) NOT NULL,
    lastname VARCHAR(100),
    firstname VARCHAR(100),
    mail VARCHAR(125),
    active INT(1) NOT NULL DEFAULT 1,
    CONSTRAINT pk_Users PRIMARY KEY(user_id),
    CONSTRAINT UC_Users UNIQUE (username, mail)
)
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Results (
    result_id INT(5) NOT NULL AUTO_INCREMENT,
    chapter INT(16),
    score INT(5) DEFAULT 0,
    state INT(1) NOT NULL DEFAULT 0,
    CONSTRAINT pk_Results PRIMARY KEY(result_id)
)
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Tests (
    test_id INT(5) NOT NULL AUTO_INCREMENT,
    user_id INT(5),
    result_id INT(5),
    CONSTRAINT pk_Tests PRIMARY KEY(test_id),
    CONSTRAINT fk_tests_user_id_users FOREIGN KEY (user_id) REFERENCES Users(user_id),
    CONSTRAINT fk_tests_result_id_results FOREIGN KEY (result_id) REFERENCES Results(result_id)
)
ENGINE = INNODB;
