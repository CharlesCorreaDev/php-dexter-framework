# Determina se uma lista de pares de substituição deve ser salva
   junto com a lista de palavras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-save-repl.php

---

# pspell\_config\_save\_repl

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_config\_save\_repl — Determina se uma lista de pares de substituição deve ser salva
junto com a lista de palavras

### Descrição

function **pspell\_config\_save\_repl**([PSpell\Config](class.pspell-config.md) `$config`, [bool](language.types.boolean.md) `$save`): [bool](language.types.boolean.md)

**pspell\_config\_save\_repl()** determina se
[pspell\_save\_wordlist()](function.pspell-save-wordlist.md) salvará os pares de substituição
junto com a lista de palavras. Normalmente, não há necessidade de usar esta função
porque se [pspell\_config\_repl()](function.pspell-config-repl.md) for usada,
os pares de substituição serão salvos por
[pspell\_save\_wordlist()](function.pspell-save-wordlist.md) de qualquer maneira, e se não for usada,
os pares de substituição não serão salvos.

**pspell\_config\_save\_repl()** deve ser usado em uma configuração
antes de chamar [pspell\_new\_config()](function.pspell-new-config.md).

### Parâmetros

`config`
:   Uma instância de [PSpell\Config](class.pspell-config.md).

`save`
:   **`true`** se os pares de substituição devem ser salvos, **`false`** caso contrário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Notas

> **Nota**:
>
> Esta função não funcionará a menos que se tenha o pspell .11.2 e o aspell .32.5
> ou posterior.

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
