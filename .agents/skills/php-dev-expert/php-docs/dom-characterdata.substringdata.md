# Extrai uma faixa de dados dos dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-characterdata.substringdata.php

---

# Dom\CharacterData::substringData

(PHP 8 >= 8.4.0)

Dom\CharacterData::substringData — 
Extrai uma faixa de dados dos dados de caracteres

### Descrição

public function **Dom\CharacterData::substringData**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [string](language.types.string.md)

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

- [Dom\CharacterData::appendData()](dom-characterdata.appenddata.md) - Acrescenta a string ao final dos dados de caractere do nó
- [Dom\CharacterData::deleteData()](dom-characterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
- [Dom\CharacterData::insertData()](dom-characterdata.insertdata.md) - Insere uma string na posição de ponto de código UTF-8 especificada
- [Dom\CharacterData::replaceData()](dom-characterdata.replacedata.md) - Substitui uma substring dentro dos dados de caracteres

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
