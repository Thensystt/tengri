## Запуск проекта "news.thetech.kz"

### Описание
Данный проект представляет собой клон новостного портала "Tengrinews" для проекта Factorial Incubator. Этот сайт разработан в рамках тестового задания для оценки навыков.

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

