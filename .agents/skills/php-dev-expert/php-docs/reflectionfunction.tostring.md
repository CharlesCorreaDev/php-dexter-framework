# Retorna a representação em string do objeto ReflectionFunction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.tostring.php

---

# ReflectionFunction::\_\_toString

(PHP 5, PHP 7, PHP 8)

ReflectionFunction::\_\_toString — Retorna a representação em string do objeto ReflectionFunction

### Descrição

public function **ReflectionFunction::\_\_toString**(): [string](language.types.string.md)

Obtém uma descrição legível da função, seus parâmetros e valores de retorno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A string.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunction::\_\_toString()****

```
<?php
function title($title, $name)
{
    return sprintf("%s. %s\r\n", $title, $name);
}

echo new ReflectionFunction('title');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Function [ <user> function title ] {
  @@ Command line code 1 - 1

  - Parameters [2] {
    Parameter #0 [ <required> $title ]
    Parameter #1 [ <required> $name ]
  }
}
```

### Veja também

- [ReflectionFunction::export()](reflectionfunction.export.md) - Função de exportação
- [\_\_toString()](language.oop5.magic.md#object.tostring)

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
