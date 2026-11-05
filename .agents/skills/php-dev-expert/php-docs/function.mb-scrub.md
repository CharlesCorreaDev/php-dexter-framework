# Substitui sequências de bytes malformadas pelo caractere substituto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-scrub.php

---

# mb\_scrub

(PHP 7 >= 7.2.0, PHP 8)

mb\_scrub — Substitui sequências de bytes malformadas pelo caractere substituto

### Descrição

function **mb\_scrub**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Realiza uma conversão de conjunto de caracteres a partir da codificação especificada, ou a codificação padrão se nenhuma
codificação for especificada, para a mesma codificação. Isso tem o efeito de substituir qualquer sequência de bytes inválida
pelo caractere substituto.

### Parâmetros

`string`
:   A string de entrada.

`encoding`
:   A codificação usada para interpretar `string`.
    Se for omitida ou **`null`**, o
    [mbstring.internal\_encoding setting](mbstring.configuration.md#ini.mbstring.internal-encoding)
    será usado se configurado, caso contrário, o
    [default\_charset setting](ini.core.md#ini.default-charset) será usado.

### Valor Retornado

O resultado [string](language.types.string.md) com sequências de bytes inválidas substituídas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

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
