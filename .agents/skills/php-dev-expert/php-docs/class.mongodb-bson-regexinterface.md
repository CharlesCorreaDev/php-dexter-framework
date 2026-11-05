# A interface MongoDB\BSON\RegexInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-regexinterface.php

---

# A interface MongoDB\BSON\RegexInterface

(mongodb >=1.3.0)

## Introdução

Esta interface é implementada por [MongoDB\BSON\Regex](class.mongodb-bson-regex.md)
para ser usada como um parâmetro, um retorno, ou um tipo de propriedade em classes do usuário.

## Resumo da classe

class **MongoDB\BSON\RegexInterface**
{

/\* Métodos \*/

abstract public function [getFlags](mongodb-bson-regexinterface.getflags.md)(): [string](language.types.string.md)

abstract public function [getPattern](mongodb-bson-regexinterface.getpattern.md)(): [string](language.types.string.md)

abstract public function [\_\_toString](mongodb-bson-regexinterface.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\BSON\RegexInterface::getFlags](mongodb-bson-regexinterface.getflags.md) — Retorna as opções de RegexInterface
- [MongoDB\BSON\RegexInterface::getPattern](mongodb-bson-regexinterface.getpattern.md) — Retorna a expressão regular de RegexInterface
- [MongoDB\BSON\RegexInterface::\_\_toString](mongodb-bson-regexinterface.tostring.md) — Retorna a representação em string deste RegexInterface

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
