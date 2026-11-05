# Libera memória do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-free-result.php

---

# ldap\_free\_result

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_free\_result — Libera memória do resultado

### Descrição

function **ldap\_free\_result**([LDAP\Result](class.ldap-result.md) `$result`): [bool](language.types.boolean.md)

Libera a memória alocada internamente para armazenar o resultado. Toda a memória
do resultado serão liberados automaticamente quando o script termina.

Tipicamente, toda a memória alocada para o reultado LDAP é liberado no
final do script. Caso o script esteja fazendo buscas sucessivas que
retornam grandes conjuntos de resultados, **ldap\_free\_result()** pode ser
chamadas para manter baixo o uso de memória pelo script na execução.

### Parâmetros

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |

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
