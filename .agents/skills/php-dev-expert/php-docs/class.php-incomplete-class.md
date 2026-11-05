# A classe __PHP_Incomplete_Class

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.php-incomplete-class.php

---

# A classe \_\_PHP\_Incomplete\_Class

(PHP 4 >=4.0.1, PHP 5, PHP 7, PHP 8)

## Introdução

Criada por [unserialize()](function.unserialize.md)
ao tentar desserializar uma classe indefinida
ou uma classe não listada nas classes permitidas na chave `allowed_classes`
do array do parâmetro `options` da função [unserialize()](function.unserialize.md).

Antes do PHP 7.2.0, usar [is\_object()](function.is-object.md) na classe
**\_\_PHP\_Incomplete\_Class** retornaria **`false`**.
A partir do PHP 7.2.0, será retornado **`true`**.

## Resumo da classe

#[[\AllowDynamicProperties](class.allowdynamicproperties.md)]  
final
class ****\_\_PHP\_Incomplete\_Class****
{

}

Esta classe não tem propriedades ou métodos padrões.
Quando criada por [unserialize()](function.unserialize.md),
além de todas as propriedades e valores desserializados,
o objeto terá uma propriedade `__PHP_Incomplete_Class_Name`
que conterá o nome da classe desserializada.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta classe agora é `final`. |

## Examples

**Exemplo #1 Criada por [unserialize()](function.unserialize.md)**

```
<?php

class MyClass
{
    public string $property = "myValue";
}

$myObject = new MyClass;

$foo = serialize($myObject);

// desserializa todos os objetos em objetos __PHP_Incomplete_Class
$disallowed = unserialize($foo, ["allowed_classes" => false]);

var_dump($disallowed);

// desserializa todos os objetos em objetos __PHP_Incomplete_Class exceto os de MyClass2 e MyClass3
$disallowed2 = unserialize($foo, ["allowed_classes" => ["MyClass2", "MyClass3"]]);

var_dump($disallowed2);

// desserializa uma classe indefinida em objeto __PHP_Incomplete_Class
$undefinedClass = unserialize('O:16:"MyUndefinedClass":0:{}');

var_dump($undefinedClass);
```

O exemplo acima produzirá:

```
object(__PHP_Incomplete_Class)#2 (2) {
  ["__PHP_Incomplete_Class_Name"]=>
  string(7) "MyClass"
  ["property"]=>
  string(7) "myValue"
}
object(__PHP_Incomplete_Class)#3 (2) {
  ["__PHP_Incomplete_Class_Name"]=>
  string(7) "MyClass"
  ["property"]=>
  string(7) "myValue"
}
object(__PHP_Incomplete_Class)#4 (1) {
  ["__PHP_Incomplete_Class_Name"]=>
  string(16) "MyUndefinedClass"
}
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
