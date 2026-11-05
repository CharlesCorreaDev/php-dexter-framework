# Retorna valor de opção para conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-get-option.php

---

# yaz\_get\_option

(PECL yaz >= 0.9.0)

yaz\_get\_option — Retorna valor de opção para conexão

### Descrição

function **yaz\_get\_option**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$name`): [string](language.types.string.md)

Retorna o valor da opção especificada por `name`.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`name`
:   O nome da opção.

### Valor Retornado

Retorna o valor da opção especificada ou uma string vazia se a opção
não foi definida.

### Veja também

- Descrição de [yaz\_set\_option()](function.yaz-set-option.md) - Define uma ou mais opções de conexão para opções
  disponíveis

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
