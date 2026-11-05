# Converte um nome de caminho e um identificador de projeto em uma chave IPC do System V

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftok.php

---

# ftok

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ftok — Converte um nome de caminho e um identificador de projeto em uma chave IPC do System V

### Descrição

function **ftok**([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$project_id`): [int](language.types.integer.md)

A função converte o `filename` de um arquivo acessível existente
e um identificador de projeto em um
`integer` para uso com, por exemplo,
[shmop\_open()](function.shmop-open.md) e outras chaves IPC do System V.

### Parâmetros

`filename`
:   Caminho para um arquivo acessível.

`project_id`
:   Identificador do projeto. Deve ser uma string de um caractere.

### Valor Retornado

Em caso de sucesso, o valor de retorno será o valor da chave criada; caso contrário,
`-1` será retornado.

### Veja também

- [shmop\_open()](function.shmop-open.md) - Cria ou abre um bloco de memória compartilhada
- [sem\_get()](function.sem-get.md) - Obtém um ID de semáforo

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
