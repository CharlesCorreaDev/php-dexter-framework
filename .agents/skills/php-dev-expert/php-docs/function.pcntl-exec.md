# Executa o programa especificado no espaço do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-exec.php

---

# pcntl\_exec

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pcntl\_exec — Executa o programa especificado no espaço do processo atual

### Descrição

function **pcntl\_exec**([string](language.types.string.md) `$path`, [array](language.types.array.md) `$args` = [], [array](language.types.array.md) `$env_vars` = []): [false](language.types.singleton.md)

Executa o programa com os argumentos fornecidos.

### Parâmetros

`path`
:   `path` deve ser o caminho para um executável binário ou um
    script com um caminho válido apontando para um executável no shebang (
    #!/usr/local/bin/perl por exemplo) como a primeira linha. Consulte a página
    man execve(2) do seu sistema para obter informações adicionais.

`args`
:   `args` é um array de strings de argumentos passadas ao
    programa.

`env_vars`
:   `env_vars` é um array de strings que são passadas como
    ambiente para o programa. O array está no formato nome => valor,
    a chave sendo o nome da variável de ambiente e o valor sendo
    o valor dessa variável.

### Valor Retornado

Retorna **`false`**.

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
