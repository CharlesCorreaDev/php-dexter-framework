# Obtém funções de extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getfunctions.php

---

# ReflectionExtension::getFunctions

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::getFunctions — Obtém funções de extensão

### Descrição

public function **ReflectionExtension::getFunctions**(): [array](language.types.array.md)

Obtém funções definidas de uma extensão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array associativo de objetos [ReflectionFunction](class.reflectionfunction.md),
para cada função definida na extensão com as chaves sendo os nomes das
funções. Se nenhuma função estiver definida, um array vazio será retornado.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getFunctions()****

```
<?php
$dom = new ReflectionExtension('SimpleXML');

print_r($dom->getFunctions());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [simplexml_load_file] => ReflectionFunction Object
        (
            [name] => simplexml_load_file
        )

    [simplexml_load_string] => ReflectionFunction Object
        (
            [name] => simplexml_load_string
        )

    [simplexml_import_dom] => ReflectionFunction Object
        (
            [name] => simplexml_import_dom
        )

)
```

### Veja também

- [ReflectionExtension::getClasses()](reflectionextension.getclasses.md) - Obtém classes
- [get\_extension\_funcs()](function.get-extension-funcs.md) - Retorna um array com os nomes das funções de um módulo

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
