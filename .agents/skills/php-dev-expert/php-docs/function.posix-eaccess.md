# Determina a acessibilidade de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-eaccess.php

---

# posix\_eaccess

(PHP 8 >= 8.3.0)

posix\_eaccess — 
Determina a acessibilidade de um arquivo

### Descrição

function **posix\_eaccess**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

**posix\_eaccess()** verifica as permissões efetivas de usuário a um arquivo.

### Parâmetros

`filename`
:   O nome do arquivo a ser verificado.

`flags`
:   Uma máscara de bits consistindo em uma ou mais das constantes **`POSIX_F_OK`**,
    **`POSIX_R_OK`**, **`POSIX_W_OK`** e
    **`POSIX_X_OK`**.

    **`POSIX_R_OK`**, **`POSIX_W_OK`** e
    **`POSIX_X_OK`** solicitam a verificação da existência do arquivo
    e se ele tem permissões de leitura, escrita e execução, respectivamente.
    **`POSIX_F_OK`** apenas solicita a verificação da
    existência do arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Verifica as permissões efetivas de usuário/grupo a um arquivo, diferentemente de [posix\_access()](function.posix-access.md) que verifica as permissões reais de usuário/grupo. |

### Examples

**Exemplo #1 Exemplo de **posix\_eaccess()****

Este exemplo verifica que o arquivo $file tem permissão de leitura e escrita, caso contrário
exibe uma mensagem de erro.

```
<?php

$file = 'algum_arquivo';

if (posix_eaccess($file, POSIX_R_OK | POSIX_W_OK)) {
    echo 'O arquivo pode ser lido e escrito!';

} else {
    $error = posix_get_last_error();

    echo "Erro $error: " . posix_strerror($error);
}

?>
```

### Veja também

- [posix\_get\_last\_error()](function.posix-get-last-error.md) - Recupera o número do erro definido pela última função posix que falhou
- [posix\_strerror()](function.posix-strerror.md) - Recupera a mensagem de erro do sistema associada ao número de erro fornecido
- [posix\_access()](function.posix-access.md) - Determina a acessibilidade de um arquivo

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
