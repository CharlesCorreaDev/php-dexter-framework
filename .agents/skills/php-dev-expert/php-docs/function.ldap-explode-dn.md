# Separa o DN em seus componentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-explode-dn.php

---

# ldap\_explode\_dn

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_explode\_dn — Separa o DN em seus componentes

### Descrição

function **ldap\_explode\_dn**([string](language.types.string.md) `$dn`, [int](language.types.integer.md) `$with_attrib`): [array](language.types.array.md)|[false](language.types.singleton.md)

Separa o DN retornado por [ldap\_get\_dn()](function.ldap-get-dn.md) em suas
partes componentes. Cada parte é conhecida como Nome Distinto
Relativo, ou RDN.

### Parâmetros

`dn`
:   O nome distinto de uma entidade LDAP.

`with_attrib`
:   Usado para requisitar retorno de RDNs somente com valores ou
    também com atributos. Para obter RDNs com os atributos (isto é, no
    formato atributo=valor) defina `with_attrib` para 0
    e para obter somente valores defina para 1.

### Valor Retornado

Retorna um array de todos os componentes do DN, ou **`false`** em caso de falha.
O primeiro elemento no array tem a chave `count` e
representa o número de valores retornados, os elementos seguintes são componentes
do DN indexados numericamente.

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
