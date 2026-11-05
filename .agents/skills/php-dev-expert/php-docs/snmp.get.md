# Busca um objeto SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.get.php

---

# SNMP::get

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::get — Busca um objeto SNMP

### Descrição

public function **SNMP::get**([array](language.types.array.md)|[string](language.types.string.md) `$objectId`, [bool](language.types.boolean.md) `$preserveKeys` = **`false`**): [mixed](language.types.mixed.md)

Busca um objeto SNMP especificado em
`objectId` usando uma consulta GET.

### Parâmetros

Se `objectId` for uma string, então **SNMP::get()**
retornará o objeto SNMP como string. Se
`objectId` for um array, todos os objetos SNMP
solicitados serão retornados como um array associativo dos IDs dos objetos SNMP e seus
valores.

`objectId`
:   O objeto SNMP (OID) ou objetos

`preserveKeys`
:   Quando `objectId` é um array e
    `preserveKeys` definido como **`true`** as chaves nos resultados
    serão obtidas exatamente como em `objectId`,
    caso contrário, a propriedade SNMP::oid\_output\_format é usada para determinar
    o formato das chaves.

### Valor Retornado

Retorna objetos SNMP solicitados como string ou array
dependendo do tipo `objectId` ou **`false`** em caso de erro.

### Erros/Exceções

Esse método não lança nenhuma exceção por padrão.
Para habilitar o lançamento de exceções SNMPException quando ocorrer algum dos erros da biblioteca,
o parâmetro `exceptions_enabled` da classe SNMP
deve ser definido com um valor correspondente. Consulte a [explicação sobre `SNMP::$exceptions_enabled`](class.snmp.md#snmp.props.exceptions-enabled) para mais detalhes.

### Examples

**Exemplo #1 Objeto SNMP único**

Um único objeto SNMP pode ser solicitado de duas maneiras: como
string (valor de retorno da string resultante) ou como um array de elemento único (com
array associativo como saída).

```
<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $sysdescr = $session->get("sysDescr.0");
  echo "$sysdescr\n";
  $sysdescr = $session->get(array("sysDescr.0"));
  print_r($sysdescr);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
STRING: Test server
Array
(
    [SNMPv2-MIB::sysDescr.0] => STRING: Test server
)
```

**Exemplo #2 Vários objetos SNMP**

```
$session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $results = $session->get(array("sysDescr.0", "sysName.0"));
  print_r($results);
  $session->close();
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [SNMPv2-MIB::sysDescr.0] => STRING: Test server
    [SNMPv2-MIB::sysName.0] => STRING: myhost.nodomain
)
```

### Veja também

- [SNMP::getErrno()](snmp.geterrno.md) - Obtém o último código de erro
- [SNMP::getError()](snmp.geterror.md) - Obtém a última mensagem de erro

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
