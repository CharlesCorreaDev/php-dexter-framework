# Obtém o nome do arquivo de definição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.getfilename.php

---

# ReflectionConstant::getFileName

(PHP 8 >= 8.5.0)

ReflectionConstant::getFileName — Obtém o nome do arquivo de definição

### Descrição

public function **ReflectionConstant::getFileName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome do arquivo no qual a constante foi definida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo no qual a constante foi definida.
Se a constante for definida no núcleo do PHP ou em uma extensão PHP,
**`false`** será retornado.

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
