# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/inotify.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes Inotify utilizáveis com [inotify\_add\_watch()](function.inotify-add-watch.md) e/ou retornadas por [inotify\_read()](function.inotify-read.md)**

**`IN_ACCESS`** ([int](language.types.integer.md))
:   Arquivo foi acessado (lido) (\*)

**`IN_MODIFY`** ([int](language.types.integer.md))
:   O arquivo foi modificado (\*)

**`IN_ATTRIB`** ([int](language.types.integer.md))
:   Metadados alterados (por exemplo, permissões, data/horário de modificação etc.) (\*)

**`IN_CLOSE_WRITE`** ([int](language.types.integer.md))
:   Arquivo aberto para escrita foi fechado (\*)

**`IN_CLOSE_NOWRITE`** ([int](language.types.integer.md))
:   Arquivo não aberto para escrita foi fechado (\*)

**`IN_OPEN`** ([int](language.types.integer.md))
:   O arquivo foi aberto (\*)

**`IN_MOVED_TO`** ([int](language.types.integer.md))
:   Arquivo movido para o diretório monitorado (\*)

**`IN_MOVED_FROM`** ([int](language.types.integer.md))
:   Arquivo movido para fora do diretório monitorado (\*)

**`IN_CREATE`** ([int](language.types.integer.md))
:   Arquivo ou diretório criado no diretório monitorado (\*)

**`IN_DELETE`** ([int](language.types.integer.md))
:   Arquivo ou diretório excluído no diretório monitorado (\*)

**`IN_DELETE_SELF`** ([int](language.types.integer.md))
:   O arquivo ou diretório monitorado foi excluído

**`IN_MOVE_SELF`** ([int](language.types.integer.md))
:   O arquivo ou diretório monitorado foi movido

**`IN_CLOSE`** ([int](language.types.integer.md))
:   Igual a IN\_CLOSE\_WRITE | IN\_CLOSE\_NOWRITE

**`IN_MOVE`** ([int](language.types.integer.md))
:   Igual a IN\_MOVED\_FROM | IN\_MOVED\_TO

**`IN_ALL_EVENTS`** ([int](language.types.integer.md))
:   Máscara de bits de todas as constantes acima

**`IN_UNMOUNT`** ([int](language.types.integer.md))
:   O sistema de arquivos que contém o objeto monitorado foi desmontado

**`IN_Q_OVERFLOW`** ([int](language.types.integer.md))
:   A fila de eventos estourou (wd é -1 para este evento)

**`IN_IGNORED`** ([int](language.types.integer.md))
:   O monitoramento foi removido (explicitamente por [inotify\_rm\_watch()](function.inotify-rm-watch.md)
    ou porque o arquivo foi removido ou o sistema de arquivos foi desmontado)

**`IN_ISDIR`** ([int](language.types.integer.md))
:   O sujeito deste evento é um diretório

**`IN_ONLYDIR`** ([int](language.types.integer.md))
:   Somente monitora o nome do caminho se for um diretório (desde o Linux 2.6.15)

**`IN_DONT_FOLLOW`** ([int](language.types.integer.md))
:   Não remove a referência do caminho se for uma ligação simbólica (desde o Linux 2.6.15)

**`IN_MASK_ADD`** ([int](language.types.integer.md))
:   Adiciona eventos para a máscara de monitoramento para este nome de caminho, se ele já existir
    (em vez de substituir a máscara).

**`IN_ONESHOT`** ([int](language.types.integer.md))
:   Monitora o nome do caminho de um evento e remove-o da lista de monitoramento.

> **Nota**:
>
> Os eventos marcados com um asterisco (\*) acima podem ocorrer para arquivos em
> diretórios monitorados.

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
