# Obtém um atributo estendido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xattr-get.php

---

# xattr\_get

(PECL xattr >= 0.9.0)

xattr\_get — 
Obtém um atributo estendido

### Descrição

function **xattr\_get**([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função obtém o valor de um atributo estendido de um arquivo.

Os atributos estendidos têm dois namespaces diferentes: usuário
e root. O namespace de usuário está disponível para todos os usuários, enquanto o namespace de root
está disponível apenas para o usuário com privilégios de root. xattr opera no namespace de
usuário por padrão, mas isso pode ser alterado com o parâmetro
`flags`.

### Parâmetros

`filename`
:   O arquivo do qual o atributo será obtido.

`name`
:   O nome do atributo.

`flags`
:   **Opções suportadas por xattr**

    |  |  |
    | --- | --- |
    | **`XATTR_DONTFOLLOW`** | Não segue o link simbólico mas opera no link em si. |
    | **`XATTR_ROOT`** | Define o atributo no espaço de nomes (confiável) do administrador. Requer privilégios de administrador. |

### Valor Retornado

Retorna uma string contento o valor ou **`false`** se o atributo não
existir.

### Examples

**Exemplo #1 Verifica se o adminitrador do sistema assinou o arquivo**

```
<?php
$file = '/usr/local/sbin/some_binary';
$signature = xattr_get($file, 'Root signature', XATTR_ROOT);

/* ... verifica se $signature é válida ... */

?>
```

### Veja também

- [xattr\_list()](function.xattr-list.md) - Obtém uma lista de atributos estendidos
- [xattr\_set()](function.xattr-set.md) - Define um atributo estendido
- [xattr\_remove()](function.xattr-remove.md) - Remove um atributo estendido

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
