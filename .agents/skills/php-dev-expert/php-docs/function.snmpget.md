# Busca um objeto SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmpget.php

---

# snmpget

(PHP 4, PHP 5, PHP 7, PHP 8)

snmpget — Busca um objeto SNMP

### Descrição

function **snmpget**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [mixed](language.types.mixed.md)

A função **snmpget()** é usada para ler o
valor de um objeto SNMP especificado pelo
`object_id`.

### Parâmetros

`hostname`
:   O agente SNMP.

`community`
:   A comunidade de leitura.

`object_id`
:   O objeto SNMP.

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna o valor do objeto SNMP em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |

### Examples

**Exemplo #1 Usando **snmpget()****

```
<?php
$syscontact = snmpget("127.0.0.1", "public", "system.SysContact.0");
?>
```

### Veja também

- [snmpset()](function.snmpset.md) - Define o valor de um objeto SNMP

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
