
use my_app;
create table to_do_lists(list_id integer primary key,
                         name text);
create table to_dos(todo_id int primary key ,
                  list_id int,
                  text text,
                  lim date,
                  comp boolean);
insert into to_do_lists values(1,"チュートリアル1");
insert into to_do_lists values(2,"チュートリアル2");
insert into to_dos values(1,1,"新しいToDoを追加してみましょう。1",DATE(NOW()),false);
insert into to_dos values(2,1,"新しいToDoを追加してみましょう。2",DATE(NOW()),true);
insert into to_dos values(3,2,"新しいToDoを追加してみましょう。3",DATE(NOW()),false);
insert into to_dos values(4,2,"新しいToDoを追加してみましょう。4",DATE(NOW()),true);