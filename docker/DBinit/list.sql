
use my_app;
create table to_do_lists(
	list_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	made DATETIME DEFAULT CURRENT_TIMESTAMP,
	name text
);
create table to_dos(
	todo_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	list_id int,
	text text,
	made DATETIME DEFAULT CURRENT_TIMESTAMP,
	lim  DATETIME DEFAULT CURRENT_TIMESTAMP,
	comp boolean default false
);
insert into to_do_lists(name) values("チュートリアル");
insert into to_do_lists(name) values("日付テスト");
insert into to_dos(list_id,text) values(1,"新しいToDoを追加してみましょう。1");
insert into to_dos(list_id,text) values(1,"新しいToDoを追加してみましょう。2");
insert into to_dos(list_id,text) values(1,"新しいToDoを追加してみましょう。3");
insert into to_dos(list_id,text) values(1,"新しいToDoを追加してみましょう。4");
insert into to_dos(list_id,text,made) values(2,"日付テスト1","2017-06-23");
insert into to_dos(list_id,text,made) values(2,"日付テスト2","2017-06-14");
insert into to_dos(list_id,text,made) values(2,"日付テスト3","2017-06-20");
insert into to_dos(list_id,text,made) values(2,"日付テスト4","2017-06-01");
insert into to_dos(list_id,text,made) values(2,"日付テスト5","2017-06-19");

