# Substitui uma substring dentro dos dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.replacedata.php

---

# DOMCharacterData::replaceData

(PHP 5, PHP 7, PHP 8)

DOMCharacterData::replaceData — 
Substitui uma substring dentro dos dados de caracteres

### Descrição

public function **DOMCharacterData::replaceData**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

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

- [DOMCharacterData::appendData()](domcharacterdata.appenddata.md) - Acrescenta a string ao final dos dados de caractere do nó
- [DOMCharacterData::deleteData()](domcharacterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
- [DOMCharacterData::insertData()](domcharacterdata.insertdata.md) - Insere uma string na posição de ponto de código UTF-8 especificada
- [DOMCharacterData::substringData()](domcharacterdata.substringdata.md) - Extrai uma faixa de dados dos dados de caracteres

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
