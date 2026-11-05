# Verifica o buffer para detectar a ocorrência de um fim de linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.searcheol.php

---

# EventBuffer::searchEol

(PECL event >= 1.5.0)

EventBuffer::searchEol — Verifica o buffer para detectar a ocorrência de um fim de linha

### Descrição

public
function **EventBuffer::searchEol**(
[int](language.types.integer.md) `$start`
 = -1
, 
[int](language.types.integer.md) `$eol_style`
 =
**`EventBuffer::EOL_ANY`**
): [mixed](language.types.mixed.md)

Verifica o buffer para uma ocorrência de um fim de linha especificado pelo
parâmetro `eol_style`.
Ele retorna a posição numérica da string, ou **`false`** se a
string não foi encontrada.

Se o argumento
`start`
for fornecido, ele representa a posição na qual a pesquisa deve
começar; caso contrário, a pesquisa é realizada a partir do início da string. Se o argumento
`end`
for fornecido, a pesquisa é realizada entre as posições de buffer
inicial e final.

### Parâmetros

`start`
:   Posição inicial de pesquisa.

`eol_style`
:   Uma das
    [constantes EventBuffer:EOL\_\*](class.eventbuffer.md#eventbuffer.constants).

### Valor Retornado

Retorna a posição numérica da primeira ocorrência do símbolo de fim de linha no
buffer, ou **`false`** se não for encontrado.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Veja também

- [EventBuffer::search()](eventbuffer.search.md) - Verifica o buffer em busca de uma ocorrência de uma string

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
