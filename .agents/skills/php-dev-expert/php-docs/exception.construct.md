# Construtor da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.construct.php

---

# Exception::\_\_construct

(PHP 5, PHP 7, PHP 8)

Exception::\_\_construct — Construtor da exceção

### Descrição

public function **Exception::\_\_construct**([string](language.types.string.md) `$message` = "", [int](language.types.integer.md) `$code` = 0, [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**)

Construtor de Exception.

### Parâmetros

`message`
:   A mensagem da exceção.

`code`
:   O código da exceção.

`previous`
:   A exceção anterior, para o encadeamento de exceções.

> **Nota**:
>
> Chamar o construtor da classe Exception de uma classe herdada faz ignorar
> os argumentos padrão, caso as propriedades $code e $message já estiverem configuradas.

### Notas

> **Nota**:
>
> A `message` *NÃO* é
> binary safe.

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
