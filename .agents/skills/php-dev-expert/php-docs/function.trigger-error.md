# Gera uma mensagem a nível de usuário de erro/alerta/nota

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trigger-error.php

---

# trigger\_error

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

trigger\_error — Gera uma mensagem a nível de usuário de erro/alerta/nota

### Descrição

function **trigger\_error**([string](language.types.string.md) `$message`, [int](language.types.integer.md) `$error_level` = **`E_USER_NOTICE`**): [true](language.types.singleton.md)

Usado para disparar uma condição de erro, pode ser usado em conjunto
com o gerenciador de erro interno, ou com uma função definida pelo usuário que
tenha sido definida como novo gerenciador de erro
([set\_error\_handler()](function.set-error-handler.md)).

Esta função é útil quando for necessário gerar uma resposta em particular
a uma exceção em tempo de execução.

### Parâmetros

`message`
:   A mensagem de erro designada para este erro. É limitada a 1024
    bytes em tamanho. Quaisquer caracteres adicionais além de 1024 bytes serão
    truncados.

`error_level`
:   O tipo de erro designado para este erro. Funciona apenas com a família de constantes
    **`E_USER_*`**, e o padrão é **`E_USER_NOTICE`**.

    **Aviso**

    Passar **`E_USER_ERROR`** como o
    `error_level` agora foi descontinuado.
    Alternativamente, uma [Exception](class.exception.md) pode ser lançada ou
    [exit()](function.exit.md) pode ser chamada.

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) se
`error_level` não for uma das constantes
**`E_USER_ERROR`**, **`E_USER_WARNING`**,
**`E_USER_NOTICE`** ou **`E_USER_DEPRECATED`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar **`E_USER_ERROR`** como `error_level` agora foi descontinuado. Alternativamente, uma [Exception](class.exception.md) pode ser lançada ou [exit()](function.exit.md) pode ser chamada. |
| 8.4.0 | A função agora tem um tipo de retorno [true](language.types.singleton.md) ao invés de [bool](language.types.boolean.md). |
| 8.0.0 | A função agora lança uma exceção [ValueError](class.valueerror.md) se um `error_level` inválido for especificado. Anteriormente, retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **trigger\_error()****

Consulte [set\_error\_handler()](function.set-error-handler.md) para um exemplo mais extensivo.

```
<?php
$password = $_POST['password'] ?? '';
if ($password === '') {
    trigger_error("Usar uma senha vazia não é seguro", E_USER_WARNING);
}
$hash = password_hash($password, PASSWORD_DEFAULT);
?>
```

### Notas

**Aviso**

As entidades HTML contidas no parâmetro `message`
não são escapadas. Utilize [htmlentities()](function.htmlentities.md) na mensagem
se for necessário exibir o erro em um navegador.

### Veja também

- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados
- [set\_error\_handler()](function.set-error-handler.md) - Define uma função de usuário para manipulação de erro
- [restore\_error\_handler()](function.restore-error-handler.md) - Restaura a função anterior de gerenciamento de erro
- As [constantes de nível de erro](errorfunc.constants.md)
- O atributo [Deprecated](class.deprecated.md)

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
