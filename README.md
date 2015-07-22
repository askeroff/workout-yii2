Workout Logs (Yii2 Project)
============================

About
------------

Веб-приложение "Дневник тренировок", созданное с целью практики изучения Yii2. Для работы понадобится папка /config с нужными файлами под вашу БД. 

Структура БД
------------

Таблица days
------------

  * id (int, primary, auto_increment)
  * date (date)
  * name (varchar)
  * feeling(varchar)
  * time(int)

Таблица exercises  
------------
 * id (int, primary, auto_increment)
 * p_id (int)
 * exercise (varchar)
 * reps (int)
 * sets (int)


