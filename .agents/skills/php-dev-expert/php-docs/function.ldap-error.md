# Retorna a mensagem de erro do último comando LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-error.php

---

# ldap\_error

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_error — Retorna a mensagem de erro do último comando LDAP

### Descrição

function **ldap\_error**([LDAP\Connection](class.ldap-connection.md) `$ldap`): [string](language.types.string.md)

Retorna a mensagem de erro em uma string explicando o erro gerado pelo
último comando LDAP para o `ldap` informado.
Enquanto que os números de erro do LDAP são padronizados,
bibliotecas diferentes retornam mensagens de texto diferentes. Nunca verifique
por uma mensagem de texto específica, use sempre verificação do número do erro.

A menos que o nível de alertas seja reduzido suficientemente no php.ini ou
que os comandos LDAP sejam prefixados com caracteres `@` para
suprimir alertas na saída, os erros gerados sempre irão aparecer na
saída HTML.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

### Valor Retornado

Retorna a mensagem de erro como uma string.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Veja também

- [ldap\_err2str()](function.ldap-err2str.md) - Converte um número de erro LDAP em uma mensagem de erro string
- [ldap\_errno()](function.ldap-errno.md) - Retorna o número de erro LDAP do último comando

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
