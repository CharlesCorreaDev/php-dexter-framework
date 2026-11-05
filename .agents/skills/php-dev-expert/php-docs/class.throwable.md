# A classe Throwable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.throwable.php

---

# A classe Throwable

(PHP 7, PHP 8)

## Introdução

**Throwable** é a interface base para qualquer objeto
lançável usando a declaração `throw`, incluindo as classes
[Error](class.error.md) e [Exception](class.exception.md).

> **Nota**:
>
> As classes do PHP não podem implementar a interface **Throwable**
> diretamente, e devem, ao invés, estender a classe
> [Exception](class.exception.md).

## Resumo da Interface

interface ****Throwable****
extends
[Stringable](class.stringable.md) {

/\* Métodos \*/

public function [getMessage](throwable.getmessage.md)(): [string](language.types.string.md)

public function [getCode](throwable.getcode.md)(): [int](language.types.integer.md)

public function [getFile](throwable.getfile.md)(): [string](language.types.string.md)

public function [getLine](throwable.getline.md)(): [int](language.types.integer.md)

public function [getTrace](throwable.gettrace.md)(): [array](language.types.array.md)

public function [getTraceAsString](throwable.gettraceasstring.md)(): [string](language.types.string.md)

public function [getPrevious](throwable.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

public function [\_\_toString](throwable.tostring.md)(): [string](language.types.string.md)

/\* Métodos herdados \*/

public function [Stringable::\_\_toString](stringable.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **Throwable** implementa a interface [Stringable](class.stringable.md). |

## Índice

- [Throwable::getMessage](throwable.getmessage.md) — Obtém a mensagem
- [Throwable::getCode](throwable.getcode.md) — Obtém o código da exceção
- [Throwable::getFile](throwable.getfile.md) — Obtém o arquivo no qual o objeto foi criado
- [Throwable::getLine](throwable.getline.md) — Obtém a linha na qual o objeto foi instanciado
- [Throwable::getTrace](throwable.gettrace.md) — Obtém o rastreamento de pilha
- [Throwable::getTraceAsString](throwable.gettraceasstring.md) — Obtém o rastreamento de pilha como uma string
- [Throwable::getPrevious](throwable.getprevious.md) — Retorna o Throwable anterior
- [Throwable::\_\_toString](throwable.tostring.md) — Obtém uma representação em string do objeto disparado

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
