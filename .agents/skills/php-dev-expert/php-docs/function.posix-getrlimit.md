# Retorna informações sobre limites de recursos do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getrlimit.php

---

# posix\_getrlimit

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getrlimit — Retorna informações sobre limites de recursos do sistema

### Descrição

function **posix\_getrlimit**([?](language.types.null.md)[int](language.types.integer.md) `$resource` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**posix\_getrlimit()** retorna um [array](language.types.array.md) de informações sobre os
limites flexíveis e rígidos do recurso atual.

Cada recurso tem um limite flexível e um limite rígido associado. O limite
flexível é o valor que o kernel impõe ao recurso
correspondente. O limite rígido funciona com um teto máximo para o limite flexível.
Um processo sem privilégios pode apenas definir seu limite flexível para um valor
entre 0 e o limite rígido e reduzir irreversivelmente seu limite rígido.

### Parâmetros

`resource`
:   Se **`null`**, todos os limites de recursos atuais serão retornados.
    Caso contrário, especifique uma
    [constante de limite de recurso](posix.constants.setrlimit.md)
    para obter um limite específico.

### Valor Retornado

Retorna um [array](language.types.array.md) associativo de elementos para cada
limite definido. Cada limite tem um limite flexível ("soft") e um limite rígido ("hard").

**Lista de possíveis limites retornados**

| Nome do limite | Descrição do limite |
| --- | --- |
| core | O tamanho máximo do arquivo de imagem de memória. Quando 0, não são criados arquivos de imagem de memória. Quando os arquivos de imagem forem maiores que esse tamanho, eles serão truncados nesse tamanho. |
| totalmem | O tamanho máximo da memória do processo, em bytes. |
| virtualmem | O tamanho máximo da memória virtual para o processo, em bytes. |
| data | O tamanho máximo do segmento de dados do processo, em bytes. |
| stack | O tamanho máximo da pilha de processos, em bytes. |
| rss | O número máximo de páginas virtuais residentes na RAM. |
| maxproc | O número máximo de processos que podem ser criados para o ID do usuário real do processo de chamada. |
| memlock | O número máximo de bytes de memória que podem ser bloqueados na RAM. |
| cpu | A quantidade de tempo que o processo pode usar a CPU. |
| filesize | O tamanho máximo do segmento de dados do processo, em bytes. |
| openfiles | Um a mais que o número máximo de descritores de arquivos abertos. |

A função retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | O parâmetro opcional `resource` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getrlimit()****

```
<?php

$limits = posix_getrlimit();

print_r($limits);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [soft core] => 0
    [hard core] => unlimited
    [soft data] => unlimited
    [hard data] => unlimited
    [soft stack] => 8388608
    [hard stack] => unlimited
    [soft totalmem] => unlimited
    [hard totalmem] => unlimited
    [soft rss] => unlimited
    [hard rss] => unlimited
    [soft maxproc] => unlimited
    [hard maxproc] => unlimited
    [soft memlock] => unlimited
    [hard memlock] => unlimited
    [soft cpu] => unlimited
    [hard cpu] => unlimited
    [soft filesize] => unlimited
    [hard filesize] => unlimited
    [soft openfiles] => 1024
    [hard openfiles] => 1024
)
```

### Veja também

- Página GETRLIMIT(2) do manual POSIX
- [posix\_setrlimit()](function.posix-setrlimit.md) - Define limites de recursos do sistema

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
