# Adiciona um usuário a um banco de dados seguro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-add-user.php

---

# ibase\_add\_user

(PHP 5, PHP 7 < 7.4.0)

ibase\_add\_user — Adiciona um usuário a um banco de dados seguro

### Descrição

function **ibase\_add\_user**(  
    [resource](language.types.resource.md) `$service_handle`,  
    [string](language.types.string.md) `$user_name`,  
    [string](language.types.string.md) `$password`,  
    [string](language.types.string.md) `$first_name` = ?,  
    [string](language.types.string.md) `$middle_name` = ?,  
    [string](language.types.string.md) `$last_name` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`service_handle`
:   O manipulador no serviço do servidor de banco de dados.

`user_name`
:   O login do novo usuário do banco de dados.

`password`
:   A senha do novo usuário.

`first_name`
:   O primeiro nome do novo usuário.

`middle_name`
:   O nome do meio do novo usuário.

`last_name`
:   O último nome do novo usuário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ibase\_modify\_user()](function.ibase-modify-user.md) - Modifica um usuário para um banco de dados seguro
- [ibase\_delete\_user()](function.ibase-delete-user.md) - Exclui um usuário de um banco de dados seguro

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
