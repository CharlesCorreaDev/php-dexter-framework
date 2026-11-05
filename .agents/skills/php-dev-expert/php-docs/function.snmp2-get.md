# Busca um objeto SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp2-get.php

---

# snmp2\_get

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

snmp2\_get — Busca um objeto SNMP

### Descrição

function **snmp2\_get**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [mixed](language.types.mixed.md)

A função **snmp2\_get()** é usada para ler o
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

**Exemplo #1 Usando **snmp2\_get()****

```
<?php
$syscontact = snmp2_get("127.0.0.1", "public", "system.SysContact.0");
?>
```

### Veja também

- [snmp2\_set()](function.snmp2-set.md) - Define o valor de um objeto SNMP

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
