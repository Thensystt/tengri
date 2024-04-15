## Запуск проекта "news.thetech.kz" доступен по ссылке
### Описание
Данный проект представляет собой клон новостного портала "Tengrinews" для проекта Factorial Incubator. Этот сайт разработан в рамках тестового задания для оценки навыков.
Для быстрой и эффективной разработки данного проекта было решено использовать WordPress. Этот выбор обоснован его широким функциональным спектром, гибкостью и простотой в настройке.
Для теста была запонена одна запись про Бишембаева
### Функционал 
## Level 1:
- Реализована основная функция списка новостей для отображения новостных статей на фронтенде с данными, полученными с бэкенда.
- Добавлена возможность пользователям кликать по статье для просмотра её детальной информации.
## Level 2:
- Добавлена пагинация для управления отображением новостных статей, обеспечивающая удобную навигацию по страницам.
- Реализована возможность фильтровать новости по категориям, позволяя пользователям выбирать интересующую категорию.
- Добавлена функциональность поиска, позволяющая пользователям находить новости по ключевым словам.
- Реализована функция сортировки новостных статей по дате публикации, гарантирующая отображение последних новостей вверху списка.
## Bonus level:
- Приложение развернуто на hoster.kz, обеспечивая его публичный доступ для пользователей.
- https://news.thetech.kz

### Требования
Для запуска проекта потребуется следующее:
- Виртуальный хостинг с поддержкой PHP и MySQL.
- Доступ к файлам проекта из репозитория на GitHub.

### Установка
1. Клонируйте репозиторий на локальную машину:

   ```bash
   git clone https://github.com/yourusername/news.thetech.kz.git
   ```

2. Загрузите файлы проекта на виртуальный хостинг.

3. Создайте базу данных MySQL на вашем хостинге.

4. Импортируйте базу данных из файла `database.sql`, который находится в корне проекта, в созданную базу данных.

### Настройка
1. Отредактируйте файл `config.php` в директории `includes` согласно настройкам вашего сервера и базы данных:

   ```php
   define('DB_HOST', 'your_database_host');
   define('DB_USER', 'your_database_username');
   define('DB_PASS', 'your_database_password');
   define('DB_NAME', 'your_database_name');
   ```

2. Укажите корректный путь к вашему сайту в файле `config.php`:

   ```php
   define('BASE_PATH', 'http://news.thetech.kz/');
   ```
## Помните, что это общая инструкция, и вам может потребоваться вносить изменения в зависимости от особенностей вашего хостинга и проекта.
