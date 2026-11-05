# Lê dados do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-read.php

---

# streamWrapper::stream\_read

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_read — Lê dados do fluxo

### Descrição

public function **streamWrapper::stream\_read**([int](language.types.integer.md) `$count`): [string](language.types.string.md)|[false](language.types.singleton.md)

Este método é chamado em resposta a [fread()](function.fread.md)
e [fgets()](function.fgets.md).

> **Nota**:
>
> Lembre-se de atualizar a posição de leitura/escrita do fluxo (com o número de
> bytes lidos com sucesso).

### Parâmetros

`count`
:   Quantos bytes de dados da posição atual devem ser retornados.

### Valor Retornado

Se houver menos bytes disponíveis que `count`,
devem ser retornados quantos estiverem disponíveis.
Se não houver mais dados, uma string vazia deve ser retornada.
Para sinalizar que a leitura falhou, **`false`** deve ser retornado.

### Erros/Exceções

Emite
um **`E_WARNING`** se a chamada a este método falhar
(ou seja, não implementado).

> **Nota**:
>
> Se o valor de retorno for maior que `count`, um aviso
> **`E_WARNING`** será emitido, e os dados excedentes serão
> perdidos.

### Notas

> **Nota**:
>
> [streamWrapper::stream\_eof()](streamwrapper.stream-eof.md) é chamado diretamente após a
> chamada a **streamWrapper::stream\_read()** para verificar se
> EOF foi alcançado. Se não implementado,
> EOF é assumido.

**Aviso**

Ao ler todo o arquivo (por exemplo, com
[file\_get\_contents()](function.file-get-contents.md)), o PHP irá chamar
**streamWrapper::stream\_read()** seguido por
[streamWrapper::stream\_eof()](streamwrapper.stream-eof.md) em um loop, mas enquanto
**streamWrapper::stream\_read()** retornar uma
string não vazia, o valor de retorno de
[streamWrapper::stream\_eof()](streamwrapper.stream-eof.md) será ignorado.

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo

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
