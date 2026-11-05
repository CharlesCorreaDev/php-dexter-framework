# Obtém uma lista de atributos estendidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xattr-list.php

---

# xattr\_list

(PECL xattr >= 0.9.0)

xattr\_list — 
Obtém uma lista de atributos estendidos

### Descrição

function **xattr\_list**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

Esta função obtém uma lista de nomes de atributos estendidos de um arquivo.

Os atributos estendidos têm dois namespaces diferentes: usuário
e root. O namespace de usuário está disponível para todos os usuários, enquanto o namespace de root
está disponível apenas para o usuário com privilégios de root. xattr opera no namespace de
usuário por padrão, mas isso pode ser alterado com o parâmetro
`flags`.

### Parâmetros

`filename`
:   O caminho do arquivo.

`flags`
:   **Opções suportadas por xattr**

    |  |  |
    | --- | --- |
    | **`XATTR_DONTFOLLOW`** | Não segue o link simbólico mas opera no link em si. |
    | **`XATTR_ROOT`** | Define o atributo no espaço de nomes (confiável) do administrador. Requer privilégios de administrador. |

### Valor Retornado

Esta função retorna um array com nomes de atributos estendidos.

### Examples

**Exemplo #1 Exibe nomes de todos os atributos estendidos do arquivo**

```
<?php
$file = 'some_file';
$root_attributes = xattr_list($file, XATTR_ROOT);
$user_attributes = xattr_list($file);

echo "Atributos de administrador: \n";
foreach ($root_attributes as $attr_name) {
    printf("%s\n", $attr_name);
}

echo "\n Atributos de usuário: \n";
foreach ($user_attributes as $attr_name) {
    printf("%s\n", $attr_name);
}

?>
```

### Veja também

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
