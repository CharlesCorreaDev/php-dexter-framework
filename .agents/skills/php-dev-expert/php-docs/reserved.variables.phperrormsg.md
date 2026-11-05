# A mensagem de erro anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.phperrormsg.php

---

# $php\_errormsg

(PHP 4, PHP 5, PHP 7)

$php\_errormsg — A mensagem de erro anterior

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 7.2.0 e foi *REMOVIDO* a partir do PHP 8.0.0. O uso deste recurso
é fortemente desencorajado.

Use [error\_get\_last()](function.error-get-last.md) em seu lugar.

### Descrição

$php\_errormsg é uma variável contendo o texto
da última mensagem de erro gerada pelo PHP. Esta variável
somente estará disponível dentro do escopo no qual o erro
ocorreu e somente se a opção de
configuração [track\_errors](errorfunc.configuration.md#ini.track-errors)
estiver "on" (o padrão é "off").

**Aviso**

Se um manipulador de erro definido pelo usuário ([set\_error\_handler()](function.set-error-handler.md))
estiver configurado, $php\_errormsg somente será definida se
a função retornar **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | A diretiva [track\_errors](errorfunc.configuration.md#ini.track-errors) que criava a variável $php\_errormsg foi removida. |
| 7.2.0 | A diretiva [track\_errors](errorfunc.configuration.md#ini.track-errors) que criava a variável $php\_errormsg foi descontinuada. |

### Examples

**Exemplo #1 Exemplo de $php\_errormsg**

```
<?php
@strpos();
echo $php_errormsg;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Wrong parameter count for strpos()
```

### Veja também

- [error\_get\_last()](function.error-get-last.md) - Obtém o último erro ocorrido

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
