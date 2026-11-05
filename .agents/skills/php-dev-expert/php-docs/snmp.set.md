# Define o valor de um objeto SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.set.php

---

# SNMP::set

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::set — Define o valor de um objeto SNMP

### Descrição

public function **SNMP::set**([array](language.types.array.md)|[string](language.types.string.md) `$objectId`, [array](language.types.array.md)|[string](language.types.string.md) `$type`, [array](language.types.array.md)|[string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Solicita ao agente SNMP remoto que defina o valor de
um ou mais objetos SNMP especificados pelo `objectId`.

### Parâmetros

Se `objectId` for [string](language.types.string.md), tanto
`type` quanto `value` também devem ser
[string](language.types.string.md). Se `objectId` for [array](language.types.array.md),
`value` deve ser um array de tamanho igual contendo
os valores correspondentes. `type` pode ser
[string](language.types.string.md) (seu valor será usado para todos os pares
`objectId`-`value`) ou
um array de tamanho igual com valor por OID. Quando qualquer outra combinação de parâmetros for
usada, várias mensagens E\_WARNING podem ser exibidas com descrição detalhada.

`objectId`
:   O ID do objeto SNMP

    Quando a contagem de OIDs no array object\_id for maior que
    max\_oids, o método de definição de propriedades do objeto precisará usar múltiplas consultas
    para realizar as atualizações dos valores solicitados. Nesse caso, as verificações de tipo e valor
    são feitas por bloco, de modo que a segunda ou as solicitações subsequentes podem falhar devido a
    tipo ou valor incorreto para o OID solicitado. Para sinalizar isso, um aviso é
    gerado quando a contagem de OIDs no array object\_id for maior que max\_oids.

`type`
:   O MIB define o tipo de cada ID de objeto. Deve ser especificado como um único caractere da lista abaixo.

    **Tipos**

    |  |  |
    | --- | --- |
    | = | O tipo é retirado do MIB |
    | i | INTEGER |
    | u | INTEGER |
    | s | STRING |
    | x | HEX STRING |
    | d | DECIMAL STRING |
    | n | NULLOBJ |
    | o | OBJID |
    | t | TIMETICKS |
    | a | IPADDRESS |
    | b | BITS |

    Se **`OPAQUE_SPECIAL_TYPES`** foi definida ao compilar a biblioteca SNMP, os seguintes tipos também são válidos:

    **Tipos**

    |  |  |
    | --- | --- |
    | U | unsigned int64 |
    | I | signed int64 |
    | F | float |
    | D | double |

    A maioria destes tipos usará o tipo ASN.1 correspondente óbvio. 's', 'x', 'd' e 'b' são todas maneiras diferentes de especificar um valor OCTET STRING e
    o tipo sem sinal 'u' também é usado para lidar com valores Gauge32.

    Se os arquivos MIB forem carregados na árvore MIB com "snmp\_read\_mib" ou ao especificar isso na configuração da libsnmp, '=' pode ser usado como
    o parâmetro `type` para todos os IDs de objeto, pois o tipo pode ser lido automaticamente a partir do MIB.

    Note que existem duas maneiras de definir uma variável do tipo BITS como, por exemplo,
    "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":

    - Usando o tipo "b" e uma lista de números binários. Este método não é recomendado, pois a consulta GET para o mesmo OID retornaria, por exemplo, 0xF8.
    - Usando o tipo "x" e um número hexadecimal, mas sem (!) o prefixo "0x" comum.

    Consulte a seção de exemplos para obter mais detalhes.

`value`
:   O novo valor.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Esse método não lança nenhuma exceção por padrão.
Para habilitar o lançamento de exceções SNMPException quando ocorrer algum dos erros da biblioteca,
o parâmetro `exceptions_enabled` da classe SNMP
deve ser definido com um valor correspondente. Consulte a [explicação sobre `SNMP::$exceptions_enabled`](class.snmp.md#snmp.props.exceptions-enabled) para mais detalhes.

### Examples

**Exemplo #1 Definindo um único ID de objeto SNMP**

```
<?php
  $session = new SNMP(SNMP::VERSION_2C, "127.0.0.1", "private");
  $session->set('SNMPv2-MIB::sysContact.0', 's', "Nobody");
?>
```

**Exemplo #2 Definindo múltiplos valores usando uma única chamada
**SNMP::set()****

```
<?php
  $session = new SNMP(SNMP::VERSION_2C, "127.0.0.1", "private");
  $session->set(array('SNMPv2-MIB::sysContact.0', 'SNMPv2-MIB::sysLocation.0'), array('s', 's'), array("Nobody", "Nowhere"));
// ou
  $session->set(array('SNMPv2-MIB::sysContact.0', 'SNMPv2-MIB::sysLocation.0'), 's', array("Nobody", "Nowhere"));
?>
```

**Exemplo #3 Usando **SNMP::set()** para definir o ID do objeto SNMP BITS**

```
<?php
  $session = new SNMP(SNMP::VERSION_2C, "127.0.0.1", "private");
  $session->set('FOO-MIB::bar.42', 'b', '0 1 2 3 4');
// ou
  $session->set('FOO-MIB::bar.42', 'x', 'F0');
?>
```

### Veja também

- [SNMP::get()](snmp.get.md) - Busca um objeto SNMP

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
