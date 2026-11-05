# Cria uma nova instância de classe a partir de determinados argumentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.newinstanceargs.php

---

# ReflectionClass::newInstanceArgs

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

ReflectionClass::newInstanceArgs — Cria uma nova instância de classe a partir de determinados argumentos

### Descrição

public function **ReflectionClass::newInstanceArgs**([array](language.types.array.md) `$args` = []): [?](language.types.null.md)[object](language.types.object.md)

Cria uma nova instância da classe, os argumentos fornecidos são passados para o
construtor de classe.

### Parâmetros

`args`
:   Os parâmetros a serem passados ​​para o construtor da classe como um [array](language.types.array.md).

### Valor Retornado

Retorna uma nova instância da classe ou **`null`** em caso de falha.

### Erros/Exceções

Uma [ReflectionException](class.reflectionexception.md) se o construtor da classe não for público.

Um [ReflectionException](class.reflectionexception.md) se a classe não tiver um construtor
e o parâmetro `args` contém um ou mais parâmetros.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::newInstanceArgs()****

```
<?php
$class = new ReflectionClass('ReflectionFunction');
$instance = $class->newInstanceArgs(array('substr'));
var_dump($instance);
?>
```

O exemplo acima produzirá:

```
object(ReflectionFunction)#2 (1) {
  ["name"]=>
  string(6) "substr"
}
```

### Veja também

- [ReflectionClass::newInstance()](reflectionclass.newinstance.md) - Cria uma nova instância de classe a partir de determinados argumentos
- [ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md) - Cria uma nova instância de classe sem invocar o construtor

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
