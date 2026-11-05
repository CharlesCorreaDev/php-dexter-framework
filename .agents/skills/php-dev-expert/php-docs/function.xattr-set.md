# Define um atributo estendido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xattr-set.php

---

# xattr\_set

(PECL xattr >= 0.9.0)

xattr\_set — 
Define um atributo estendido

### Descrição

function **xattr\_set**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$value`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Esta função define o valor de um atributo estendido de um arquivo.

Os atributos estendidos têm dois namespaces diferentes: usuário
e root. O namespace de usuário está disponível para todos os usuários, enquanto o namespace de root
está disponível apenas para o usuário com privilégios de root. xattr opera no namespace de
usuário por padrão, mas isso pode ser alterado com o parâmetro
`flags`.

### Parâmetros

`filename`
:   O arquivo no qual o atributo será definido.

`name`
:   O nome do atributo estendido. Este atributo será criado se
    não existir ou, caso contrário, será substituído. Este comportamento pode ser alterado
    usando o parâmetro `flags`.

`value`
:   O valor do atributo.

`flags`
:   **Opções suportadas por xattr**

    |  |  |
    | --- | --- |
    | **`XATTR_CREATE`** | A função falhará se o atributo estendido já existir. |
    | **`XATTR_REPLACE`** | A função falhará se o atributo estendido não existir. |
    | **`XATTR_DONTFOLLOW`** | Não segue o link simbólico mas opera no link em si. |
    | **`XATTR_ROOT`** | Define o atributo no espaço de nomes (confiável) do administrador. Requer privilégios de administrador. |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Define atributos estendidos no arquivo .wav**

```
<?php
$file = 'minha_música_favorita.wav';
xattr_set($file, 'Artista', 'Alguém');
xattr_set($file, 'Minha avaliação', 'Boa');
xattr_set($file, 'Quantas vezes foi ouvida', '34');

/* ... outro código ... */

printf("Você ouviu esta música %d vezes", xattr_get($file, 'Quantas vezes foi ouvida'));
?>
```

### Veja também

- [xattr\_get()](function.xattr-get.md) - Obtém um atributo estendido
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
