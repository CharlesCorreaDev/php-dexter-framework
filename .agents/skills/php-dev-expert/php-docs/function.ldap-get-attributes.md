# Obtém atributos de uma entrada de resultado de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-get-attributes.php

---

# ldap\_get\_attributes

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_get\_attributes — Obtém atributos de uma entrada de resultado de pesquisa

### Descrição

function **ldap\_get\_attributes**([LDAP\Connection](class.ldap-connection.md) `$ldap`, LDAP\ResultEntry `$entry`): [array](language.types.array.md)

Lê atributos e valores de uma entrada no resultado da pesquisa.

Ao localizar uma entrada específica no diretório, pode-se consultar que
informação está armazenana nessa entrada usando-se esta chamada. Pode-se usar
esta função para uma aplicação que navega por entradas de diretório e/ou onde
não se conhece a estrutura das entradas do diretório. Em muitas aplicações,
é comum procurar um atributo específico como um e-mail ou um
sobrenome, desconsiderando outros dados da entrada.

```
return_value["count"] = número da atributos na entrada
return_value[0] = primeiro atributo
return_value[n] = (n+1)-ésimo atributo

return_value["attribute"]["count"] = número de valores para o atributo
return_value["attribute"][0] = primeiro valor do atributo
return_value["attribute"][i] = (i+1)-ésimo valor do atributo
```

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`entry`
:   Uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md).

### Valor Retornado

Retorna informação completa da entrada em um array multi-dimensional.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `entry` agora espera uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) `ldap result entry` válido era esperado. |

### Examples

**Exemplo #1
Mostra a lista de atributos armazenados em uma entrada particular do diretório**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório

// $sr é um resultado de pesquisa válido de uma chamada anterior a
// uma das funções de pesquisa de diretório LDAP

$entry = ldap_first_entry($ds, $sr);

$attrs = ldap_get_attributes($ds, $entry);

echo $attrs["count"] . " atributos mantidos para esta entrada:<p>";

for ($i=0; $i < $attrs["count"]; $i++) {
    echo $attrs[$i] . "<br />";
}
?>
```

### Veja também

- [ldap\_first\_attribute()](function.ldap-first-attribute.md) - Retorna o primeiro atributo
- [ldap\_next\_attribute()](function.ldap-next-attribute.md) - Obtém o próximo atributo no resultado

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
