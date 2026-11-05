# Especifica ou obtém a codificação de caracteres na qual as mensagens do catálogo de mensagens de DOMÍNIO serão retornadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bind-textdomain-codeset.php

---

# bind\_textdomain\_codeset

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

bind\_textdomain\_codeset — Especifica ou obtém a codificação de caracteres na qual as mensagens do catálogo de mensagens de DOMÍNIO serão retornadas

### Descrição

function **bind\_textdomain\_codeset**([string](language.types.string.md) `$domain`, [?](language.types.null.md)[string](language.types.string.md) `$codeset` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**bind\_textdomain\_codeset()** permite definir ou obter a
codificação na qual as mensagens de `domain` serão retornadas por
[gettext()](function.gettext.md) e funções similares.

### Parâmetros

`domain`
:   O domínio.

`codeset`
:   O conjunto de caracteres.
    Se **`null`**, a codificação atualmente definida é retornada.

### Valor Retornado

Uma [string](language.types.string.md) em caso de sucesso.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se `domain`
for uma [string](language.types.string.md) vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `domain` for uma [string](language.types.string.md) vazia. |
| 8.4.0 | `codeset` agora é opcional. Anteriormente, sempre tinha que ser especificado. |
| 8.0.3 | `codeset` agora pode ser nulo. Anteriormente, não era possível recuperar a codificação definida. |

### Notas

> **Nota**:
>
> A informação de **bind\_textdomain\_codeset()** é mantida por processo,
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
