# Substitui uma substring dentro dos dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-characterdata.replacedata.php

---

# Dom\CharacterData::replaceData

(PHP 8 >= 8.4.0)

Dom\CharacterData::replaceData — 
Substitui uma substring dentro dos dados de caracteres

### Descrição

public function **Dom\CharacterData::replaceData**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

Substitui `count` caracteres a partir da posição
`offset` com `data`.

### Parâmetros

`offset`
:   O deslocamento a partir do qual começar a substituição.

`count`
:   O número de caracteres a serem substituídos. Se a soma de
    `offset` e `count` exceder
    o comprimento, então todos os caracteres até o final dos dados são substituídos.

`data`
:   A string com a qual a faixa deve ser substituída.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INDEX_SIZE_ERR`**
:   Gerado se `offset` for negativo ou maior que o
    número de pontos de código UTF-8 nos dados, ou se `count` for
    negativo.

### Veja também

- [Dom\CharacterData::appendData()](dom-characterdata.appenddata.md) - Acrescenta a string ao final dos dados de caractere do nó
- [Dom\CharacterData::deleteData()](dom-characterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
- [Dom\CharacterData::insertData()](dom-characterdata.insertdata.md) - Insere uma string na posição de ponto de código UTF-8 especificada
- [Dom\CharacterData::substringData()](dom-characterdata.substringdata.md) - Extrai uma faixa de dados dos dados de caracteres

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
