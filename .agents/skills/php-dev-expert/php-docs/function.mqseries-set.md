# MQSET MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-set.php

---

# mqseries\_set

(PECL mqseries >= 0.10.0)

mqseries\_set — MQSET MQSeries

### Descrição

function **mqseries\_set**(  
    [resource](language.types.resource.md) `$hConn`,  
    [resource](language.types.resource.md) `$hObj`,  
    [int](language.types.integer.md) `$selectorCount`,  
    [array](language.types.array.md) `$selectors`,  
    [int](language.types.integer.md) `$intAttrCount`,  
    [array](language.types.array.md) `$intAttrs`,  
    [int](language.types.integer.md) `$charAttrLength`,  
    [array](language.types.array.md) `$charAttrs`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada **mqseries\_set()**
(MQSET) é usada para alterar os atributos de um objeto representado por um
identificador. O objeto deve ser uma fila.

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`hObj`
:   Identificador de objeto.

    Este identificador representa o objeto a ser usado.

`selectorCount`
:   Contagem de seletores.

`selectors`
:   Array de seletores de atributos.

`intAttrCount`
:   Contagem de atributos inteiros.

`intAttrs`
:   Array de atributos inteiros.

`charAttrLength`
:   Comprimento do buffer de atributos de caracteres.

`charAttrs`
:   Atributos de caracteres.

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [mqseries\_inq()](function.mqseries-inq.md) - MQINQ MQSeries

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
