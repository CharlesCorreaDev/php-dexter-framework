# Obtém o nome do arquivo no qual a classe foi definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getfilename.php

---

# ReflectionClass::getFileName

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getFileName — Obtém o nome do arquivo no qual a classe foi definida

### Descrição

public function **ReflectionClass::getFileName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome do arquivo no qual a classe foi definida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo no qual a classe foi definida.
Se a classe estiver definida no núcleo do PHP ou em uma extensão do PHP, **`false`**
é retornado.

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
