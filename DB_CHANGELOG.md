# Database Changelog


## [1.0] -> Document creation

- Current database format:


ITEMS:

+--------------------+-----------------+------+-----+---------+----------------+
| Field              | Type            | Null | Key | Default | Extra          |
+--------------------+-----------------+------+-----+---------+----------------+
| id                 | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| description        | varchar(255)    | NO   |     | NULL    |                |
| category           | int             | NO   |     | NULL    |                |
| status             | int             | NO   |     | NULL    |                |
| insert_date        | timestamp       | NO   |     | NULL    |                |
| price              | double(8,2)     | NO   |     | NULL    |                |
| second_description | varchar(255)    | YES  |     | NULL    |                |
| item_name          | varchar(255)    | NO   |     | NULL    |                |
+--------------------+-----------------+------+-----+---------+----------------+

IMAGES:

+-------------+-----------------+------+-----+---------+----------------+
| Field       | Type            | Null | Key | Default | Extra          |
+-------------+-----------------+------+-----+---------+----------------+
| id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| item_id     | bigint unsigned | NO   | MUL | NULL    |                |
| category    | varchar(255)    | NO   |     | NULL    |                |
| upload_date | datetime        | NO   |     | NULL    |                |
| image       | blob            | NO   |     | NULL    |                |
| description | varchar(255)    | NO   |     | NULL    |                |
+-------------+-----------------+------+-----+---------+----------------+


## [1.1] -> Users related tables creation

- 3 new more tables added to the database: password_reset_tokens, users and sessions


password_reset_tokens
+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| email      | varchar(255) | NO   | PRI | NULL    |       |
| token      | varchar(255) | NO   |     | NULL    |       |
| created_at | timestamp    | YES  |     | NULL    |       |
+------------+--------------+------+-----+---------+-------+

users
+-------------------+-----------------+------+-----+---------+----------------+
| Field             | Type            | Null | Key | Default | Extra          |
+-------------------+-----------------+------+-----+---------+----------------+
| id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| name              | varchar(255)    | NO   |     | NULL    |                |
| email             | varchar(255)    | NO   | UNI | NULL    |                |
| email_verified_at | timestamp       | YES  |     | NULL    |                |
| password          | varchar(255)    | NO   |     | NULL    |                |
| remember_token    | varchar(100)    | YES  |     | NULL    |                |
| created_at        | timestamp       | YES  |     | NULL    |                |
| updated_at        | timestamp       | YES  |     | NULL    |                |
+-------------------+-----------------+------+-----+---------+----------------+

sessions
+---------------+-----------------+------+-----+---------+-------+
| Field         | Type            | Null | Key | Default | Extra |
+---------------+-----------------+------+-----+---------+-------+
| id            | varchar(255)    | NO   | PRI | NULL    |       |
| user_id       | bigint unsigned | YES  | MUL | NULL    |       |
| ip_address    | varchar(45)     | YES  |     | NULL    |       |
| user_agent    | text            | YES  |     | NULL    |       |
| payload       | longtext        | NO   |     | NULL    |       |
| last_activity | int             | NO   | MUL | NULL    |       |
+---------------+-----------------+------+-----+---------+-------+


# [1.2] -> Added users column username, user_level and create foreign key on images column, referencing who added that image