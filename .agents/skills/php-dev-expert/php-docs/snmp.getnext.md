# Busca um objeto SNMP que
   segue o ID do objeto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.getnext.php

---

# SNMP::getnext

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::getnext — Busca um objeto SNMP que
segue o ID do objeto fornecido

### Descrição

public function **SNMP::getnext**([array](language.types.array.md)|[string](language.types.string.md) `$objectId`): [mixed](language.types.mixed.md)

Busca um objeto SNMP que segue o `objectId` especificado.

### Parâmetros

Se `objectId` for uma string, então **SNMP::getnext()**
retornará o objeto SNMP como string. Se
`objectId` for um array, todos os objetos SNMP
solicitados serão retornados como um array associativo dos IDs dos objetos SNMP e seus
valores.

`objectId`
:   O objeto SNMP (OID) ou objetos

### Valor Retornado

Retorna objetos SNMP solicitados como string ou array
dependendo do tipo `objectId` ou **`false`** em caso de erro.

### Erros/Exceções

Esse método não lança nenhuma exceção por padrão.
Para habilitar o lançamento de exceções SNMPException quando ocorrer algum dos erros da biblioteca,
o parâmetro `exceptions_enabled` da classe SNMP
deve ser definido com um valor correspondente. Consulte a [explicação sobre `SNMP::$exceptions_enabled`](class.snmp.md#snmp.props.exceptions-enabled) para mais detalhes.

### Examples

**Exemplo #1 Single SNMP object**

Um único objeto SNMP pode ser solicitado de duas maneiras: como
string (valor de retorno da string resultante) ou como um array de elemento único (com
array associativo como saída).

```
<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $nsysdescr = $session->getnext("sysDescr.0");
  echo "$nsysdescr\n";
  $nsysdescr = $session->getnext(array("sysDescr.0"));
  print_r($nsysdescr);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
OID: NET-SNMP-MIB::netSnmpAgentOIDs.8
Array
(
    [SNMPv2-MIB::sysObjectID.0] => OID: NET-SNMP-MIB::netSnmpAgentOIDs.8
)
```

**Exemplo #2 Múltiplos objetos SNMP**

```
<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $results = $session->getnext(array("sysDescr.0", "sysName.0"));
  print_r($results);
  $session->close();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [SNMPv2-MIB::sysObjectID.0] => OID: NET-SNMP-MIB::netSnmpAgentOIDs.8
    [SNMPv2-MIB::sysLocation.0] => STRING: Nowhere
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
