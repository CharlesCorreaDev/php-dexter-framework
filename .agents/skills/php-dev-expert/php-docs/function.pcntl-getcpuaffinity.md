# Obtém a afinidade de CPU de um processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-getcpuaffinity.php

---

# pcntl\_getcpuaffinity

(PHP 8 >= 8.4.0)

pcntl\_getcpuaffinity — Obtém a afinidade de CPU de um processo

### Descrição

function **pcntl\_getcpuaffinity**([?](language.types.null.md)[int](language.types.integer.md) `$process_id` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém a afinidade de CPU de `process_id`.

### Parâmetros

`process_id`
:   Se **`null`**, o ID do processo atual será usado.

### Valor Retornado

Retorna a máscara de afinidade de CPU do processo, ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada quando
`process_id` é um ID de processo inválido
ou quando há falha na criação da máscara da CPU.

Se `process_id` for um processo para o qual o usuário
atual não tem permissões, um **`E_WARNING`**
é emitido.

### Veja também

- [pcntl\_setcpuaffinity()](function.pcntl-setcpuaffinity.md) - Define a afinidade de CPU de um processo

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
