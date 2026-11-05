# Acrescenta a string ao final dos dados de caractere do nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.appenddata.php

---

# DOMCharacterData::appendData

(PHP 5, PHP 7, PHP 8)

DOMCharacterData::appendData — 
Acrescenta a string ao final dos dados de caractere do nó

### Descrição

public function **DOMCharacterData::appendData**([string](language.types.string.md) `$data`): [true](language.types.singleton.md)

Acrescenta a string `data` ao final dos dados de caractere do nó

### Parâmetros

`data`
:   A string a ser acrescentada.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Esta função agora tem um tipo de retorno [true](language.types.singleton.md) tentativo. |

### Veja também

- [DOMCharacterData::deleteData()](domcharacterdata.deletedata.md) - Remove uma faixa de caracteres dos dados de caracteres
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
