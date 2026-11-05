# Busca todos os objetos SNMP de um agente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmpwalk.php

---

# snmpwalk

(PHP 4, PHP 5, PHP 7, PHP 8)

snmpwalk — Busca todos os objetos SNMP de um agente

### Descrição

function **snmpwalk**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **snmpwalk()** é usada para ler todos os valores de
um agente SNMP especificado pelo `hostname`.

### Parâmetros

`hostname`
:   O agente SNMP (servidor).

`community`
:   A comunidade de leitura.

`object_id`
:   Se **`null`**, `object_id` for considerado a raiz da
    árvore de objetos SNMP e todos os objetos sob essa árvore serão retornados como
    um array.

    Se `object_id` for especificado, todos os objetos SNMP
    abaixo desse `object_id` serão retornados.

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna um array de valores de objetos SNMP começando pelo
`object_id` como raiz ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **snmpwalk()****

```
<?php
$a = snmpwalk("127.0.0.1", "public", "");

foreach ($a as $val) {
    echo "$val\n";
}

?>
```

A chamada de função acima retornaria todos os objetos SNMP do
agente SNMP em execução no host local. É possível percorrer os valores
com um loop.

### Veja também

- [snmprealwalk()](function.snmprealwalk.md) - Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado

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
