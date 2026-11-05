# Acrescenta a string ao final dos dados de caractere do nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-characterdata.appenddata.php

---

# Dom\CharacterData::appendData

(PHP 8 >= 8.4.0)

Dom\CharacterData::appendData — 
Acrescenta a string ao final dos dados de caractere do nó

### Descrição

public function **Dom\CharacterData::appendData**([string](language.types.string.md) `$data`): [void](language.types.void.md)

Acrescenta a string `data` ao final dos dados de caractere do nó

### Parâmetros

`data`
:   A string a ser acrescentada.

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [Dom\CharacterData::deleteData()](dom-characterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
- [Dom\CharacterData::insertData()](dom-characterdata.insertdata.md) - Insere uma string na posição de ponto de código UTF-8 especificada
- [Dom\CharacterData::replaceData()](dom-characterdata.replacedata.md) - Substitui uma substring dentro dos dados de caracteres
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
