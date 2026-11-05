# Constrói a exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/errorexception.construct.php

---

# ErrorException::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ErrorException::\_\_construct — Constrói a exceção

### Descrição

public function **ErrorException::\_\_construct**(  
    [string](language.types.string.md) `$message` = "",  
    [int](language.types.integer.md) `$code` = 0,  
    [int](language.types.integer.md) `$severity` = **`E_ERROR`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$line` = **`null`**,  
    [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**  
)

Construtor da Exception.

### Parâmetros

`message`
:   A mensagem da exceção.

`code`
:   O código da exceção.

`severity`
:   A severidade da exceção.

    > **Nota**:
    >
    > Como a severidade da seção pode ser qualquer valor [int](language.types.integer.md), é desejado que as
    > [constantes de erro](errorfunc.constants.md) sejam utilizadas.

`filename`
:   O nome do arquivo onde a exceção é disparada.

`line`
:   A número da linha onde a exceção é disparada.

`previous`
:   A exceção anterior, usada para encadeamento de exceções.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `filename` e `line` agora podem ser null. Anteriormente seus padrões eram **`__FILE__`** e **`__LINE__`**, respectivamente. |

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
