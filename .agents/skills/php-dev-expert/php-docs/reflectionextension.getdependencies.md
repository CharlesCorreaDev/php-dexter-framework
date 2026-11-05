# Obtém dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.getdependencies.php

---

# ReflectionExtension::getDependencies

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

ReflectionExtension::getDependencies — Obtém dependências

### Descrição

public function **ReflectionExtension::getDependencies**(): [array](language.types.array.md)

Obtém dependências listando as dependências necessárias e conflitantes.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) associativo com dependências como chaves e
um `Required`, `Optional`
ou `Conflicts` como valores.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::getDependencies()****

```
<?php
$dom = new ReflectionExtension('dom');

print_r($dom->getDependencies());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [libxml] => Required
    [domxml] => Conflicts
)
```

### Veja também

- **ReflectionClass::getVersion()**

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
