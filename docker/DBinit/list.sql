
use my_app;
create table to_do_lists(list_id integer primary key,
                         name text);
create table to_do(todo_id int primary key ,
                  list_id int,
                  text text,
                  lim date);
insert into to_do_lists values(1,"チュートリアル");
insert into to_do values(1,1,"新しいToDoを追加してみましょう。",DATE(NOW()));
