# mrreads.github.io

> Версия без чата находятся в ветке **rewritten_database**.
<<<<<<< refs/remotes/origin/master

<<<<<<< refs/remotes/origin/master
<<<<<<< refs/remotes/origin/master
<<<<<<< refs/remotes/origin/master
Сделал всё что мог, используя "оригинальную" базу *(с небольшими правками)*.

Для новостей создал отдельную таблицу **[news]**.

Создал связи для таблицы **[classrooms]**, так как она просто висела в воздухе.

Для того, чтобы добавить авторизацию пользователей, сначала я просто добавил в таблицу **[students]** поле с паролем и сверял его с почтой, таким образом производилась авторизация.

Но нужно было решить проблему с авторизаций для других ролей.

Я создал таблицу **[users]** и попытался связать её с **[students]** и **[roels]**. Если создавать по аккаунту на каждую роль, то это даже вроде работало. Но потом там ошибки полезли и я забил на дело.

Из связанного с базой данных **НЕ** удалось реализовать:
* Модуль МЕТОДИЧКА
* Разные аккаунты

Модуль с методичкой не удалось реализовать, так как в таблицах отсуствовали уникальные индификаторы.

А разные аккаунты так как мне лень думать и я создал базу с по новой, где уже разделение аккаунтов работает.


> Далее я создал отдельную ветку **rewritten_database**, где все коммиты делал уже там.
=======
Тут я уже использовал свою базу данных.

Существующие аккаунты для авторизации:
- student1@mail.ru:123
- student2@mail.ru:123
- teacher1@mail.ru:123
- teacher2@mail.ru:123
- admin1@mail.ru:123
- admin2@mail.ru:123

В планах на реализацию:
- паггинация
- продвинутый поиск

Так же немного поправил вёртку, соотвесвенно данные правки отсуствуют в ветке **backup**.
Теперь всё выглядит более аккуратно и законченно.
>>>>>>> Create README.md
=======
Чат реализовал в виде <iframe>, так как при использовании **include** обновляется вся страница.
Пока что чат отображается на **странице пользователя** и **только у студента**.
>>>>>>> rewrite /w <iframe>, php SEND login, update DB
=======
Чат реализовал в виде **iframe**, так как при использовании **include** обновляется вся страница.
Пока что чат отображается на **странице пользователя** и **только у студента**.
>>>>>>> update readme.md
=======
>>>>>>> Update README.md
