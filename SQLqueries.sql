-- name: find_all_students
SELECT * FROM students;

-- name: find_student_by_id
SELECT * FROM students WHERE id='{{id}}';

-- name: insert_student
INSERT INTO students(firstname, lastname, age)
VALUES('{{firstname}}', '{{lastname}}', '{{age}}');

-- name: update_student
UPDATE students
SET firstname='{{firstname}}',
    lastname='{{lastname}}',
    age='{{age}}'
WHERE id='{{id}}';

-- name: delete_student
DELETE FROM students
WHERE id='{{id}}';