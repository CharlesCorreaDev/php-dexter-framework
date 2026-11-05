# A classe MongoDB\Driver\Exception\RuntimeException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-exception-runtimeexception.php

---

# A classe MongoDB\Driver\Exception\RuntimeException

(mongodb >= 1.0.0)

## Introdução

Lançada quando o driver encontra um erro no momento da execução (por exemplo, erro interno de
[» libmongoc](https://github.com/mongodb/mongo-c-driver)).

## Resumo da classe

class **MongoDB\Driver\Exception\RuntimeException**

extends
[RuntimeException](class.runtimeexception.md)
implements
[MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md) {

/\* Propriedades \*/

protected
?[array](language.types.array.md)
[$errorLabels](class.mongodb-driver-exception-runtimeexception.md#mongodb-driver-exception-runtimeexception.props.errorlabels);

/\* Propriedades herdadas \*/

protected
[string](language.types.string.md)
[$message](class.exception.md#exception.props.message) = "";

private
[string](language.types.string.md)
[$string](class.exception.md#exception.props.string) = "";

protected
[int](language.types.integer.md)
[$code](class.exception.md#exception.props.code);

protected
[string](language.types.string.md)
[$file](class.exception.md#exception.props.file) = "";

protected
[int](language.types.integer.md)
[$line](class.exception.md#exception.props.line);

private
[array](language.types.array.md)
[$trace](class.exception.md#exception.props.trace) = [];

private
?[Throwable](class.throwable.md)
[$previous](class.exception.md#exception.props.previous) = null;

/\* Métodos \*/

final public function [hasErrorLabel](mongodb-driver-runtimeexception.haserrorlabel.md)([string](language.types.string.md) `$errorLabel`): [bool](language.types.boolean.md)

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

## Propriedades

errorLabels
:   Contém um array de rótulos de erro que acompanham uma exceção. Por exemplo,
    rótulos de erro podem ser usados ​​para detectar se uma transação pode ser repetida
    com segurança se o rótulo `TransientTransactionError` estiver
    presente. A existência de um rótulo de erro específico deve ser testada
    com o método
    [MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()](mongodb-driver-runtimeexception.haserrorlabel.md),
    em vez de interpretar a propriedade `errorLabels`
    manualmente.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.6.0 | O método [MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()](mongodb-driver-runtimeexception.haserrorlabel.md) e a propriedade [MongoDB\Driver\Exception\RuntimeException::errorLabels](class.mongodb-driver-exception-runtimeexception.md#mongodb-driver-exception-runtimeexception.props.errorlabels) foram adicionados. |

## Índice

- [MongoDB\Driver\Exception\RuntimeException::hasErrorLabel](mongodb-driver-runtimeexception.haserrorlabel.md) — Retorna se um rótulo de erro está associado a uma exceção

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
