# Define o formato de saída do OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-set-oid-output-format.php

---

# snmp\_set\_oid\_output\_format

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

snmp\_set\_oid\_output\_format — 
Define o formato de saída do OID

### Descrição

function **snmp\_set\_oid\_output\_format**([int](language.types.integer.md) `$format`): [true](language.types.singleton.md)

**snmp\_set\_oid\_output\_format()** define o formato de saída
como completo ou numérico.

### Parâmetros

`format`
:   **Representação do OID .1.3.6.1.2.1.1.3.0 para vários valores de `format`**

    |  |  |
    | --- | --- |
    | **`SNMP_OID_OUTPUT_FULL`** | .iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_NUMERIC`** | .1.3.6.1.2.1.1.3.0 |
    | **`SNMP_OID_OUTPUT_MODULE`** | DISMAN-EVENT-MIB::sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_SUFFIX`** | sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_UCD`** | system.sysUpTime.sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_NONE`** | Undefined |

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Usando [snmprealwalk()](function.snmprealwalk.md)**

```
<?php

 snmp_read_mib("/usr/share/mibs/netsnmp/NET-SNMP-TC");

 // padrão ou SNMP_OID_OUTPUT_MODULE
 print_r( snmprealwalk('localhost', 'public', 'RFC1213-MIB::sysObjectID') );

 snmp_set_oid_output_format(SNMP_OID_OUTPUT_NUMERIC);
 print_r( snmprealwalk('localhost', 'public', 'RFC1213-MIB::sysObjectID') );

 snmp_set_oid_output_format(SNMP_OID_OUTPUT_FULL);
 print_r( snmprealwalk('localhost', 'public', 'RFC1213-MIB::sysObjectID') );
?>
```

O exemplo acima resultaria em:

```
Array
 (
    [RFC1213-MIB::sysObjectID.0] => OID: NET-SNMP-TC::linux
 )
 Array
 (
    [.1.3.6.1.2.1.1.2.0] => OID: .1.3.6.1.4.1.8072.3.2.10
 )
 Array
 (
    [.iso.org.dod.internet.mgmt.mib-2.system.sysObjectID.0] => OID: .iso.org.dod.internet.private.enterprises.netSnmp.netSnmpEnumerations.netSnmpAgentOIDs.linux
 )
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
