# A classe SolrIllegalOperationException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrillegaloperationexception.php

---

# A classe SolrIllegalOperationException

(PECL solr >= 0.9.2)

## Introdução

Este objeto é lançado quando uma operação ilegal ou sem suporte é executada em um objeto.

## Resumo da classe

class **SolrIllegalOperationException**

extends
[SolrException](class.solrexception.md)
{

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

protected
[int](language.types.integer.md)
[$sourceline](class.solrexception.md#solrexception.props.sourceline);

protected
[string](language.types.string.md)
[$sourcefile](class.solrexception.md#solrexception.props.sourcefile);

protected
[string](language.types.string.md)
[$zif\_name](class.solrexception.md#solrexception.props.zif-name);

/\* Métodos \*/

public function [getInternalInfo](solrillegaloperationexception.getinternalinfo.md)(): [array](language.types.array.md)

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

public function [SolrException::getInternalInfo](solrexception.getinternalinfo.md)(): [array](language.types.array.md)

}

## Índice

- [SolrIllegalOperationException::getInternalInfo](solrillegaloperationexception.getinternalinfo.md) — Retorna informações internas de onde a exceção foi lançada

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
