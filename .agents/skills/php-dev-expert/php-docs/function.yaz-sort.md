# Define critérios de classificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-sort.php

---

# yaz\_sort

(PHP 4 >= 4.0.7, PECL yaz >= 0.9.0)

yaz\_sort — Define critérios de classificação

### Descrição

function **yaz\_sort**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$criteria`): [void](language.types.void.md)

Esta função define critérios de classificação e habilita a classificação Z39.50.

Chame esta função *antes* de [yaz\_search()](function.yaz-search.md).
Usar esta função sozinha não tem efeito algum. Quando usada em conjunto
com [yaz\_search()](function.yaz-search.md), uma ordenação Z39.50 será enviada após
uma resposta de pesquisa ser recebida e antes que quaisquer registros sejam recuperados com
Z39.50 Present ([yaz\_present()](function.yaz-present.md)).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`criteria`
:   Uma string que assume o formato field1 flags1 field2
    flags2 onde field1 especifica os atributos primários para
    ordenação, field2 os secundários, etc.

    O campo especifica uma combinação de atributos numéricos consistindo
    de pares tipo=valor separados por vírgula (por exemplo, `1=4,2=1`);
    ou o campo pode especificar um critério de string simples (por exemplo,
    `title`. Os sinalizadores são uma sequência dos seguintes
    caracteres que não podem ser separados por nenhum espaço em branco.

    **Sinalizadores de Ordenação**

    `a`
    :   Ordem ascendente

    `d`
    :   Ordem descendente

    `i`
    :   Ordenação insensível a maiúsculas/minúsculas

    `s`
    :   Ordenação sensível a maiúsculas/minúsculas

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Critérios de Ordenação**

Para classificar pelo título do atributo Bib1, sem diferenciação de maiúsculas e minúsculas e em ordem crescente, seriam
usados os seguintes critérios de ordenação:

```
1=4 ia
```

Se os critérios de ordenação secundários forem autor, diferenciação entre maiúsculas e minúsculas e
ordem crescente, seria usado:

```
1=4 ia 1=1003 sa
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
