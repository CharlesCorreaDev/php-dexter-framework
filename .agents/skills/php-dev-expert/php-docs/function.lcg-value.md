# Gerador congruente linear combinado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lcg-value.php

---

# lcg\_value

(PHP 4, PHP 5, PHP 7, PHP 8)

lcg\_value — Gerador congruente linear combinado

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.4.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **lcg\_value**(): [float](language.types.float.md)

**lcg\_value()** retorna um número pseudoaleatório no
intervalo de (0, 1). A função combina dois CGs com períodos
de 2^31 - 85 e 2^31 - 249. O período desta função é igual
ao produto de ambos os primos.

**Cuidado**

Esta função não gera valores criptograficamente seguros e *não deve*
ser usada para propósitos criptográficos ou fins que exijam que os valores retornados sejam impossíveis de adivinhar.

Se aleatoriedade criptograficamente segura for necessária, a classe [Random\Randomizer](class.random-randomizer.md) pode ser
usada com o mecanismo [Random\Engine\Secure](class.random-engine-secure.md). Para casos de uso simples, as funções [random\_int()](function.random-int.md)
e [random\_bytes()](function.random-bytes.md) fornecem uma API conveniente e segura que é garantida pelo
CSPRNG do sistema operacional.

**Cuidado**

Escalar o valor de retorno para um intervalo diferente usando multiplicação
ou adição (também chamado de transformação afim) pode resultar em uma tendência
no valor resultante, pois os pontos flutuantes não são igualmente densos ao longo da reta
numérica. Como nem todos os valores podem ser representados exatamente por um ponto flutuante, o
resultado da transformação afim também pode resultar em valores fora
do intervalo solicitado.

Use [Random\Randomizer::getFloat()](random-randomizer.getfloat.md) para gerar um
float aleatório dentro de um intervalo arbitrário. Use [Random\Randomizer::getInt()](random-randomizer.getint.md)
para gerar um número inteiro aleatório dentro de um intervalo arbitrário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um valor flutuante pseudoaleatório entre 0,0 e 1,0, inclusive.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função foi descontinuada. |

### Veja também

- [Random\Randomizer::getFloat()](random-randomizer.getfloat.md) - Obtém um float selecionado uniformemente
- [Random\Randomizer::getInt()](random-randomizer.getint.md) - Obtém um inteiro selecionado uniformemente
- [random\_int()](function.random-int.md) - Obtém um número inteiro selecionado uniformemente e criptograficamente seguro

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
