# Busca subárvore de objetos SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.walk.php

---

# SNMP::walk

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::walk — Busca subárvore de objetos SNMP

### Descrição

public function **SNMP::walk**(  
    [array](language.types.array.md)|[string](language.types.string.md) `$objectId`,  
    [bool](language.types.boolean.md) `$suffixAsKey` = **`false`**,  
    [int](language.types.integer.md) `$maxRepetitions` = -1,  
    [int](language.types.integer.md) `$nonRepeaters` = -1  
): [array](language.types.array.md)|[false](language.types.singleton.md)

**SNMP::walk()** é usado para ler a subárvore SNMP com raiz no `objectId` especificado.

### Parâmetros

`objectId`
:   Raiz da subárvore a ser buscada

`suffixAsKey`
:   Por padrão, a notação OID completa é usada para chaves no array de saída.
    Se definido como **`true`**, o prefixo da subárvore será removido das chaves, deixando apenas o sufixo do object\_id.

`nonRepeaters`
:   Especifica o número de variáveis ​​fornecidas que não devem ser iteradas.
    O padrão é usar este valor a partir do objeto SNMP.

`maxRepetitions`
:   Especifica o número máximo de iterações sobre as variáveis ​​repetidas.
    O padrão é usar este valor a partir do objeto SNMP.

### Valor Retornado

Retorna um array associativo dos IDs de objetos SNMP e seus valores em caso de sucesso ou **`false`** em caso de erro.
Quando ocorre um erro SNMP, [SNMP::getErrno()](snmp.geterrno.md) e
[SNMP::getError()](snmp.geterror.md) podem ser usados ​​para recuperar o número do erro
(específico para a extensão SNMP, consulte as constantes de classe) e a mensagem de erro
respectivamente.

### Erros/Exceções

Esse método não lança nenhuma exceção por padrão.
Para habilitar o lançamento de exceções SNMPException quando ocorrer algum dos erros da biblioteca,
o parâmetro `exceptions_enabled` da classe SNMP
deve ser definido com um valor correspondente. Consulte a [explicação sobre `SNMP::$exceptions_enabled`](class.snmp.md#snmp.props.exceptions-enabled) para mais detalhes.

### Examples

**Exemplo #1 Exemplo de **SNMP::walk()****

```
<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $fulltree = $session->walk(".");
  print_r($fulltree);
  $session->close();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [SNMPv2-MIB::sysDescr.0] => STRING: Test server
    [SNMPv2-MIB::sysObjectID.0] => OID: NET-SNMP-MIB::netSnmpAgentOIDs.8
    [DISMAN-EVENT-MIB::sysUpTimeInstance] => Timeticks: (1150681750) 133 days, 4:20:17.50
    [SNMPv2-MIB::sysContact.0] => STRING: Nobody
    [SNMPv2-MIB::sysName.0] => STRING: server.localdomain
    ...
)
```

**Exemplo #2 Exemplo de `suffixAsKey`**

`suffixAsKey` pode ser usado ao mesclar várias subárvores SNMP em uma.
Este exemplo mapeia nomes de interface para seus tipos.

```
<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $session->valueretrieval = SNMP_VALUE_PLAIN;
  $ifDescr = $session->walk(".1.3.6.1.2.1.2.2.1.2", TRUE);
  $session->valueretrieval = SNMP_VALUE_LIBRARY;
  $ifType = $session->walk(".1.3.6.1.2.1.2.2.1.3", TRUE);
  print_r($ifDescr);
  print_r($ifType);
  $result = array();
  foreach($ifDescr as $i => $n) {
    $result[$n] = $ifType[$i];
  }
  print_r($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [1] => igb0
    [2] => igb1
    [3] => ipfw0
    [4] => lo0
    [5] => lagg0
)
Array
(
    [1] => INTEGER: ieee8023adLag(161)
    [2] => INTEGER: ieee8023adLag(161)
    [3] => INTEGER: ethernetCsmacd(6)
    [4] => INTEGER: softwareLoopback(24)
    [5] => INTEGER: ethernetCsmacd(6)
)
Array
(
    [igb0] => INTEGER: ieee8023adLag(161)
    [igb1] => INTEGER: ieee8023adLag(161)
    [ipfw0] => INTEGER: ethernetCsmacd(6)
    [lo0] => INTEGER: softwareLoopback(24)
    [lagg0] => INTEGER: ethernetCsmacd(6)
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
