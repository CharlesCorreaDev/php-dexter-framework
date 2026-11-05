# Verifica se a execução terminou

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.isclosed.php

---

# ReflectionGenerator::isClosed

(PHP 8 >= 8.4.0)

ReflectionGenerator::isClosed — Verifica se a execução terminou

### Descrição

public function **ReflectionGenerator::isClosed**(): [bool](language.types.boolean.md)

Verifica se a execução alcançou o final da função, uma instrução de retorno ou se uma exceção foi lançada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna se o gerador terminou a execução.

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::isClosed()****

```
<?php

function gen()
{
    yield 'a';
    yield 'a';
}

$gen = gen();
$reflectionGen = new ReflectionGenerator($gen);

foreach ($gen as $value) {
    echo $value, PHP_EOL;
    var_dump($reflectionGen->isClosed());
}

var_dump($reflectionGen->isClosed());

?>
```

O exemplo acima produzirá:

```
a
bool(false)
a
bool(false)
bool(true)
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
