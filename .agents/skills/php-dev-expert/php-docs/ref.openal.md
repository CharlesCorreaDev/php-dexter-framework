# Funções de OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.openal.php

---

# Funções de OpenAL

## Índice

- [openal\_buffer\_create](function.openal-buffer-create.md) — Gera buffer OpenAL
- [openal\_buffer\_data](function.openal-buffer-data.md) — Carrega um buffer com dados
- [openal\_buffer\_destroy](function.openal-buffer-destroy.md) — Destrói um buffer OpenAL
- [openal\_buffer\_get](function.openal-buffer-get.md) — Recupera uma propriedade de buffer OpenAL
- [openal\_buffer\_loadwav](function.openal-buffer-loadwav.md) — Carrega um arquivo .wav em um buffer
- [openal\_context\_create](function.openal-context-create.md) — Cria um contexto de processamento de áudio
- [openal\_context\_current](function.openal-context-current.md) — Torna o contexto especificado atual
- [openal\_context\_destroy](function.openal-context-destroy.md) — Destrói um contexto
- [openal\_context\_process](function.openal-context-process.md) — Processa o contexto especificado
- [openal\_context\_suspend](function.openal-context-suspend.md) — Suspende o contexto especificado
- [openal\_device\_close](function.openal-device-close.md) — Fecha um dispositivo OpenAL
- [openal\_device\_open](function.openal-device-open.md) — Inicializa a camada de áudio OpenAL
- [openal\_listener\_get](function.openal-listener-get.md) — Recupera uma propriedade do ouvinte
- [openal\_listener\_set](function.openal-listener-set.md) — Define uma propriedade de ouvinte
- [openal\_source\_create](function.openal-source-create.md) — Gera um recurso de origem
- [openal\_source\_destroy](function.openal-source-destroy.md) — Destrói um recurso de origem
- [openal\_source\_get](function.openal-source-get.md) — Recupera uma propriedade de origem OpenAL
- [openal\_source\_pause](function.openal-source-pause.md) — Pausa a origem
- [openal\_source\_play](function.openal-source-play.md) — Começa a reproduzir a origem
- [openal\_source\_rewind](function.openal-source-rewind.md) — Retrocede a origem
- [openal\_source\_set](function.openal-source-set.md) — Define propriedade da origem
- [openal\_source\_stop](function.openal-source-stop.md) — Para de reproduzir a origem
- [openal\_stream](function.openal-stream.md) — Inicia a transmissão de uma origem

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
