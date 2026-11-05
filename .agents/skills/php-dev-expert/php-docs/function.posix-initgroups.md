# Calcula a lista de acesso do grupo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-initgroups.php

---

# posix\_initgroups

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

posix\_initgroups — Calcula a lista de acesso do grupo

### Descrição

function **posix\_initgroups**([string](language.types.string.md) `$username`, [int](language.types.integer.md) `$group_id`): [bool](language.types.boolean.md)

Calcula a lista de acesso do grupo para o usuário especificado por nome.

### Parâmetros

`username`
:   O usuário para o qual a lista será calculada.

`group_id`
:   Normalmente, o número do grupo do arquivo de senhas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- A página initgroups(3) do manual do Unix

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
