# Alterar metadados de fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-metadata.php

---

# streamWrapper::stream\_metadata

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

streamWrapper::stream\_metadata — Alterar metadados de fluxo

### Descrição

public function **streamWrapper::stream\_metadata**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Este método é chamado para definir metadados no fluxo. É chamado quando uma das funções a seguir é chamada em uma URL de fluxo:

- [touch()](function.touch.md)
- [chmod()](function.chmod.md)
- [chown()](function.chown.md)
- [chgrp()](function.chgrp.md)

Favor notar que algumas destas operações podem não estar disponíveis no sistema.

### Parâmetros

`path`
:   O caminho ou URL de arquivo para configurar os metadados. Note que no caso de uma URL, deve haver um :// delimitando-a.
    Outras formas de URL não são suportadas.

`option`
:   Uma das opções:

    - **`STREAM_META_TOUCH`** (método foi chamado em resposta a [touch()](function.touch.md))
    - **`STREAM_META_OWNER_NAME`** (método foi chamado em resposta a [chown()](function.chown.md) com parâmetro string)
    - **`STREAM_META_OWNER`** (método foi chamado em resposta a [chown()](function.chown.md))
    - **`STREAM_META_GROUP_NAME`** (método foi chamado em resposta a [chgrp()](function.chgrp.md))
    - **`STREAM_META_GROUP`** (método foi chamado em resposta a [chgrp()](function.chgrp.md))
    - **`STREAM_META_ACCESS`** (método foi chamado em resposta a [chmod()](function.chmod.md))

`value`
:   Se a opção for `option`

    - **`STREAM_META_TOUCH`**: [Array](language.types.array.md) consistindo de dois argumentos da função
      [touch()](function.touch.md).
    - **`STREAM_META_OWNER_NAME`** ou **`STREAM_META_GROUP_NAME`**:
      O nome do usuário/grupo proprietário, como uma [string](language.types.string.md).
    - **`STREAM_META_OWNER`** ou **`STREAM_META_GROUP`**:
      O valor do usuário/grupo proprietário, como um [int](language.types.integer.md).
    - **`STREAM_META_ACCESS`**: O argumento de [chmod()](function.chmod.md), como [int](language.types.integer.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se a opção (`option`) não estiver implementada, **`false`** deve ser
retornado.

### Veja também

- [touch()](function.touch.md) - Define horário de acesso e de modificação de arquivo
- [chmod()](function.chmod.md) - Modifica as permissões do arquivo
- [chown()](function.chown.md) - Modifica o proprietário do arquivo
- [chgrp()](function.chgrp.md) - Altera o grupo do arquivo

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
