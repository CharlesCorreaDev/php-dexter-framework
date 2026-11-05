# Define o domínio padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.textdomain.php

---

# textdomain

(PHP 4, PHP 5, PHP 7, PHP 8)

textdomain — Define o domínio padrão

### Descrição

function **textdomain**([?](language.types.null.md)[string](language.types.string.md) `$domain` = **`null`**): [string](language.types.string.md)

Esta função define o domínio a ser pesquisado quando chamadas são
feitas para [gettext()](function.gettext.md), geralmente o nome de um
aplicativo.

### Parâmetros

`domain`
:   O novo domínio de mensagem, ou **`null`** para obter a configuração atual
    sem alterá-la

### Valor Retornado

Se for bem-sucedida, esta função retorna o domínio de mensagem
atual, após possivelmente alterá-lo.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `domain`
for uma [string](language.types.string.md) vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `domain` for uma [string](language.types.string.md) vazia. |
| 8.4.0 | `domain` agora é opcional. Anteriormente, sempre tinha que ser especificado. |

### Notas

> **Nota**:
>
> As informações do **textdomain()** são mantidas por processo,
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
