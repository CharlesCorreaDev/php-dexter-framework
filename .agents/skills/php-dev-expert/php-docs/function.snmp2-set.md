# Define o valor de um objeto SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp2-set.php

---

# snmp2\_set

(PHP >= 5.2.0, PHP 7, PHP 8)

snmp2\_set — Define o valor de um objeto SNMP

### Descrição

function **snmp2\_set**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$type`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$value`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [bool](language.types.boolean.md)

**snmp2\_set()** é usado para definir o valor de um objeto SNMP
especificado pelo `object_id`.

### Parâmetros

`hostname`
:   O nome do host do agente SNMP (servidor).

`community`
:   A comunidade de escrita.

`object_id`
:   O ID do objeto SNMP.

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

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Se o host SNMP rejeitar o tipo de dado, uma mensagem E\_WARNING como "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." será exibida.
Se um OID desconhecido ou inválido for especificado, o aviso provavelmente será "Could not add variable".

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |

### Examples

**Exemplo #1 Usando **snmp2\_set()****

```
<?php
  snmp2_set("localhost", "public", "IF-MIB::ifAlias.3", "s", "foo");
?>
```

**Exemplo #2 Usando **snmp2\_set()** para definir um id de objeto SNMP BITS**

```
<?php
  snmp2_set("localhost", "public", 'FOO-MIB::bar.42', 'b', '0 1 2 3 4');
// ou
  snmp2_set("localhost", "public", 'FOO-MIB::bar.42', 'x', 'F0');
?>
```

### Veja também

- [snmp2\_get()](function.snmp2-get.md) - Busca um objeto SNMP

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
