# DiskominfoTest
This Repository its a product display for test at DISKOMINFO DIY

soal nomer 4 menggunakan SQQL query berikut

SELECT users.id, users.username, courses.course, courses.mentor, courses.title
FROM users
JOIN usercourse ON users.id = usercourse.id_user
JOIN courses ON usercourse.id_course = courses.id;
