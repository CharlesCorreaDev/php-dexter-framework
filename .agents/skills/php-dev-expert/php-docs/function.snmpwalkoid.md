# Consulta uma árvore de informações sobre uma entidade de rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmpwalkoid.php

---

# snmpwalkoid

(PHP 4, PHP 5, PHP 7, PHP 8)

snmpwalkoid — Consulta uma árvore de informações sobre uma entidade de rede

### Descrição

function **snmpwalkoid**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **snmpwalkoid()** é usada para ler todos os IDs de objetos
e seus respectivos valores de um agente SNMP especificado por
`hostname`.

A existência de **snmpwalkoid()** e
[snmpwalk()](function.snmpwalk.md) tem razões históricas. Ambas
as funções são fornecidas para compatibilidade com versões anteriores.
Em vez disso, use [snmprealwalk()](function.snmprealwalk.md).

### Parâmetros

`hostname`
:   O agente SNMP.

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

Retorna um array associativo com IDs de objetos e seus respectivos
valores de objeto, começando pelo `object_id`
como raiz ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **snmpwalkoid()****

```
<?php
$a = snmpwalkoid("127.0.0.1", "public", "");
for (reset($a); $i = key($a); next($a)) {
    echo "$i: $a[$i]<br />\n";
}
?>
```

A chamada de função acima retornaria todos os objetos SNMP do
agente SNMP em execução no host local. É possível percorrer os valores
com um loop.

### Veja também

- [snmpwalk()](function.snmpwalk.md) - Busca todos os objetos SNMP de um agente

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
