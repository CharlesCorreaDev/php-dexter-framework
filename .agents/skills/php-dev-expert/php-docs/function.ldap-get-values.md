# Obtém todos os valores de uma entrada de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-get-values.php

---

# ldap\_get\_values

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_get\_values — Obtém todos os valores de uma entrada de resultado

### Descrição

function **ldap\_get\_values**([LDAP\Connection](class.ldap-connection.md) `$ldap`, LDAP\ResultEntry `$entry`, [string](language.types.string.md) `$attribute`): [array](language.types.array.md)|[false](language.types.singleton.md)

Lê todos os valores do atributo na entrada do resultado.

Esta função usa uma entrada informada no parâmetro `entry`,
portanto precisa ser precedidade por uma das funções de pesquisa LDAP e uma
das funções de obtenção de uma entrada individual.

A aplicação poderá ser codificada especificamente para pesquisar por certos
atributos (como "surname" ou "mail") ou pode-se usar a função
[ldap\_get\_attributes()](function.ldap-get-attributes.md) para descobrir
quais atributos existem para uma entrada informada.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`entry`
:   Uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md).

`attribute`

### Valor Retornado

Retorna um array de valores para o atributo em caso de sucesso ou **`false`** em
caso de erro. O número de valores pode ser encontrado indexando-se "count" no
array resultante. Valores individuais são acessados por índice inteiro no
array. O primeiro índice é 0.

LDAP permite mais de um valor por atributo, por isso pode, por exemplo,
armazenar um número de endereços de e-mail para uma entrada de diretório de uma pessoa, todos
etiquetados com o atributo "mail".

```
    return_value["count"] = número de valores para o atributo
    return_value[0] = primeiro valor do atributo
    return_value[i] = (i+1)-ésimo valor do atributo
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `entry` agora espera uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) `ldap result entry` válido era esperado. |

### Examples

**Exemplo #1 Lista todos os valores do atributo "mail" para uma entrada de diretório**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório

// $sr é um resultado de pesquisa válido de uma chamada anterior a
// uma das funções de pesquisa de diretório LDAP

// $entry é um identificador válido de uma entrada de uma chamada anterior a
// uma das funções que retornam uma entrada de diretório

$values = ldap_get_values($ds, $entry, "mail");

echo $values["count"] . " endereços de e-mail para esta entrada.<br />";

for ($i=0; $i < $values["count"]; $i++) {
    echo $values[$i] . "<br />";
}
?>
```

### Veja também

- [ldap\_get\_values\_len()](function.ldap-get-values-len.md) - Obtém todos os valores binários de uma entrada de resultado

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
