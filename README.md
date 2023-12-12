# DiskominfoTest
This Repository its a product display for test at DISKOMINFO DIY

soal nomer 4 menggunakan SQL query berikut

SELECT users.id, users.username, courses.course, courses.mentor, courses.title
FROM users
JOIN usercourse ON users.id = usercourse.id_user
JOIN courses ON usercourse.id_course = courses.id;

soal nomer 5 menggunakan SQL query berikut
SELECT users.id, users.username, courses.course, courses.mentor, courses.title
FROM users
JOIN usercourse ON users.id = usercourse.id_user
JOIN courses ON usercourse.id_course = courses.id
WHERE courses.title LIKE 'S%';

soal nomer 6 menggunakan query berikut

SELECT users.id, users.username, courses.course, courses.mentor, courses.title
FROM users
JOIN usercourse ON users.id = usercourse.id_user
JOIN courses ON usercourse.id_course = courses.id
WHERE courses.title NOT LIKE 'S%';

soal nomer 7 menggunakan query berikut 

SELECT courses.course, courses.mentor, courses.titel, COUNT(userCourse.id_user) AS jumlah_peserta
FROM courses
LEFT JOIN userCourse ON courses.id = userCourse.id_coursed
GROUP BY courses.id, courses.course, courses.mentor, courses.titel
HAVING jumlah_peserta > 0;

soal nomer 8 menggunakan query berikut 
SELECT courses.mentor, 
       COUNT(usercourse.id_user) AS jumlah_peserta, 
       COUNT(usercourse.id_user) * 2000000 AS total_fee
FROM courses
LEFT JOIN usercourse ON courses.id = usercourse.id_course
GROUP BY courses.mentor;


