# Monta uma solicitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-interface.assemble.php

---

# Yaf\_Route\_Interface::assemble

(Yaf >=2.3.0)

Yaf\_Route\_Interface::assemble — Monta uma solicitação

### Descrição

abstract public function **Yaf\_Route\_Interface::assemble**([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

Este método retorna um URL de acordo com as informações do argumento e anexa
strings de consulta ao URL de acordo com a consulta do argumento.

Uma rota deve implementar este método de acordo com suas próprias regras de rota
e fazer um progresso reverso.

### Parâmetros

`info`

`query`

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
