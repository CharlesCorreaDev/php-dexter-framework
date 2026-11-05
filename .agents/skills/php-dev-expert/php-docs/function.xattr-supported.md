# Verifique se o sistema de arquivos suporta atributos estendidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xattr-supported.php

---

# xattr\_supported

(PECL xattr >= 1.0.0)

xattr\_supported — 
Verifique se o sistema de arquivos suporta atributos estendidos

### Descrição

function **xattr\_supported**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Esta função verifica se o sistema de arquivos que contém o arquivo fornecido suporta
atributos estendidos. É necessário acesso de leitura ao arquivo.

### Parâmetros

`filename`
:   O caminho do arquivo testado.

`flags`
:   **Opções suportadas por xattr**

    |  |  |
    | --- | --- |
    | **`XATTR_DONTFOLLOW`** | Não segue o link simbólico mas opera no link em si. |

### Valor Retornado

Esta função retorna **`true`** se o sistema de arquivos suportar atributos estendidos,
**`false`** se não suportar e **`null`** se não puder ser determinado (por exemplo,
caminho errado ou falta de permissões para o arquivo).

### Examples

**Exemplo #1 Exemplo de **xattr\_supported()****

O código a seguir verifica se podemos usar atributos estendidos.

```
<?php
$file = 'algum_arquivo';

if (xattr_supported($file)) {
    /* ... uso de algumas funções xattr_* ... */
}

?>
```

### Veja também

- [xattr\_get()](function.xattr-get.md) - Obtém um atributo estendido
- [xattr\_list()](function.xattr-list.md) - Obtém uma lista de atributos estendidos

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
