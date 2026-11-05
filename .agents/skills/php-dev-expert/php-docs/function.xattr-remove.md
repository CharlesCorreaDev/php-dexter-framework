# Remove um atributo estendido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xattr-remove.php

---

# xattr\_remove

(PECL xattr >= 0.9.0)

xattr\_remove — 
Remove um atributo estendido

### Descrição

function **xattr\_remove**([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Esta função remove um atributo estendido de um arquivo.

Os atributos estendidos têm dois namespaces diferentes: usuário
e root. O namespace de usuário está disponível para todos os usuários, enquanto o namespace de root
está disponível apenas para o usuário com privilégios de root. xattr opera no namespace de
usuário por padrão, mas isso pode ser alterado com o parâmetro
`flags`.

### Parâmetros

`filename`
:   O arquivo do qual o atributo será removido.

`name`
:   O nome do atributo a ser removido.

`flags`
:   **Opções suportadas por xattr**

    |  |  |
    | --- | --- |
    | **`XATTR_DONTFOLLOW`** | Não segue o link simbólico mas opera no link em si. |
    | **`XATTR_ROOT`** | Define o atributo no espaço de nomes (confiável) do administrador. Requer privilégios de administrador. |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Remove todos os atributos estendidos de um arquivo**

```
<?php
$file = 'some_file';
$attributes = xattr_list($file);

foreach ($attributes as $attr_name) {
    xattr_remove($file, $attr_name);
}
?>
```

### Veja também

- [xattr\_list()](function.xattr-list.md) - Obtém uma lista de atributos estendidos
- [xattr\_set()](function.xattr-set.md) - Define um atributo estendido
- [xattr\_get()](function.xattr-get.md) - Obtém um atributo estendido

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
