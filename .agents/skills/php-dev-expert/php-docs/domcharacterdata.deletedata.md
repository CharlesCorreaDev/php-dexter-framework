# Remove uma faixa de caracteres dos dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.deletedata.php

---

# DOMCharacterData::deleteData

(PHP 5, PHP 7, PHP 8)

DOMCharacterData::deleteData — 
Remove uma faixa de caracteres dos dados de caracteres

### Descrição

public function **DOMCharacterData::deleteData**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [bool](language.types.boolean.md)

Exclui `count` caracteres a partir da posição
`offset`.

### Parâmetros

`offset`
:   O deslocamento a partir do qual começar a remover.

`count`
:   O número de caracteres a serem excluídos. Se a soma de
    `offset` e `count` exceder
    o comprimento, então todos os caracteres até o final dos dados são excluídos.

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
- [DOMCharacterData::insertData()](domcharacterdata.insertdata.md) - Insere uma string na posição de ponto de código UTF-8 especificada
- [DOMCharacterData::replaceData()](domcharacterdata.replacedata.md) - Substitui uma substring dentro dos dados de caracteres
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
