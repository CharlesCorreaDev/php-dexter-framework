# Prepara-se para recuperação (Z39,50 presente)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-present.php

---

# yaz\_present

(PHP 4 >= 4.0.5, PECL yaz >= 0.9.0)

yaz\_present — 
Prepara-se para recuperação (Z39,50 presente)

### Descrição

function **yaz\_present**([resource](language.types.resource.md) `$id`): [bool](language.types.boolean.md)

Esta função prepara a recuperação de registros após uma pesquisa bem-sucedida.

A função [yaz\_range()](function.yaz-range.md) deve ser chamada antes desta
função para especificar o intervalo de registros a serem recuperados.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
