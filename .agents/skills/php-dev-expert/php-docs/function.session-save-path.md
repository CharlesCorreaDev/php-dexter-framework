# Obtém e/ou define o caminho para armazenamento da sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-save-path.php

---

# session\_save\_path

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_save\_path — Obtém e/ou define o caminho para armazenamento da sessão atual

### Descrição

function **session\_save\_path**([?](language.types.null.md)[string](language.types.string.md) `$path` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_save\_path()** retorna o caminho do diretório
atual utilizado para salvar os dados de sessão.

### Parâmetros

`path`
:   Caminho dos dados de sessão. Se informado e não **`null`**, o caminho onde os dados são salvos será
    alterado. **session\_save\_path()** precisa ser chamada
    antes de [session\_start()](function.session-start.md) para isto.

    > **Nota**:
    >
    > Em alguns sistemas operacionais, talvez seja melhor especificar um caminho para um
    > sistema de arquivos que possa lidar eficientemente com uma grande quantidade de arquivos pequenos.

### Valor Retornado

Retorna o caminho atual do diretório usado para o armazenamento de dados, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `path` agora pode ser nulo. |

### Veja também

- [session.save\_path](session.configuration.md#ini.session.save-path)
  (diretiva de configuração)

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
