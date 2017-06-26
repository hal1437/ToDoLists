
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
insert into to_do_lists(name) values("レポート");
insert into to_dos(list_id,text) values(1,"新しいリストを追加してみましょう。");
insert into to_dos(list_id,text) values(1,"新しいToDoを追加してみましょう。");
insert into to_dos(list_id,text) values(1,"ToDoを完了してみましょう。");
insert into to_dos(list_id,text) values(1,"ToDoを削除してみましょう。");
insert into to_dos(list_id,text,made,lim) values(2,"国語のレポート","2017-06-05","2017-07-02");
insert into to_dos(list_id,text,made,lim) values(2,"数学のレポート","2017-06-03","2017-07-01");
insert into to_dos(list_id,text,made,lim) values(2,"英語のレポート","2017-06-04","2017-07-05");
insert into to_dos(list_id,text,made,lim) values(2,"物理のレポート","2017-06-01","2017-07-03");
insert into to_dos(list_id,text,made,lim) values(2,"生物のレポート","2017-06-02","2017-07-04");

