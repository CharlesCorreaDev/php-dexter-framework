# Gera um identificador baseado em horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uniqid.php

---

# uniqid

(PHP 4, PHP 5, PHP 7, PHP 8)

uniqid — Gera um identificador baseado em horário

### Descrição

function **uniqid**([string](language.types.string.md) `$prefix` = "", [bool](language.types.boolean.md) `$more_entropy` = **`false`**): [string](language.types.string.md)

Obtém um identificador baseado no horário atual com precisão de microssegundos,
prefixado com o parâmetro `prefix` e adicionando
opcionalmente um valor gerado aleatoriamente.

**Cuidado**

Esta função não gera valores criptograficamente seguros e *não deve*
ser usada para propósitos criptográficos ou fins que exijam que os valores retornados sejam impossíveis de adivinhar.

Se aleatoriedade criptograficamente segura for necessária, a classe [Random\Randomizer](class.random-randomizer.md) pode ser
usada com o mecanismo [Random\Engine\Secure](class.random-engine-secure.md). Para casos de uso simples, as funções [random\_int()](function.random-int.md)
e [random\_bytes()](function.random-bytes.md) fornecem uma API conveniente e segura que é garantida pelo
CSPRNG do sistema operacional.

**Aviso**

Esta função não garante a unicidade do valor
retornado porque o valor é baseado no horário atual em microssegundos
ou no horário atual com uma pequena quantidade de dados aleatórios adicionados
se `more_entropy` for **`true`**.

### Parâmetros

`prefix`
:   Pode ser útil, por exemplo, para gerar identificadores
    simultaneamente em vários servidores que poderiam gerar o
    mesmo identificador no mesmo microssegundo. Isso pode acontecer
    até no mesmo servidor se o relógio do sistema for atrasado,
    como em um ajuste de NTP.

    Com um `prefix` vazio, a string retornada terá
    13 caracteres. Se `more_entropy` for
    **`true`**, a string terá 23 caracteres.

`more_entropy`
:   Se informado como **`true`**, **uniqid()** irá adicionar
    entropia (utilizando um gerador linear congruente) ao final do
    do valor retornado, o que aumentará as chances que o resultado seja
    globalmente único.

### Valor Retornado

Retorna um identificador baseado em horário, como uma string.

**Aviso**

Esta função não garante a unicidade do valor retornado.

### Examples

**Exemplo #1 Exemplo de **uniqid()****

```
<?php
/* Um identificador, por exemplo: 4b3403665fea6 */
printf("uniqid(): %s\r\n", uniqid());

/* Também pode prefixar o identificador, que é o mesmo que
 * fazer:
 *
 * $uniqid = $prefix . uniqid();
 * $uniqid = uniqid($prefix);
 */
printf("uniqid('php_'): %s\r\n", uniqid('php_'));

/* Pode-se também ativar o parâmetro more_entropy, o que
 * é exigido em alguns sistemas, como o Cygwin. Isto faz que uniqid()
 * produza um valor como: 4b340550242239.64159797
 */
printf("uniqid('', true): %s\r\n", uniqid('', true));
?>
```

### Notas

> **Nota**:
>
> Sob o Cygwin, o parâmetro `more_entropy` deve ser configurado
> como **`true`** para que essa função funcione.

### Veja também

- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros

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
