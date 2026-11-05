# Define o tipo xmlrpc, base64 ou datetime, para um valor string PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xmlrpc-set-type.php

---

# xmlrpc\_set\_type

(PHP 4 >= 4.1.0, PHP 5, PHP 7)

xmlrpc\_set\_type — Define o tipo xmlrpc, base64 ou datetime, para um valor string PHP

### Descrição

function **xmlrpc\_set\_type**([string](language.types.string.md) `&$value`, [string](language.types.string.md) `$type`): [bool](language.types.boolean.md)

Define o tipo xmlrpc, base64 ou datetime, para um valor string PHP.

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`value`
:   Valor para definir o tipo.

`type`
:   'base64' ou 'datetime'

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Em caso de sucesso, `value` é convertido para um objeto.

### Erros/Exceções

Emite um E\_WARNING caso o tipo não seja suportado pelo XMLRPC.

### Examples

**Exemplo #1 Um exemplo de **xmlrpc\_set\_type()****

```
<?php

$params = date("Ymd\TH:i:s", time());
xmlrpc_set_type($params, 'datetime');
echo xmlrpc_encode($params);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
<?xml version="1.0" encoding="utf-8"?>
<params>
<param>
 <value>
  <dateTime.iso8601>20090322T23:43:03</dateTime.iso8601>
 </value>
</param>
</params>
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
