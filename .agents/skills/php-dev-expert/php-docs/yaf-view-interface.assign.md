# Atribui valor ao mecanismo de visualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-interface.assign.php

---

# Yaf\_View\_Interface::assign

(Yaf >=1.0.0)

Yaf\_View\_Interface::assign — Atribui valor ao mecanismo de visualização

### Descrição

abstract public function **Yaf\_View\_Interface::assign**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = ?): [bool](language.types.boolean.md)

Atribui valores ao mecanismo de visualização, de forma que o valor possa ser acessado diretamente pelo nome no modelo.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`name`

`value`

### Valor Retornado

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
