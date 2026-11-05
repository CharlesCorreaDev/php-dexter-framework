# Obtém entradas de extensão ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getinientries.php

---

# ReflectionExtension::getINIEntries

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::getINIEntries — Obtém entradas de extensão ini

### Descrição

public function **ReflectionExtension::getINIEntries**(): [array](language.types.array.md)

Obtém as entradas ini para uma extensão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) associativo com as entradas ini como chaves,
com seus valores definidos como valores.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getINIEntries()****

```
<?php
$ext = new ReflectionExtension('mysql');

print_r($ext->getINIEntries());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [mysql.allow_persistent] => 1
    [mysql.max_persistent] => -1
    [mysql.max_links] => -1
    [mysql.default_host] =>
    [mysql.default_user] =>
    [mysql.default_password] =>
    [mysql.default_port] =>
    [mysql.default_socket] =>
    [mysql.connect_timeout] => 60
    [mysql.trace_mode] =>
    [mysql.allow_local_infile] => 1
    [mysql.cache_size] => 2000
)
```

### Veja também

- [ini\_get\_all()](function.ini-get-all.md) - Obtém todas as opções de configuração
- [ReflectionExtension::getConstants()](reflectionextension.getconstants.md) - Obtém constantes

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
