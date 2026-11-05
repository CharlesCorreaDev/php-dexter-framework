# A classe RarException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.rarexception.php

---

# A classe RarException

(PECL rar >= 2.0.0)

## Introdução

Esta classe tem dois propósitos: é o tipo de exceções lançadas pelas funções e
métodos da extensão RAR e permite, através de métodos estáticos consultar e definir o comportamento de erro
da extensão, ou seja, se exceções são lançadas ou apenas avisos são emitidos.

Os seguintes códigos de erro são usados:

- -1 - erro fora da biblioteca UnRAR
- 11 - memória insuficiente
- 12 - dados ruins
- 13 - arquivo ruim
- 14 - formato desconhecido
- 15 - erro ao abrir arquivo
- 16 - erro de criação de arquivo
- 17 - erro de fechamento de arquivo
- 18 - erro de leitura
- 19 - erro de gravação
- 20 - buffer muito pequeno
- 21 - erro RAR desconhecido
- 22 - senha necessária, mas não fornecida

## Resumo da classe

final
class **RarException**

extends
[Exception](class.exception.md)
{

/\* Métodos \*/

public static function [isUsingExceptions](rarexception.isusingexceptions.md)(): [bool](language.types.boolean.md)

public static function [setUsingExceptions](rarexception.setusingexceptions.md)([bool](language.types.boolean.md) `$using_exceptions`): [void](language.types.void.md)

/\* Métodos herdados \*/

final public function [Exception::getMessage](exception.getmessage.md)(): [string](language.types.string.md)

final public function [Exception::getPrevious](exception.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [Exception::getCode](exception.getcode.md)(): [int](language.types.integer.md)

final public function [Exception::getFile](exception.getfile.md)(): [string](language.types.string.md)

final public function [Exception::getLine](exception.getline.md)(): [int](language.types.integer.md)

final public function [Exception::getTrace](exception.gettrace.md)(): [array](language.types.array.md)

final public function [Exception::getTraceAsString](exception.gettraceasstring.md)(): [string](language.types.string.md)

public function [Exception::\_\_toString](exception.tostring.md)(): [string](language.types.string.md)

private function [Exception::\_\_clone](exception.clone.md)(): [void](language.types.void.md)

}

## Índice

- [RarException::isUsingExceptions](rarexception.isusingexceptions.md) — Verifica se o tratamento de erros com exceções está em uso
- [RarException::setUsingExceptions](rarexception.setusingexceptions.md) — Ativa e desativa o tratamento de erros com exceções

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
