<h2> Заметки о PHP (переменные)</h2>
<h6> 26.12.2021</h6>
<p>Типы переменных</p>
<p>
    <pre>Числа integer</pre>
    <pre>Строки string</pre>
    <pre>Дробные числа floats</pre>
    <pre>Ложь/Истина boolean</pre>
    <pre>Массивы array</pre>
</p>
<p>Пример структуры массивов.</p>
    <p>Конкретно в этом массиве у нас идет один общий массив под названием 
    </pre>things</pre>, 
    внутри которого находятся массивы 
    <pre>car и fruits</pre> 
    внутри которых существуют элементы с индексами [0,1,2]. 
    <br>
    Отображать информацию о переменных можно двумя командами: var_dump и echo var_export. 
    Перенос строки осуществляется с помощью "\n".
</p>
<p>
<pre>array(2) {
  [0]=>
  array(3) {
    [0]=>
    string(4) "Lada"
    [1]=>
    string(6) "toyota"
    [2]=>
    string(6) "vender"
  }
  [1]=>
  array(2) {
    [0]=>
    string(5) "apple"
    [1]=>
    string(6) "orange"
  }
}
</pre>
</p>
<hr>