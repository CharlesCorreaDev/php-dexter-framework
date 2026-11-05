# Define horário de acesso e de modificação de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.touch.php

---

# touch

(PHP 4, PHP 5, PHP 7, PHP 8)

touch — Define horário de acesso e de modificação de arquivo

### Descrição

function **touch**([string](language.types.string.md) `$filename`, [?](language.types.null.md)[int](language.types.integer.md) `$mtime` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$atime` = **`null`**): [bool](language.types.boolean.md)

Tenta mudar os horários de acesso e modificação do arquivo no parâmetro
`filename` para o valor informado em
`mtime`.
Note que o horário de acesso é sempre modificado, independente do número
de parâmetros.

Se o arquivo não existe, ele será criado.

### Parâmetros

`filename`
:   O nome do arquivo a ser atualizado.

`mtime`
:   Horário da atualização. Se `mtime` for **`null`**,
    o horário atual do sistema ([time()](function.time.md)) é usado.

`atime`
:   Se não **`null`**, o horário de acesso do arquivo é definido para
    o valor de `atime`. Caso contrário, é definido para
    o valor passado ao parâmetro `mtime`.
    Se ambos forem **`null`**, o horário atual do sistema é usado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `mtime` e `atime` agora podem ser nulos. |

### Examples

**Exemplo #1 Exemplo da função **touch()****

```
<?php
if (touch ($nomedoarquivo)) {
    echo 'O horário de ' . $nomedoarquivo . ' foi modificado para o horário atual';
} else {
    echo 'Desculpe, não foi possivel modificar o horário de ' . $nomedoarquivo;
}
?>
```

**Exemplo #2 **touch()** usando o parâmetro `mtime`**

```
<?php
// Este é o horário de modificação, vamos defini-lo para uma hora no passado.
$hora = time() - 3600;

// Toca o arquivo
if (!touch('algum_arquivo.txt', $hora)) {
    echo 'Opa, algo deu errado...';
} else {
    echo 'Horário modificado com sucesso';
}
?>
```

### Notas

> **Nota**:
>
> Note que a resolução de tempo pode variar
> de um sistema de arquivos para outro.

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
