# Descarrega informação de debug no log

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.dump-debug-info.php

---

# mysqli::dump\_debug\_info

# mysqli\_dump\_debug\_info

(PHP 5, PHP 7, PHP 8)

mysqli::dump\_debug\_info -- mysqli\_dump\_debug\_info — Descarrega informação de debug no log

### Descrição

Estilo orientado a objetos

public function **mysqli::dump\_debug\_info**(): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_dump\_debug\_info**([mysqli](class.mysqli.md) `$mysql`): [bool](language.types.boolean.md)

Esta função é projetada para ser executada por um usuário com super
privilégio e é usada para descarregar informações de depuração no log, para o
servidor MySQL, relacionadas à conexão.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mysqli\_debug()](mysqli.debug.md) - Realiza operações de depuração

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
