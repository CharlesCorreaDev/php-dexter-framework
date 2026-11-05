# Hash unidirecional de string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.crypt.php

---

# crypt

(PHP 4, PHP 5, PHP 7, PHP 8)

crypt — Hash unidirecional de string

**Aviso**

Esta função
(ainda) não é compatível com dados binários!

### Descrição

function **crypt**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`, [string](language.types.string.md) `$salt`): [string](language.types.string.md)

**crypt()** retorna uma string com hash usando o
algorimo padrão do Unix baseado em DES ou
algortimos alternativos. [password\_verify()](function.password-verify.md) é
compatível com **crypt()**. Portanto, hashes de
senhas criados por **crypt()** podem ser usados com
[password\_verify()](function.password-verify.md).

Antes do PHP 8.0.0, o parâmetro `salt` era opcional. Entretanto, **crypt()** criava um hash fraco sem `salt` e emitia um erro do tipo **`E_NOTICE`**. Certifique-se de especificar um sal forte o suficiente para uma melhor segurança de dados.

[password\_hash()](function.password-hash.md) usa um hash forte, gera um sal forte e aplica arredondamentos apropriados automaticamente. [password\_hash()](function.password-hash.md) é um empacotador simples de **crypt()** e compatível com hashes de senhas existentes. O uso de [password\_hash()](function.password-hash.md) é encorajado.

O tipo de hash é disparado pelo argumento salt (sal).
Se nenhum sal for fornecido, o PHP irá
gerar automaticamente um sal padrão de 2 caracteres (DES) ou de
12 caracteres (MD5), dependendo da disponibilidade de crypt() MD5. O PHP define uma
constante de nome **`CRYPT_SALT_LENGTH`** que indica o
comprimento máximo de sal permitido pelos hashes disponíveis.

A função **crypt()** padrão baseada em DES retorna o
sal como os 2 primeiros caracteres da saída. Ela também somente usa os
primeiros 8 caracteres da `string`, portanto strings mais longas
que começam com os mesmos 8 caracteres irão gerar o mesmo resultado
(quando o mesmo sal é usado).

Os seguintes tipos de hash são suportados:

- **`CRYPT_STD_DES`** - Hash padrão baseado em DES com sal de 2 caracteres
  do conjunto "./0-9A-Za-z". Usar caracteres inválidos no sal irá causar falha
  na função crypt().
- **`CRYPT_EXT_DES`** - Hash estendido baseado em DEX. O "sal" é uma
  string de 9 caracteres que consiste de um "\_" seguido por 4 caracteres de contagem de iteração
  e 4 caracteres de sal. Cada string de 4 caracteres é codificada em 24 bits, os caracteres
  menos significativos primeiro. Os valores `0` a `63` são codificados como
  `./0-9A-Za-z`. Usar caracteres inválidos no sal irá causar falha na função crypt().
- **`CRYPT_MD5`** - Hash MD5 com sal de 12 caracteres iniciando com
  $1$
- **`CRYPT_BLOWFISH`** - Hash Blowfish com o sal desta
  forma: "$2a$", "$2x$" ou "$2y$", um parâmetro de custo de 2 dígitos, "$", e
  22 caracteres do conjunto "./0-9A-Za-z". Usar caracteres fora deste
  conjunto no sal fará com que crypt() retorne uma string de comprimento zero.
  O parâmetro de custo de 2 dígitos é o logaritmo base 2 da contagem de
  iteração para o algortimo de hash baseado em Blowfish subjacente e precisa estar
  no intervalo 04-31. Valores fora deste intervalo causarão falha na função crypt().
  Hashes "$2x$" são potencialmente fracas; hashes "$2a$" são compatíveis e
  mitigam esta fraqueza. Para novas hashes, "$2y$" deve ser usada.
- **`CRYPT_SHA256`** - Hash SHA-256 com sal de 16 caracteres
  prefixados com $5$. Se a string do sal iniciar com 'rounds=<N>$', o valor numérico de N
  é usado para indicar quantas rodadas do hash devem ser executadas, bem parecido com
  o parâmetro de custo do Blowfish. O número padrão de rodadas é 5000, existe um mínimo de
  1.000 e um máximo de 999.999.999. Qualquer seleção de N fora deste intervalo será truncado ao
  limite mais próximo.
- **`CRYPT_SHA512`** - Hash SHA-512 com sal de 16 caracteres
  prefixados com $6$. Se a string do sal iniciar com 'rounds=<N>$', o valor numérico de N
  é usado para indicar quantas rodadas do hash devem ser executadas, bem parecido com
  o parâmetro de custo do Blowfish. O número padrão de rodadas é 5000, existe um mínimo de
  1.000 e um máximo de 999.999.999. Qualquer seleção de N fora deste intervalo será truncado ao
  limite mais próximo.

### Parâmetros

`string`
:   A string cujo hash será calculado.

    **Cuidado**

    Usar o algortimo **`CRYPT_BLOWFISH`** fará com que
    o parâmetro `string` seja truncado para um
    comprimento máximo de 72 bytes.

`salt`
:   Uma string de sal para servir como base para a operação de hash. Se não fornecido,
    o comportamento é definido pela implementação do algoritmo e pode levar a
    resultados inesperados.

### Valor Retornado

Retorna o hash da string ou uma string mais curta que 13 caracteres
que seja garantidamente diferente do sal em caso de falha.

**Aviso**

Ao validar senhas, uma função de comparação de strings que não seja
vulnerável a ataques de temporização deve ser usada para comparar a saída de
**crypt()** ao hash conhecido anteriormente. O PHP
fornece a função [hash\_equals()](function.hash-equals.md) para este propósito.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `salt` não é mais opcional. |

### Examples

**Exemplo #1 Exemplos de **crypt()****

```
<?php
$user_input = 'rasmuslerdorf';
$hashed_password = '$6$rounds=1000000$NJy4rIPjpOaU$0ACEYGg/aKCY3v8O8AfyiO7CTfZQ8/W231Qfh2tRLmfdvFD6XfHk12u6hMr9cYIA4hnpjLNSTRtUwYr9km9Ij/';

// Valida um hash existente criado por crypt() de forma compatível com software não-PHP.
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
   echo "Senha verificada!";
}
?>
```

### Notas

> **Nota**:
>
> Não existe função de descriptografia, já que **crypt()** usa um
> algoritmo unidirecional.

### Veja também

- [hash\_equals()](function.hash-equals.md) - Comparação de strings segura para ataque de temporização
- [password\_hash()](function.password-hash.md) - Cria um hash de senha
- A página do manual Unix para a função crypt() para mais informação

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
