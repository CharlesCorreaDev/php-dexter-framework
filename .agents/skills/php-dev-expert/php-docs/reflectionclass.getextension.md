# Obtém um objeto ReflectionExtension para a extensão que definiu a classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getextension.php

---

# ReflectionClass::getExtension

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getExtension — Obtém um objeto [ReflectionExtension](class.reflectionextension.md) para a extensão que definiu a classe

### Descrição

public function **ReflectionClass::getExtension**(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

Obtém um objeto [ReflectionExtension](class.reflectionextension.md) para a extensão que definiu a classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionExtension](class.reflectionextension.md) representando a extensão que definiu a classe,
ou **`null`** para classes definidas pelo usuário.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::getExtension()****

```
<?php
$class = new ReflectionClass('ReflectionClass');
$extension = $class->getExtension();
var_dump($extension);
?>
```

O exemplo acima produzirá:

```
object(ReflectionExtension)#2 (1) {
  ["name"]=>
  string(10) "Reflection"
}
```

### Veja também

- [ReflectionClass::getExtensionName()](reflectionclass.getextensionname.md) - Obtém o nome da extensão que definiu a classe

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
