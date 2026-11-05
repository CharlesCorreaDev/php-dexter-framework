# Fecha um dispositivo OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-device-close.php

---

# openal\_device\_close

(PECL openal >= 0.1.0)

openal\_device\_close — 
Fecha um dispositivo OpenAL

### Descrição

function **openal\_device\_close**([resource](language.types.resource.md) `$device`): [bool](language.types.boolean.md)

### Parâmetros

`device`
:   Um recurso [Open AL(Device)](openal.resources.md)
    (criado anteriormente por [openal\_device\_open()](function.openal-device-open.md))
    a ser fechado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_device\_open()](function.openal-device-open.md) - Inicializa a camada de áudio OpenAL

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
