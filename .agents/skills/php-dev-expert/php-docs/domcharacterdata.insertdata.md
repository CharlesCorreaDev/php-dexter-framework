# Insere uma string na posição de ponto de código UTF-8 especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.insertdata.php

---

# DOMCharacterData::insertData

(PHP 5, PHP 7, PHP 8)

DOMCharacterData::insertData — 
Insere uma string na posição de ponto de código UTF-8 especificada

### Descrição

public function **DOMCharacterData::insertData**([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Insere a string `data` na posição `offset`.

### Parâmetros

`offset`
:   O deslocamento de caractere no qual inserir.

`data`
:   A string a ser inserida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INDEX_SIZE_ERR`**
:   Gerado se `offset` for negativo ou maior que o
    número de pontos de código UTF-8 nos dados.

### Veja também

- [DOMCharacterData::appendData()](domcharacterdata.appenddata.md) - Acrescenta a string ao final dos dados de caractere do nó
- [DOMCharacterData::deleteData()](domcharacterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
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
