# Exibe um arquivo gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readgzfile.php

---

# readgzfile

(PHP 4, PHP 5, PHP 7, PHP 8)

readgzfile — Exibe um arquivo gz

### Descrição

function **readgzfile**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$use_include_path` = **`false`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Lê um arquivo, descomprime-o e escreve-o na saída padrão.

**readgzfile()** pode ser usada para ler um arquivo que não está em
formato gzip; neste caso, **readgzfile()** irá diretamente
ler do arquivo sem descompressão.

### Parâmetros

`filename`
:   O nome do arquivo. Este arquivo será aberto do sistema de arquivos e seu
    conteúdo será escrito na saída padrão.

`use_include_path`
:   Quando definido para **`true`**, o
    [include\_path](ini.core.md#ini.include-path)
    será usado para determinar que arquivo deve ser aberto.

### Valor Retornado

Retorna o número de bytes (descomprimidos) lidos do arquivo com sucesso,
ou **`false`** em caso de falha

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `use_include_path` agora é do tipo [bool](language.types.boolean.md). Anteriormente era do tipo [int](language.types.integer.md). |

### Veja também

- [gzpassthru()](function.gzpassthru.md) - Escreve na saída todos os dados restantes em um ponteiro de arquivo gz
- [gzfile()](function.gzfile.md) - Lê todo o arquivo gz em um array
- [gzopen()](function.gzopen.md) - Abre arquivo gz

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
