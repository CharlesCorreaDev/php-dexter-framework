# Define ou obtém o caminho para um domínio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bindtextdomain.php

---

# bindtextdomain

(PHP 4, PHP 5, PHP 7, PHP 8)

bindtextdomain — Define ou obtém o caminho para um domínio

### Descrição

function **bindtextdomain**([string](language.types.string.md) `$domain`, [?](language.types.null.md)[string](language.types.string.md) `$directory` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

A função **bindtextdomain()** define ou obtém um
caminho para um domínio.

### Parâmetros

`domain`
:   O domínio.

`directory`
:   O caminho do diretório.
    Uma string vazia significa o diretório atual.
    Se **`null`**, o diretório definido para o domínio é retornado.

### Valor Retornado

O caminho completo para o domínio definido por `domain`,
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `directory` agora é opcional. Anteriormente, sempre tinha que ser especificado. |
| 8.0.3 | `directory` agora pode ser nulo. Anteriormente, não era possível recuperar o diretório definido para o domínio. |

### Examples

**Exemplo #1 Exemplo de **bindtextdomain()****

```
<?php

$domain = 'myapp';
echo bindtextdomain($domain, '/usr/share/myapp/locale');

?>
```

O exemplo acima produzirá:

```
/usr/share/myapp/locale
```

### Notas

> **Nota**:
>
> A informação de **bindtextdomain()** é mantida por processo,
> não por thread.

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
