# Lê uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline.php

---

# readline

(PHP 4, PHP 5, PHP 7, PHP 8)

readline — Lê uma linha

### Descrição

function **readline**([?](language.types.null.md)[string](language.types.string.md) `$prompt` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Lê uma única linha do usuário. Esta linha precisa ser adicionada manualmente
ao histórico usando [readline\_add\_history()](function.readline-add-history.md).

### Parâmetros

`prompt`
:   Pode-se especificar uma string que será o prompt para o usuário.

### Valor Retornado

Retorna uma string do usuário. A linha retornada tem o caractere de
nova linha removido do final.
Se não houver mais dados para ler, então **`false`** é retornado.

### Examples

**Exemplo #1 **readline()****

```
<?php
// Obtém três comandos do usuário
for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}

// Mostra o histórico
print_r(readline_list_history());

// Mostra as variáveis
print_r(readline_info());
?>
```

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
