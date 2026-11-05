# Converte um número de erro LDAP em uma mensagem de erro string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-err2str.php

---

# ldap\_err2str

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_err2str — Converte um número de erro LDAP em uma mensagem de erro string

### Descrição

function **ldap\_err2str**([int](language.types.integer.md) `$errno`): [string](language.types.string.md)

Retorna a mensagem de erro como uma string explicando o número de erro informado
em `errno`. Os número de erro LDAP são padronizados,
porém bibliotecas diferentes retornam mensagens de texto diferentes ou até mesmo
configuradas para localidades diferentes. Nunca verifique por uma mensagem de texto específica,
use sempre verificação do número do erro.

### Parâmetros

`errno`
:   O número do erro.

### Valor Retornado

Retorna a mensagem de erro, como uma string.

### Examples

**Exemplo #1 Enumera todas as mensagens de erro LDAP**

```
<?php
  for ($i=0; $i<100; $i++) {
    printf("Erro $i: %s<br />\n", ldap_err2str($i));
  }
?>
```

### Veja também

- [ldap\_errno()](function.ldap-errno.md) - Retorna o número de erro LDAP do último comando
- [ldap\_error()](function.ldap-error.md) - Retorna a mensagem de erro do último comando LDAP

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
