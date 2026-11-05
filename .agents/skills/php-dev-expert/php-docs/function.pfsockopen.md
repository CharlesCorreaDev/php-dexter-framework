# Abra uma conexão persistente de soquete de domínio Unix ou de Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pfsockopen.php

---

# pfsockopen

(PHP 4, PHP 5, PHP 7, PHP 8)

pfsockopen — Abra uma conexão persistente de soquete de domínio Unix ou de Internet

### Descrição

function **pfsockopen**(  
    [string](language.types.string.md) `$hostname`,  
    [int](language.types.integer.md) `$port` = -1,  
    [int](language.types.integer.md) `&$error_code` = **`null`**,  
    [string](language.types.string.md) `&$error_message` = **`null`**,  
    [?](language.types.null.md)[float](language.types.float.md) `$timeout` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Esta função se comporta exatamente como [fsockopen()](function.fsockopen.md) com a
diferença de que a conexão não é fechada após o término do script.
É a versão persistente de [fsockopen()](function.fsockopen.md).

### Parâmetros

Para obter informações sobre parâmetros, consulte a documentação
da função [fsockopen()](function.fsockopen.md).

### Valor Retornado

**pfsockopen()** retorna um ponteiro de arquivo que pode ser usado
junto com outras funções de arquivo (como
[fgets()](function.fgets.md), [fgetss()](function.fgetss.md),
[fwrite()](function.fwrite.md), [fclose()](function.fclose.md) e
[feof()](function.feof.md)), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timeout` agora pode ser nulo. |

### Veja também

- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet

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
