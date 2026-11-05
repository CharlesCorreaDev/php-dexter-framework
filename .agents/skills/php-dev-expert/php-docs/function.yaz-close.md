# Fecha a conexão YAZ

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-close.php

---

# yaz\_close

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_close — Fecha a conexão YAZ

### Descrição

function **yaz\_close**([resource](language.types.resource.md) `$id`): [bool](language.types.boolean.md)

Fecha a conexão fornecida pelo parâmetro `id`.

> **Nota**:
>
> Esta função fechará apenas uma conexão não persistente aberta ao
> definir a opção `persistent` como **`false`** com
> [yaz\_connect()](function.yaz-connect.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [yaz\_connect()](function.yaz-connect.md) - Prepara para uma conexão com um servidor Z39.50

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
