# Extrai uma faixa de dados dos dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.substringdata.php

---

# DOMCharacterData::substringData

(PHP 5, PHP 7, PHP 8)

DOMCharacterData::substringData — 
Extrai uma faixa de dados dos dados de caracteres

### Descrição

public function **DOMCharacterData::substringData**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a substring especificada.

### Parâmetros

`offset`
:   Offset de início da substring a ser extraída.

`count`
:   O número de caracteres a serem extraídos.

### Valor Retornado

A substring especificada. Se a soma de `offset`
e `count` exceder o comprimento, então todos os pontos de código UTF-8
até o final dos dados são retornadas.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INDEX_SIZE_ERR`**
:   Gerado se `offset` for negativo ou maior que
    o número de pontos de código UTF-8 dados, ou se `count` for
    negativo.

### Veja também

- [DOMCharacterData::appendData()](domcharacterdata.appenddata.md) - Acrescenta a string ao final dos dados de caractere do nó
- [DOMCharacterData::deleteData()](domcharacterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
- [DOMCharacterData::insertData()](domcharacterdata.insertdata.md) - Insere uma string na posição de ponto de código UTF-8 especificada
- [DOMCharacterData::replaceData()](domcharacterdata.replacedata.md) - Substitui uma substring dentro dos dados de caracteres

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
