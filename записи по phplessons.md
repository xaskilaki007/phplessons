в lessons9 были изучены типы данных и всякой такое

в lesson 12 были изучены начальные сттили css и переопределение переменных через объекты и через что-то такое:
```php 
$first = new Point;
        $first->x=3;
        $first->y=3;
        echo " <div> Проверка first до переопределения: </div>","x: {$first->x}, y: {$first->y}";
        $second = $first;
        echo "  <div>Проверка first после переопределения: </div>","x: {$first->x}, y: {$first->y}";
        $second->x=5;
        $second->y=5;
```
