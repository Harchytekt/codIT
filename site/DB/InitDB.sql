USE codIT

INSERT INTO Users (username, password, mail)
VALUES
('admin', SHA2('+%#5Test1¨*§', 512), 'admin@codit.be');

INSERT INTO Users (username, password)
VALUES
('alDuc', SHA2('+%#5Test1¨*§', 512));

INSERT INTO Results (chapter, score, state)
VALUES
(1, 10, 1), (2, 10, 1), (3, 10, 1), (4, 10, 1), (5, 10, 1);

INSERT INTO Results (chapter)
VALUES
(6), (7);

INSERT INTO Results (chapter, state)
VALUES
(1, 1);

INSERT INTO Results (chapter)
VALUES
(2), (3), (4), (5), (6), (7);

INSERT INTO Tests (user_id, result_id)
VALUES
(1, 1), (1, 2),(1, 3), (1, 4),(1, 5), (1, 6), (1, 7),
(2, 8), (2, 9),(2, 10), (2, 11),(2, 12), (2, 13), (2, 14);
