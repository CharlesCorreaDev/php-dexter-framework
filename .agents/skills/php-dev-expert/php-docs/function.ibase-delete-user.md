# Exclui um usuário de um banco de dados seguro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-delete-user.php

---

# ibase\_delete\_user

(PHP 5, PHP 7 < 7.4.0)

ibase\_delete\_user — Exclui um usuário de um banco de dados seguro

### Descrição

function **ibase\_delete\_user**([resource](language.types.resource.md) `$service_handle`, [string](language.types.string.md) `$user_name`): [bool](language.types.boolean.md)

### Parâmetros

`service_handle`
:   O manipulador no serviço do servidor do banco de dados.

`user_name`
:   O login do usuário que deseja-se remover do banco de dados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ibase\_add\_user()](function.ibase-add-user.md) - Adiciona um usuário a um banco de dados seguro
- [ibase\_modify\_user()](function.ibase-modify-user.md) - Modifica um usuário para um banco de dados seguro

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
