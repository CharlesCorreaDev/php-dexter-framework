# Inicializa a camada de áudio OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-device-open.php

---

# openal\_device\_open

(PECL openal >= 0.1.0)

openal\_device\_open — 
Inicializa a camada de áudio OpenAL

### Descrição

function **openal\_device\_open**([string](language.types.string.md) `$device_desc` = ?): [resource](language.types.resource.md)

### Parâmetros

`device_desc`
:   Abre um dispositivo de áudio opcionalmente especificado por `device_desc`.
    Se `device_desc` não for especificado, o primeiro dispositivo de áudio
    disponível será usado.

### Valor Retornado

Retorna um recurso [Open AL(Device)](openal.resources.md) em caso de sucesso ou
**`false`** em caso de falha.

### Veja também

- [openal\_device\_close()](function.openal-device-close.md) - Fecha um dispositivo OpenAL
- [openal\_context\_create()](function.openal-context-create.md) - Cria um contexto de processamento de áudio

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
