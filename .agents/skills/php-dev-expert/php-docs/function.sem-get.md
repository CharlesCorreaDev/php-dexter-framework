# Obtém um ID de semáforo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sem-get.php

---

# sem\_get

(PHP 4, PHP 5, PHP 7, PHP 8)

sem\_get — Obtém um ID de semáforo

### Descrição

function **sem\_get**(  
    [int](language.types.integer.md) `$key`,  
    [int](language.types.integer.md) `$max_acquire` = 1,  
    [int](language.types.integer.md) `$permissions` = 0666,  
    [bool](language.types.boolean.md) `$auto_release` = **`true`**  
): [SysvSemaphore](class.sysvsemaphore.md)|[false](language.types.singleton.md)

**sem\_get()** retorna um id que pode ser usado para
acessar o semáforo do System V com a chave fornecida em `key`.

Uma segunda chamada a **sem\_get()** com a mesma chave
retornará um identificador de semáforo diferente, mas ambos
os identificadores acessam o mesmo semáforo subjacente.

Se `key` for `0`, um novo semáforo privado
será criado para cada chamada a **sem\_get()**.

### Parâmetros

`key`

`max_acquire`
:   O número de processos que podem adquirir o semáforo simultaneamente
    é definido como `max_acquire`.

`permissions`
:   As permissões do semáforo. Na verdade, este valor é
    definido somente se o processo descobrir que é o único processo atualmente
    anexado ao semáforo.

`auto_release`
:   Especifica se o semáforo deve ser liberado automaticamente mediante
    desligamento da solicitação.

### Valor Retornado

Retorna um identificador de semáforo positivo em caso de sucesso, ou **`false`** em caso de
erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [SysvSemaphore](class.sysvsemaphore.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O tipo de `auto_release` foi alterado de [int](language.types.integer.md) para [bool](language.types.boolean.md). |

### Notas

**Aviso**

Ao usar **sem\_get()** para acessar um semáforo criado
fora do PHP, observe que o semáforo deve ter sido criado como um conjunto de 3
semáforos (por exemplo, especificando 3 como o parâmetro `nsems`
ao chamar a função `semget()` do C),
caso contrário, o PHP não conseguirá acessar o semáforo.

### Veja também

- [sem\_acquire()](function.sem-acquire.md) - Adquire um semáforo
- [sem\_release()](function.sem-release.md) - Libera um semáforo
- [ftok()](function.ftok.md) - Converte um nome de caminho e um identificador de projeto em uma chave IPC do System V

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
